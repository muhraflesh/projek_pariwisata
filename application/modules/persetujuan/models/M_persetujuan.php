<?php 
    
class M_persetujuan extends CI_Model{

    function __construct() {
        parent::__construct();
    }

    function getAll($data) {
        $this->db->select("dw.*, u.username");
		$this->db->from("destinasi_wisata dw");
        $this->db->join('user u', 'dw.created_by = u.id');
		$this->db->where("dw.approval_status", "0");

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
		$this->db->where("dw.id", $data['id']);

		$q = $this->db->get();
		$data = $q->result_array();
		
        $returnData = new \stdClass();
        
        $returnData->status_code = "200";
        $returnData->data = $data;

		return $returnData;
    }

    function approveReject($data, $filename) {
        date_default_timezone_set('Asia/Jakarta');
        $datenow = date('Y-m-d H:i:s');
        $id_approval = $this->guidv4();

        $this->db->set('approval_status', $data['status']);
        $this->db->where('id', $data['id']);
        $this->db->update('destinasi_wisata');

        $insertedValue['id'] = $id_approval;
        $insertedValue['wisata_id'] = $data['id'];
        $insertedValue['nomor_sk'] = $data['nomor_sk'];
        $insertedValue['approver_id'] = $this->session->userdata('id');
        $insertedValue['note'] = $data['note'];
        $insertedValue['tanggal_approval'] = $datenow;
        $insertedValue['status_approval'] = $data['status'];

        if(!empty($filename)) {
            $insertedValue['doc_persetujuan'] = 'doc_sk/' . $filename;
        }
        
        $this->db->trans_start();
        $this->db->insert('persetujuan_wisata', $insertedValue);
        $this->db->trans_complete();
        
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
}