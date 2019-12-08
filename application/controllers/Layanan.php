<?php defined('BASEPATH') OR exit('No direct script access allowed');
ob_start();
class Layanan extends CI_Controller {

 	 public function __construct()
        {
                parent::__construct();
                $this->load->helper('url');
                $this->load->library('session');


        }
        public function index()
    {

        $this->db->query("SET sql_mode = '' ");
        $this->load->view('view_upload/layanan');

    }
}