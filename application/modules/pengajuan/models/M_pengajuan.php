<?php 
    
class M_pengajuan extends CI_Model{

    function __construct() {
        parent::__construct();
    }

    function getAll($data) {
        $this->db->select("*");
		$this->db->from("destinasi_wisata");
		$this->db->where("approval_status", "0");
		$this->db->where("created_by", $this->session->userdata('id'));

		$q = $this->db->get();
		$data = $q->result_array();
		
        $returnData = new \stdClass();
        
        $returnData->status_code = "200";
        $returnData->data = $data;

		return $returnData;
    }

    function getDetail($data) {
        $this->db->select("dw.*, u.username");
		$this->db->from("destinasi_wisata dw");
        $this->db->join('user u', 'dw.created_by = u.id');
		$this->db->where("dw.created_by", $this->session->userdata('id'));
		$this->db->where("dw.id", $data['id']);

		$q = $this->db->get();
		$data = $q->result_array();
		
        $returnData = new \stdClass();
        
        $returnData->status_code = "200";
        $returnData->data = $data;

		return $returnData;
    }

    function getProvinsi($data) {
        $this->db->select("*");
		$this->db->from("provinsi");

		$q = $this->db->get();
		$data = $q->result_array();
		
        $returnData = new \stdClass();
        
        $returnData->status_code = "200";
        $returnData->data = $data;

		return $returnData;
    }

    function getKota($data) {
        $provinsi = $data['provinsi'];

        $this->db->select("kt.*");
		$this->db->from("kota kt");
        $this->db->join('provinsi p', 'p.id = kt.provinsi_id');
		$this->db->where("p.nama", $provinsi);

		$q = $this->db->get();
		$data = $q->result_array();
		
        $returnData = new \stdClass();
        
        $returnData->status_code = "200";
        $returnData->data = $data;

		return $returnData;
    }
    
    function getKecamatan($data) {
        $kota = $data['kota'];

        $this->db->select("kc.*");
		$this->db->from("kecamatan kc");
        $this->db->join('kota kt', 'kt.id = kc.kota_id');
		$this->db->where("kt.nama", $kota);

		$q = $this->db->get();
		$data = $q->result_array();
		
        $returnData = new \stdClass();
        
        $returnData->status_code = "200";
        $returnData->data = $data;

		return $returnData;
    }
    
    function getKelurahan($data) {
        $kecamatan = $data['kecamatan'];

        $this->db->select("kl.*");
		$this->db->from("kelurahan kl");
        $this->db->join('kecamatan kc', 'kc.id = kl.kecamatan_id');
		$this->db->where("kc.nama", $kecamatan);

		$q = $this->db->get();
		$data = $q->result_array();
		
        $returnData = new \stdClass();
        
        $returnData->status_code = "200";
        $returnData->data = $data;

		return $returnData;
    }

