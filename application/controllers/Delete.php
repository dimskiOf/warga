<?php defined('BASEPATH') OR exit('No direct script access allowed');
ob_start();
class Delete extends CI_Controller {

 	 public function __construct()
        {
                parent::__construct();
                $this->load->library('session');
                $this->load->model('Data_uploads');
                $this->load->helper('url');

        }
        public function index()
    {   

if($this->session->userdata('nama')){
$this->db->query("SET sql_mode = '' ");
require_once(APPPATH.'/vendor/autoload.php');
        $options = array(
            'cluster' => 'ap1',
            'useTLS' => true
        );
        $pusher = new  Pusher\Pusher(
            '03390b8b7160498ec7dc', //ganti dengan App_key pusher Anda
            '2019924890ffdf16030d', //ganti dengan App_secret pusher Anda
            '865726', //ganti dengan App_key pusher Anda
            $options
        );
$ses1 = $this->session->userdata('nama');
     $where2 = array(
        'user_id' => $ses1
        );
     $ses = $this->session->userdata('usern');
     $where1 = array(
        'username' => $ses
        );
      $data3['groups'] = $this->Data_uploads->taroh("free_user",$where1);
      $data1['groups1'] = $this->Data_uploads->taroh("uploads",$where2);
      $datasini = array_merge($data1, $data3);
$dodon = $this->input->post('id');
if (is_array($dodon)){
if(!empty($_POST['id'])){
$jumlahFile = count($_POST['id']);
for($i=0; $i<$jumlahFile; $i++){  

$fold  = $this->session->userdata('folderr');
$url = base_url()."tabel";
$file = $_POST['id'][$i];
$row = $_POST['id'][$i];
$userd = $this->session->userdata('nama');
$where2 = array(
        'file_name' => $file
        );
$data = $this->Data_uploads->ceking("uploads",$where2);
if (($data)==null){
        echo '<script>alert("no request data");</script>';
        redirect(base_url().'tabel', 'refresh');
    }else{
foreach ($data as $id) {
        $fileid = $id['file_id'];
        }

$final = "ups/".$fold."/".$file;   
if (file_exists($final))
  {
  $this->Data_uploads->deletechild($fileid);
  $this->Data_uploads->deleteparent($row, $userd);
  unlink($final);
  $data['message'] = 'success';
  $pusher->trigger('my-channel', 'my-event', $data);
  $this->session->set_flashdata('sukses', '<div class="alert alert-success">Delete berhasil</div>');
  }
}
}redirect(base_url().'tabel');
}else{
   $this->load->view('err404'); 
}
}else{
if (!($_REQUEST)){
        echo '<script>alert("hmmmmm not allowed!");</script>';
        redirect(base_url().'tabel', 'refresh');
    }else{
if(!empty($_REQUEST['id'])){
$fold  = $this->session->userdata('folderr');
$url = base_url()."tabel";
$file = $_REQUEST['id'];
$row = $_REQUEST['id'];
 $where2 = array(
        'file_name' => $file
        );
$data = $this->Data_uploads->ceking("uploads",$where2);
if (($data)==null){
        echo '<script>alert("no request data");</script>';
        redirect(base_url().'tabel', 'refresh');
    }else{
foreach ($data as $id) {
        $fileid = $id['file_id'];
        }
$userd = $this->session->userdata('nama');
$final = "ups/".$fold."/".$file;   
if (file_exists($final))
  {
  $this->Data_uploads->deletechild($fileid);
  $this->Data_uploads->deleteparent($row,$userd);
  unlink($final);
  $this->session->set_flashdata('sukses', '<div class="alert alert-success">Delete '.$file.' berhasil</div>');
  $data['message'] = 'success';
        $pusher->trigger('my-channel', 'my-event', $data);
  redirect(base_url().'tabel');
  }
}
}else       {
    $this->load->view('err404'); 
            }
        }
     }

    }else{
      redirect(base_url());
    }
    }
}