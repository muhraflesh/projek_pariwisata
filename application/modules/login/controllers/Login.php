<?php
class Login extends MX_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('m_login');
    }

    public function index(){
        if($this->session->userdata('username')) {
            if($this->session->userdata('role_id') == 'cacff090-75a4-466f-a467-bf69b41333b3') {
                redirect('pengajuan','refresh');
            } else {
                redirect('dashboard','refresh');
            }
        } else {
            $this->load->view('v_login');
        }
    }

    function logedin(){
		$data = $this->input->post();
        
        $response = $this->m_login->login($data);

		if($response->status_code == 200){
			$this->session->set_userdata($response->data);
		}
        echo json_encode($response);
	}

    public function logout(){
        $this->session->sess_destroy();
        redirect('login','refresh');
    }

}
?>