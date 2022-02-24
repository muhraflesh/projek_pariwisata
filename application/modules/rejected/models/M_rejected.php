<?php 
    
class M_rejected extends CI_Model{

    function __construct() {
        parent::__construct();
    }

    function getAll($data) {
        $this->db->select("*");
		$this->db->from("destinasi_wisata");
		$this->db->where("approval_status", "2");
		$this->db->where("created_by", $this->session->userdata('id'));

		$q = $this->db->get();
		$data = $q->result_array();
		
        $returnData = new \stdClass();
        
        $returnData->status_code = "200";
        $returnData->data = $data;

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
        $this->db->set('approval_status', 0);
        $this->db->where('id', $data['id']);
        $this->db->update('destinasi_wisata');

        $this->db->where('wisata_id', $data['id']);
        $this->db->delete('persetujuan_wisata');
        
        $returnData = new \stdClass();
        $returnData->status_code = "200";
        $returnData->message = 'Success';

		return $returnData;
    }

    function getDetail($data) {
        $this->db->select("dw.*, u.username, pw.note");
		$this->db->from("destinasi_wisata dw");
        $this->db->join('user u', 'dw.created_by = u.id');
        $this->db->join('persetujuan_wisata pw', 'dw.id = pw.wisata_id');
		$this->db->where("dw.created_by", $this->session->userdata('id'));
		$this->db->where("dw.id", $data['id']);

		$q = $this->db->get();
		$data = $q->result_array();
		
        $returnData = new \stdClass();
        
        $returnData->status_code = "200";
        $returnData->data = $data;

		return $returnData;
    }

    function guidv4($data = null) {
        $data = $data ?? random_bytes(16);
        assert(strlen($data) == 16);
    
        $data[6] = chr(ord($data[6]) & 0x0f | 0x40);
        $data[8] = chr(ord($data[8]) & 0x3f | 0x80);
    
        return vsprintf('%s%s-%s-%s-%s-%s%s%s', str_split(bin2hex($data), 4));
    }
}