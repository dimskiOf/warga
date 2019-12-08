<?php defined('BASEPATH') OR exit('No direct script access allowed');
ob_start();	
class Tabel extends CI_Controller {

 	 public function __construct()
        {
                parent::__construct();
                $this->load->helper(array('form', 'url'));
                $this->load->library('session');
                $this->load->model('Tabel_model');

        }
   public function index()
        {
  if (isset($_SESSION['id'])){
    redirect(base_url().'dashboard', 'refresh');
    }else{
      redirect(base_url().'login', 'refresh');
    }
  }     
       public function getDatauser(){
        if ($this->session->userdata('privilages') == 'SUPERADMIN'){
          $data = $this->Tabel_model->user();
          echo json_encode($data);
        }else{
          $this->load->view('err404');
        }
      }
      public function getdatauseradmin(){
        if ($this->session->userdata('privilages') == 'ADMIN'){
          $data = $this->Tabel_model->userbyadmin();
          echo json_encode($data);
        }else{
          $this->load->view('err404');
        }
      }
  public function getUser(){
        if ($this->session->userdata('privilages') == 'SUPERADMIN'){
        $kous=$this->input->post('id');
        $data=$this->Tabel_model->get_user_byid($kous);
        echo json_encode($data);
        }else{
          $this->load->view('err404');
        }
      }
  public function getUserbyadmin(){
        if ($this->session->userdata('privilages') == 'ADMIN'){
        $kous=$this->input->post('id');
        $data=$this->Tabel_model->get_user_byidadmin($kous);
        echo json_encode($data);
        }else{
          $this->load->view('err404');
        }
      }
  public function hapusUser(){
        if ($this->session->userdata('privilages') == 'SUPERADMIN'){
        $kous=$this->input->post('kode');
        $now =$this->session->userdata('id');
        if ($kous == $now){
          $this->session->set_flashdata('sukses', '<div class="alert alert-danger">Id sedang digunakan tidak bisa dihapus</div>');
          redirect(base_url().'dashboard', 'refresh');
          }else{
        $data=$this->Tabel_model->hapus_data($kous);
        echo json_encode($data);
        }
        }else{
          $this->load->view('err404');
        }
      }
  public function hapusUserbyadmin(){
        if ($this->session->userdata('privilages') == 'ADMIN'){
        $kous=$this->input->post('kode');
        $now =$this->session->userdata('id');
        if ($kous == $now){
          $this->session->set_flashdata('sukses', '<div class="alert alert-danger">Id sedang digunakan tidak bisa dihapus</div>');
          redirect(base_url().'dashboard', 'refresh');
          }else{
        $data=$this->Tabel_model->hapus_databyadmin($kous);
        echo json_encode($data);
        }
        }else{
          $this->load->view('err404');
        }
      }    

    public function update_user(){
      if ($this->session->userdata('privilages') == 'SUPERADMIN'){
        $nama=$this->input->post('nama');
        $ke=$this->input->post('ke');
        $kous=$this->input->post('users');
        $data=$this->Tabel_model->update_data_user($nama,$ke,$kous);
        echo json_encode($data);
      }else{
        $this->load->view('err404');
      }
    }

    public function update_userbyadmin(){
      if ($this->session->userdata('privilages') == 'ADMIN'){
        $nama=$this->input->post('nama');
        $ke=$this->input->post('ke');
        $kous=$this->input->post('users');
        $data=$this->Tabel_model->update_data_user($nama,$ke,$kous);
        echo json_encode($data);
      }else{
        $this->load->view('err404');
      }
    }
}