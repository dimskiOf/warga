<?php defined('BASEPATH') OR exit('No direct script access allowed');
class dashboard extends CI_Controller {

 	 public function __construct()
        {
                parent::__construct();
                $this->load->helper('url');
                $this->load->library('session');
                $this->load->model('Berita_model');
              //  $this->load->model('');


        }
        public function index()
    {   
        $ses1 = $this->session->userdata('id');
        if (isset($ses1)){
            $data['kelur'] = $this->Berita_model->get_kel(); 
            $data['kecam'] = $this->Berita_model->get_kec();    
            $this->load->view('view_main/dashboard', $data);
        }else{
        redirect(base_url().'login', 'refresh');
         }

    }
}