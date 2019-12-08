<?php defined('BASEPATH') OR exit('No direct script access allowed');
ob_start();
class Profile extends CI_Controller {

 	 public function __construct()
        {
                parent::__construct();
                $this->load->helper('url');
                $this->load->library('session');
                $this->load->model('Data_uploads');


        }
        public function index()
    {

        $this->db->query("SET sql_mode = '' ");
        $ses = $this->session->userdata('usern');
        $where2 = array(
        'username' => $ses
        );
        $data['groups'] = $this->Data_uploads->taroh("free_user",$where2);
        $this->load->view('view_upload/profile',$data);

    }
}