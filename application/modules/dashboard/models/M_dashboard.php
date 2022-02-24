<?php 
    
class M_dashboard extends CI_Model{

    function getCharts($data) {
        $this->db->select("count(*) as total, kecamatan");
		$this->db->from("destinasi_wisata");
        $this->db->group_by("kecamatan");

		$q = $this->db->get();
		$data = $q->result_array();
        
        $this->db->select("count(*) as total, jenis_usaha");
		$this->db->from("destinasi_wisata");
        $this->db->group_by("jenis_usaha");

		$q2 = $this->db->get();
		$data2 = $q2->result_array();
        
        $this->db->select("*");
		$this->db->from("destinasi_wisata");

		$q3 = $this->db->get();
		$data3 = $q3->result_array();
		
        $returnData = new \stdClass();
        
        $returnData->status_code = "200";
        $returnData->wisataByKecamatan = $data;
        $returnData->wisataByJenis = $data2;
        $returnData->totalWisata = $data3;

		return $returnData;
    }
}