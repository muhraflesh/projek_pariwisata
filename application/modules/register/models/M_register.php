<?php

class M_register extends CI_Model{
    
    function regis($data){		
        $password           = $data['password'];
        $email              = $data['email'];
        $username           = $data['username'];
        $user_type          = $data['type'];
        $options            = ['cost' => 12];
        $user_id            = $this->guidv4();
        $verification_id    = $this->guidv4();
        $permitted_chars    = '012345678976787723019802892836302881274839';
        $verification_code  = substr(str_shuffle($permitted_chars), 0, 6);
        $hashedpass         = password_hash($password, PASSWORD_BCRYPT, $options);
        
        $this->db->select("*");
		$this->db->from("user");
		$this->db->where("username", $username);

		$query  = $this->db->get();
		$checkUsername   = $query->result_array();

        $this->db->select("*");
		$this->db->from("user");
		$this->db->where("email", $email);

		$query  = $this->db->get();
		$checkEmail   = $query->result_array();

        $returnData = new \stdClass();

        if (count($checkEmail) > 0) {
            $returnData->status_code = "409";
            $returnData->message = "email exist";
        } else if (count($checkUsername) > 0) {
            $returnData->status_code = "409";
            $returnData->message = "username exist";
        } else {
            $resultSendEmail = $this->sendEmail($email, $verification_code);

            $insertedUser['id'] = $user_id;
            $insertedUser['username'] = $username;
            $insertedUser['email'] = $email;
            $insertedUser['user_type'] = $user_type;
            $insertedUser['password'] = $hashedpass;
            $insertedUser['verification_id'] = $verification_id;
            $insertedUser['role_id'] = 'cacff090-75a4-466f-a467-bf69b41333b3';
           
            $insertedVerification['id'] = $verification_id;
            $insertedVerification['code'] = $verification_code;
            
            $this->db->trans_start();
            $this->db->insert('user', $insertedUser);
            $this->db->insert('verification', $insertedVerification);
            $this->db->trans_complete();
            
            $returnData->status_code = "200";
            $returnData->message = "success";
        }
        return $returnData;
	}	

    function guidv4($data = null) {
        $data = $data ?? random_bytes(16);
        assert(strlen($data) == 16);
    
        $data[6] = chr(ord($data[6]) & 0x0f | 0x40);
        $data[8] = chr(ord($data[8]) & 0x3f | 0x80);
    
        return vsprintf('%s%s-%s-%s-%s-%s%s%s', str_split(bin2hex($data), 4));
    }

    function sendEmail($emailTarget, $verification_code) {
        $config = [
            'mailtype'  => 'html',
            'charset'   => 'utf-8',
            'protocol'  => 'smtp',
            'smtp_host' => 'smtp.gmail.com',
            'smtp_user' => 'resideswitabantul@gmail.com',
            'smtp_pass'   => 'Bantul1967',
            'smtp_crypto' => 'ssl',
            'smtp_port'   => 465,
            'crlf'    => "\r\n",
            'newline' => "\r\n"
        ];

        $this->load->library('email', $config);
        $this->email->from('no-reply@gmail.com', 'Dinas Pariwisata');
        $this->email->to($emailTarget);

        $this->email->subject('Kode Verifikasi Akun');
        $this->email->message("Ini adalah kode verifikasi yang anda gunakan untuk verifikasi akun di web dinas pariwisata.<br><br> <strong>" . $verification_code . "</strong>");

        if ($this->email->send()) {
            return 200;
        } else {
            return 500;
        }
    }

}