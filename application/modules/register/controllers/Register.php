<?php
class Register extends MX_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('m_register');
    }

    public function index(){
        if($this->session->userdata('username')) {
            if($this->session->userdata('role_id') == 'cacff090-75a4-466f-a467-bf69b41333b3') {
                redirect('pengajuan','refresh');
            } else {
                redirect('dashboard','refresh');
            }
        } else {
            $this->load->view('v_register');
        }
    }

    function regis(){
		$data = $this->input->post();
        $response = $this->m_register->regis($data);

        echo json_encode($response);
	}

}
?>