<?php defined('BASEPATH') OR exit('No direct script access allowed');
ob_start();
class Logout extends CI_Controller {

 	 public function __construct()
        {
                parent::__construct();
                $this->load->helper('url');
                $this->load->library('session');


        }
        public function index()
    {
    if ($this->session->userdata('id')){
      session_destroy();
      echo '<script>alert("Terimakasih!");</script>';
	  redirect(base_url(), 'refresh');
	}else{
	  redirect(base_url(), 'refresh');
	}
    }
}