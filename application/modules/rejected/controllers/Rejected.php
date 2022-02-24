<?php

class Rejected extends MX_Controller{

    function __construct(){
        parent::__construct();
        $this->load->model('m_rejected');
    }

    function index() {
        if($this->session->userdata('username')) {
            $this->template->write_view('content', 'v_rejected', TRUE);
            $this->template->render();
        } else {
            redirect('login','refresh');
        }
    }

    function getAllData() {
		$data = $this->input->post();
        $response = $this->m_rejected->getAll($data);
        
        echo json_encode($response);
    }

    function editPengajuan() {
		$data = $this->input->post();
        $response = $this->m_rejected->edit($data);
        
        echo json_encode($response);
    }

    function getDetail() {
		$data = $this->input->post();
        $response = $this->m_rejected->getDetail($data);
        
        echo json_encode($response);
    }
}

?>