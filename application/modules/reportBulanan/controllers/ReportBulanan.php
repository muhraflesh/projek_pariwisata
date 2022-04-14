<?php

class ReportBulanan extends MX_Controller{

    function __construct(){
        parent::__construct();
        $this->load->model('m_reportBulanan');
    }

    function index() {
        if($this->session->userdata('username')) {
            $this->template->write_view('content', 'v_reportBulanan', TRUE);
            $this->template->render();
        } else {
            redirect('login','refresh');
        }
    }
}

?>