    function insert($data, $lamp_A, $lamp_B, $lamp_C) {
        $id = $this->guidv4();
        date_default_timezone_set('Asia/Jakarta');
        $datenow = date('Y-m-d H:i:s');
        $path_file = 'doc_pengajuan/';

        $insertedValue['id'] = $id;
        $insertedValue['nama'] = $data['nama'];
        $insertedValue['provinsi'] = $data['provinsi'];
        $insertedValue['kota'] = $data['kota'];
        $insertedValue['kecamatan'] = $data['kecamatan'];
        $insertedValue['kelurahan'] = $data['kelurahan'];
        $insertedValue['alamat'] = $data['alamat'];
        $insertedValue['penanggung_jawab'] = $data['penanggungjawab'];
        $insertedValue['alamat_penanggung_jawab'] = $data['alamat_penanggungjawab'];
        $insertedValue['telephone_penanggung_jawab'] = $data['telephone_penanggungjawab'];
        $insertedValue['jenis_usaha'] = $data['jenis_usaha'];
        $insertedValue['status_lahan'] = $data['status_lahan'];
        $insertedValue['no_sk_pendirian'] = $data['sk_pendirian'];
        $insertedValue['npwp_daerah'] = $data['npwp_daerah'];
        $insertedValue['total_pelaku'] = $data['total_pelaku'];
        $insertedValue['pelaku_pria'] = $data['pelaku_pria'];
        $insertedValue['pelaku_wanita'] = $data['pelaku_wanita'];
        $insertedValue['approval_status'] = 0;
        $insertedValue['tanggal_pendaftaran'] = $datenow;
        $insertedValue['no_izin_teknis'] = $data['no_ijin_teknis'];
        $insertedValue['no_doc_pengelolaan_lingkungan'] = $data['no_pengelolaan_lingkungan'];
        $insertedValue['no_registrasi_kalurahan'] = $data['no_registrasi_kalurahan'];
        $insertedValue['doc_susunan_pengurus'] = $path_file . $lamp_A;
        $insertedValue['doc_permohonan_registrasi'] = $path_file . $lamp_B;
        $insertedValue['doc_deskripsi_destinasi'] = $path_file . $lamp_C;
        $insertedValue['created_by'] = $this->session->userdata('id');
        
        $this->db->trans_start();
        $this->db->insert('destinasi_wisata', $insertedValue);
        $this->db->trans_complete();

        $resultSendEmail = $this->sendEmail($this->session->userdata('email'), $data['nama']);
        
        $returnData = new \stdClass();
        $returnData->status_code = "200";
        $returnData->message = 'Success';

		return $returnData;
    }

    function edit($data) {
        date_default_timezone_set('Asia/Jakarta');
        $datenow = date('Y-m-d H:i:s');

        $this->db->set('nama', $data['nama']);
        $this->db->set('provinsi', $data['provinsi']);
        $this->db->set('kota', $data['kota']);
        $this->db->set('kecamatan', $data['kecamatan']);
        $this->db->set('kelurahan', $data['kelurahan']);
        $this->db->set('alamat', $data['alamat']);
        $this->db->set('penanggung_jawab', $data['penanggungjawab']);
        $this->db->set('alamat_penanggung_jawab', $data['alamat_penanggungjawab']);
        $this->db->set('jenis_usaha', $data['jenis_usaha']);
        $this->db->set('no_sk_pendirian', $data['sk_pendirian']);
        $this->db->set('npwp_daerah', $data['npwp_daerah']);
        $this->db->set('no_izin_teknis', $data['no_ijin_teknis']);
        $this->db->set('no_doc_pengelolaan_lingkungan', $data['no_pengelolaan_lingkungan']);
        $this->db->set('tanggal_perubahan_terakhir', $datenow);
        $this->db->where('id', $data['id']);
        $this->db->update('destinasi_wisata');
        
        $returnData = new \stdClass();
        $returnData->status_code = "200";
        $returnData->message = 'Success';

		return $returnData;
    }
    
    function delete($data) {
        $this->db->where('id', $data['id']);
        $this->db->delete('destinasi_wisata');

        $this->db->where('wisata_id', $data['id']);
        $this->db->delete('persetujuan_wisata');
        
        $returnData = new \stdClass();
        $returnData->status_code = "200";
        $returnData->message = 'Success';

		return $returnData;
    }

    function guidv4($data = null) {
        $data = $data ?? random_bytes(16);
        assert(strlen($data) == 16);
    
        $data[6] = chr(ord($data[6]) & 0x0f | 0x40);
        $data[8] = chr(ord($data[8]) & 0x3f | 0x80);
    
        return vsprintf('%s%s-%s-%s-%s-%s%s%s', str_split(bin2hex($data), 4));
    }

    function sendEmail($emailTarget, $nama) {
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

        $this->email->subject('Registrasi Destinasi Wisata');
        $this->email->message("Terimakasih. Ajuan Registrasi Destinasi Wisata <strong>" . $nama . "</strong> telah diterima Dinas Pariwisata Kabupaten Bantul. Saat ini sedang dilakukan verifikasi ajuan saudara. Hasil verifikasi akan di sampaikan melalui sistem, silakan melakukan pengecekan secara berkala");

        if ($this->email->send()) {
            return 200;
        } else {
            return 500;
        }
    }
}