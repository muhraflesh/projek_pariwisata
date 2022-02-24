<?php

class Dashboard extends MX_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('m_dashboard');
    }

    function index(){
        if($this->session->userdata('username')) {
            $this->template->write_view('content', 'v_dashboard', TRUE);
            $this->template->render();
        } else {
            redirect('login','refresh');
        }
    }

    function getCharts() {
		$data = $this->input->post();
        $response = $this->m_dashboard->getCharts($data);
        
        echo json_encode($response);
    }

}

?>