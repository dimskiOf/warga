<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Informasi extends CI_Controller {

 	 public function __construct()
        {
                parent::__construct();
                $this->load->helper('url');
                $this->load->library('session');
              //  $this->load->model('');


        }
        public function index()
    {
        $this->load->view('view_main/informasi');
    }
}