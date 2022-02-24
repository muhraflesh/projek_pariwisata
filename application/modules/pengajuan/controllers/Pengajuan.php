<?php

class Pengajuan extends MX_Controller{

    function __construct(){
        parent::__construct();
        $this->load->model('m_pengajuan');
    }

    function index() {
        if($this->session->userdata('username')) {
            $this->template->write_view('content', 'v_pengajuan', TRUE);
            $this->template->render();
        } else {
            redirect('login','refresh');
        }
    }

    function getAllData() {
		$data = $this->input->post();
        $response = $this->m_pengajuan->getAll($data);
        
        echo json_encode($response);
    }

    function getProvinsi() {
		$data = $this->input->post();
        $response = $this->m_pengajuan->getProvinsi($data);
        
        echo json_encode($response);
    }

    function getKota() {
		$data = $this->input->post();
        $response = $this->m_pengajuan->getKota($data);
        
        echo json_encode($response);
    }

    function getKecamatan() {
		$data = $this->input->post();
        $response = $this->m_pengajuan->getKecamatan($data);
        
        echo json_encode($response);
    }

    function getKelurahan() {
		$data = $this->input->post();
        $response = $this->m_pengajuan->getKelurahan($data);
        
        echo json_encode($response);
    }

    function insertPengajuan() {
        $dataText = $this->input->post();
    
        $config['upload_path'] = 'doc_pengajuan/';  
        $config['allowed_types'] = '*';  
        $config['max_size'] = '100000';
        $this->load->library('upload', $config);   

        $lamp_A = '';
        $lamp_B = '';
        $lamp_C = '';

        if(!$this->upload->do_upload('filePengurus'))  {  
            echo $this->upload->display_errors();  
        } else {
            $data_A = array('upload_data' => $this->upload->data());
            $lamp_A = $data_A['upload_data']['file_name'];
        } 

        if(!$this->upload->do_upload('fileDeskripsi'))  {  
            echo $this->upload->display_errors();  
        } else {
            $data_B = array('upload_data' => $this->upload->data());
            $lamp_B = $data_B['upload_data']['file_name'];
        } 

        if(!$this->upload->do_upload('filePermohonan'))  {  
            echo $this->upload->display_errors();  
        } else {
            $data_C = array('upload_data' => $this->upload->data());
            $lamp_C = $data_C['upload_data']['file_name'];
        } 
        
        // print_r($lamp_B);die();
        
        $response = $this->m_pengajuan->insert($dataText, $lamp_A, $lamp_B, $lamp_C);
        echo json_encode($response);     
    }

    function editPengajuan() {
		$data = $this->input->post();
        $response = $this->m_pengajuan->edit($data);
        
        echo json_encode($response);
    }

    function getDetail() {
		$data = $this->input->post();
        $response = $this->m_pengajuan->getDetail($data);
        
        echo json_encode($response);
    }

    function delete() {
		$data = $this->input->post();
        $response = $this->m_pengajuan->delete($data);
        
        echo json_encode($response);
    }
}

?>