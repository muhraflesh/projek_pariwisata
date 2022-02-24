<?php

class Downloaddocument extends MX_Controller{

    function __construct(){
        parent::__construct();
        $this->load->model('m_download');
    }

    function index() {
        if($this->session->userdata('username')) {
            $this->template->write_view('content', 'v_download', TRUE);
            $this->template->render();
        } else {
            redirect('login','refresh');
        }
    }

    function getAllData() {
		$data = $this->input->post();
        $response = $this->m_download->getAll($data);
        
        echo json_encode($response);
    }

}

?>