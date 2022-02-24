<?php 
    
class M_download extends CI_Model{

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

}