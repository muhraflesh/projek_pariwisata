<?php

class Persetujuan extends MX_Controller{

    function __construct(){
        parent::__construct();
        $this->load->model('m_persetujuan');
        $this->load->helper('download');
    }

    function index() {
        if($this->session->userdata('username')) {
            $this->template->write_view('content', 'v_persetujuan', TRUE);
            $this->template->render();
        } else {
            redirect('login','refresh');
        }
    }

    function getAllData() {
		$data = $this->input->post();
        $response = $this->m_persetujuan->getAll($data);
        
        echo json_encode($response);
    }

    public function downloadDoc($filename) {
		$file = realpath ( "doc_pengajuan" ) . "/" . $filename;
        if (file_exists ( $file )) {
            $data = file_get_contents ( $file );
            force_download ( $file, NULL );
        } else {
            redirect ( base_url () );
        }
    }

    public function downloadDocSK($filename) {
		$file = realpath ( "doc_sk" ) . "/" . $filename;
        if (file_exists ( $file )) {
            $data = file_get_contents ( $file );
            force_download ( $file, NULL );
        } else {
            redirect ( base_url () );
        }
    }

    function approveReject() {
		$dataText = $this->input->post();
    
        $config['upload_path'] = 'doc_sk/';  
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
                
                $response = $this->m_persetujuan->approveReject($dataText, $image);
                echo json_encode($response);
            }     
        } else {
            $response = $this->m_persetujuan->approveReject($dataText, '');
        
            echo json_encode($response);
        }
    }

    function getDetail() {
		$data = $this->input->post();
        $response = $this->m_persetujuan->getDetail($data);
        
        echo json_encode($response);
    }

}

?>