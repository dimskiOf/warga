<?php defined('BASEPATH') OR exit('No direct script access allowed');
class dashboard extends CI_Controller {

 	 public function __construct()
        {
                parent::__construct();
                $this->load->helper('url');
                $this->load->library('session');
              //  $this->load->model('');


        }
        public function index()
    {   
        $ses1 = $this->session->userdata('id');
        if (isset($ses1)){
        $this->load->view('view_main/dashboard');
        }else{
        redirect(base_url().'login', 'refresh');
         }
    }
}