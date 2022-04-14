<?php

class ReportHarian extends MX_Controller{

    function __construct(){
        parent::__construct();
        $this->load->model('m_reportHarian');
    }

    function index() {
        if($this->session->userdata('username')) {
            $this->template->write_view('content', 'v_reportHarian', TRUE);
            $this->template->render();
        } else {
            redirect('login','refresh');
        }
    }
}

?>