<?php

class Approved extends MX_Controller{

    function __construct(){
        parent::__construct();
        $this->load->model('m_approved');
    }

    function index() {
        if($this->session->userdata('username')) {
            $this->template->write_view('content', 'v_approved', TRUE);
            $this->template->render();
        } else {
            redirect('login','refresh');
        }
    }

    function getAllData() {
		$data = $this->input->post();
        $response = $this->m_approved->getAll($data);
        
        echo json_encode($response);
    }

    function editPengajuan() {
		$data = $this->input->post();
        $response = $this->m_approved->edit($data);
        
        echo json_encode($response);
    }

    function getDetail() {
		$data = $this->input->post();
        $response = $this->m_approved->getDetail($data);
        
        echo json_encode($response);
    }
}

?>