<?php 
    
class M_upload extends CI_Model{

    function __construct() {
        parent::__construct();
    }

    function getAll($data) {
        $this->db->select("*");
		$this->db->from("document_lampiran");

		$q = $this->db->get();
		$data = $q->result_array();
		
        $returnData = new \stdClass();
        
        $returnData->status_code = "200";
        $returnData->data = $data;

		return $returnData;
    }

    function insert($data, $name) {
        $id = $this->guidv4();

        $insertedValue['id'] = $id;
        $insertedValue['nama'] = $data['nama'];
        $insertedValue['path'] = 'doc_lampiran/' . $name;
        $insertedValue['filename'] = $name;
        
        $this->db->select("*");
		$this->db->from("document_lampiran");
		$this->db->where("nama", $data['nama']);

		$query      = $this->db->get();
		$checkExist = $query->result_array();

        if (count($checkExist) > 0) {
            $this->db->set('path', 'doc_lampiran/' . $name);
            $this->db->set('filename', $name);
            $this->db->where('nama', $data['nama']);
            $this->db->update('document_lampiran');
        } else {
            $this->db->trans_start();
            $this->db->insert('document_lampiran', $insertedValue);
            $this->db->trans_complete();
        }

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