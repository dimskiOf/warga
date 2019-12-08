<?php defined('BASEPATH') OR exit('No direct script access allowed');
ob_start();	
class Diagram extends CI_Controller {

 	 public function __construct()
        {
                parent::__construct();
                $this->load->helper('url');
                $this->load->library('session');
                $this->load->model('Data_uploads');


        }
        public function index()
    {
     $ses1 = $this->session->userdata('nama');
     $where2 = array(
        'user_id' => $ses1
        );
     $ses = $this->session->userdata('usern');
     $where1 = array(
        'username' => $ses
        );
      $data2['total'] = $this->Data_uploads->countall();
      $data['groups'] = $this->Data_uploads->data_tahunan();
      $datasini = array_merge($data, $data2);	
 if (isset($_SESSION['nama'])){
    	$this->db->query("SET sql_mode = '' ");
		$this->load->view('view_upload/diagram',$datasini);
    		
    }else{
    	redirect(base_url(), 'refresh');
    }
        

    }
}