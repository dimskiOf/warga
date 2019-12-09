<?php defined('BASEPATH') OR exit('No direct script access allowed');
ob_start();	
class Login extends CI_Controller {

 	 public function __construct()
        {
                parent::__construct();
                $this->load->helper('url');
                $this->load->library('session');
                $this->load->model('Data_uploads');


        }
        public function index()
    {
    	
    	if (isset($_SESSION['id'])){
    	redirect(base_url().'dashboard', 'refresh');	
    }else{
    	$this->db->query("SET sql_mode = '' ");
		$this->load->view('view_main/login');
    }
        

    }
 		
    function gow(){
    $this->db->query("SET sql_mode = '' ");
	$username = $this->input->post('username');
	$password = $this->input->post('password');
	$where = array(
		'username' => $username,
		'password' => md5($password)
		);
	$where2 = array(
		'username' => $username
		);
	$cek = $this->Data_uploads->dadu("login",$where);
	$cek1 = $this->Data_uploads->dadu("tbl_user",$where2);
	if (($cek && $cek1)==null){
		 $this->session->set_flashdata('pesan', '<div class="alert alert-danger">Username  atau Password  salah..!</div>');
		redirect(base_url().'login');
	}else{
		$data_session = array(
			'privilages' => $cek[0]['privilage'],
			'id' => $cek[0]['username'],
			'token' => $cek[0]['access_token'],
			'userid'=> $cek1[0]['user_id']
			);
		$this->session->set_userdata($data_session);
 		echo '<script>alert("Login Berhasil!");</script>';
		redirect(base_url().'dashboard', 'refresh');
	}
}

}