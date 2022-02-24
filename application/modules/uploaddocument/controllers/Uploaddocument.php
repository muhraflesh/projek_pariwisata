<?php

class Uploaddocument extends MX_Controller{

    function __construct(){
        parent::__construct();
        $this->load->model('m_upload');
        $this->load->helper('download');
    }

    function index() {
        if($this->session->userdata('username')) {
            $this->template->write_view('content', 'v_upload', TRUE);
            $this->template->render();
        } else {
            redirect('login','refresh');
        }
    }

    function getAllData() {
		$data = $this->input->post();
        $response = $this->m_upload->getAll($data);
        
        echo json_encode($response);
    }

    public function downloadDoc($filename) {
		$file = realpath ( "doc_lampiran" ) . "/" . $filename;
        if (file_exists ( $file )) {
            $data = file_get_contents ( $file );
            force_download ( $file, NULL );
        } else {
            redirect ( base_url () );
        }
    }

    function insert() {
		$dataText = $this->input->post();
    
        $config['upload_path'] = 'doc_lampiran/';  
        $config['allowed_types'] = '*';  
        $config['max_size'] = '100000';
        $this->load->library('upload', $config);   

        if(isset($_FILES["file"]["name"])) {
            if(!$this->upload->do_upload('file'))  {  
                echo $this->upload->display_errors();  
            }  
            else {  
                $data = array('upload_data' => $this->upload->data());

                $dataText = $this->input->post();
                $image = $data['upload_data']['file_name'];
                
                $response = $this->m_upload->insert($dataText, $image);
                echo json_encode($response);
            }     
        } else {
            echo "no file selected";
        }
    }
}

?>