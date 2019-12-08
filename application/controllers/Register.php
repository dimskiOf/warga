<?php defined('BASEPATH') OR exit('No direct script access allowed');
ob_start();
class Register extends CI_Controller {

 	 public function __construct()
        {
                parent::__construct();
                $this->load->helper(array('form', 'url'));
                $this->load->library('session');
                $this->load->model('Tabel_model');


        }
        public function index()
    {         
    	//$data['groups'] = $this->Data_uploads->free();
        //$this->load->view('view_upload/register',$data);
    if (isset($_SESSION['id'])){
         /* Load form validation library */ 
     $this->load->library('form_validation');
			
	 /* Validation rule */
	 $this->form_validation->set_rules('hak', 'Hak', 'trim|required|callback_number');
     $this->form_validation->set_rules('ki', 'Ki', 'trim|required|callback_numbers'); 
	 $this->form_validation->set_rules('nama', 'Nama', 'trim|required|callback_alpha_dash_space');
	 $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|callback_check_email');
	 $this->form_validation->set_rules('username', 'Username', 'trim|required|callback_check_username|alpha_numeric');
	 $this->form_validation->set_rules('password', 'Password', 'required|min_length[6]|max_length[15]');
     $this->form_validation->set_rules('password2', 'Password Confirmation', 'required|matches[password]');		

	$this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');

         if ($this->form_validation->run() == FALSE) { 
            $this->load->view('view_main/register'); 
         } 
         else{
          $this->Tabel_model->simpan_data1();
          $this->Tabel_model->simpan_data2();
          echo '<script>alert("Register Berhasil!");</script>';
          redirect(base_url().'dashboard','refresh');
         }
         	}else{
         		redirect(base_url().'login','refresh');
         	}
         }

    function number($hak){
    if (!preg_replace("/[^0-2]/", "",$hak)) {
        $this->form_validation->set_message('number', 'kolom hak akses telah dimanipulasi');
        return FALSE;
    } else {
        return TRUE;
    }
	}
	function numbers($ki){
    if (!preg_replace("/[^0-2]/", "",$ki)) {
        $this->form_validation->set_message('numbers', 'kolom jenis kelamin telah dimanipulasi');
        return FALSE;
    } else {
        return TRUE;
    }
	}
         
    function alpha_dash_space($nama){
    if (! preg_match('/^[a-zA-Z\s]+$/', $nama)) {
        $this->form_validation->set_message('alpha_dash_space', 'The %s field may only contain alpha characters & White spaces');
        return FALSE;
    } else {
        return TRUE;
    }
	}
    
    function check_email($email)
	   {
	    	 $this->db->query("SET sql_mode = '' ");
	         $query = $this->db->where('email', $email)->get("tbl_user");
		 if ($query->num_rows() > 0)
		    {
			 $this->form_validation->set_message('check_email','Gagal melakukan Register Email '.$email.' sudah ada');
		        return FALSE;
		    }
		  else 
			  return TRUE;
	  }	
	  function check_username($username)
	   {
	   		 $this->db->query("SET sql_mode = '' ");
	         $query = $this->db->where('username', $username)->get("tbl_user");
		 if ($query->num_rows() > 0)
		    {
			 $this->form_validation->set_message('check_username','Gagal melakukan Register Username '.$username.' sudah ada');
		        return FALSE;
		    }
		  else 
			  return TRUE;
	  }	
}