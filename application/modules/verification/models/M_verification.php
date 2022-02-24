<?php

class M_verification extends CI_Model{

    function verifikasi($data){		
        $code   = $data['code'];

        $this->db->select('u.id');
        $this->db->from('user u'); 
        $this->db->join('verification v', 'u.verification_id = v.id', 'left');
		$this->db->where("v.code", $code);

		$query  = $this->db->get();
		$data   = $query->result_array();

        $response = new \stdClass();

        if (count($data) > 0) {
            $response->status_code = "200";
            $response->message = "Verification success";
        } else {
            $response->status_code = "404";
            $response->message = "Verification failed";
        }
        return $response;
	}	

}