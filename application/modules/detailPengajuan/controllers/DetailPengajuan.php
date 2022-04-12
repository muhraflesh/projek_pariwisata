<?php

class DetailPengajuan extends MX_Controller{

    function __construct(){
        parent::__construct();
        $this->load->model('m_detailPengajuan');
    }

    function index() {
        if($this->session->userdata('username')) {
            $this->template->write_view('content', 'v_detailPengajuan', TRUE);
            $this->template->render();
        } else {
            redirect('login','refresh');
        }
    }
}

?>