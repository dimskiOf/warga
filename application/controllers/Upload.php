<?php defined('BASEPATH') OR exit('No direct script access allowed');
ob_start();
class Upload extends CI_Controller {
 	 public function __construct()
        {
                parent::__construct();
                $this->load->helper(array('form', 'url'));
                $this->load->library('session');
                $this->load->model('Data_uploads');
        }
        public function index()
    {
    $this->db->query("SET sql_mode = '' ");
    $butuhini = md5($this->session->userdata('id'));
    $butuhitu = $this->input->post('uploadToken');
if($this->session->userdata('nama') == false){
        redirect(base_url(), 'refresh');
        }else{
if(empty($_FILES) && empty($_POST['uploadToken'])){
echo '<script>alert("hmmmmm not allowed!");</script>';
redirect(base_url().'tabel','refresh');
}else{
        $this->db->query("SET sql_mode = '' ");
        $folderr = $this->session->userdata('folderr');
        define("UPLOAD_DIR", "ups/".$folderr ."/");
if ((!empty($_FILES['myFile'])) && ($butuhini == $butuhitu)) {
    $jumlahFile = count($_FILES['myFile']['name']);
    for($i=0; $i<$jumlahFile; $i++){
          $namafile = $_FILES['myFile']['name'][$i];
          $tmp = $_FILES['myFile']['tmp_name'][$i];
          $ext = pathinfo($_FILES['myFile']['name'][$i], PATHINFO_EXTENSION);
          $error = $_FILES['myFile']['error'][$i];
          $size = $_FILES['myFile']['size'][$i];
          $tgl   = date("Y-m-d");

        
          $name = preg_replace("/[^A-Z0-9._-]/i", "_", $namafile);
          list($filenames,$ekstensi) = array_pad(explode('.', $namafile),2,null);
          list($explode) = array_pad(explode('.', $ekstensi),1,null);
          $names = preg_replace("/[^A-Z0-9._-]/i", "_", $filenames);
          
          // mencegah overwrite filename
          $a = 0;
          while (file_exists(UPLOAD_DIR . $name)) {
            $a++;
            if (!($explode)){
            $name = $names . "-" . $a . $ext ; 
           
            }else{
            $name = $names . "-" . $a . "." . $ext ; 
            }
           
              
          }

         $query = $this->db->where('ext_bl', $ekstensi)->get("block_extenshion");     
if ($query->num_rows() > 0) {
          $data = [
                'error' => 'ERROR ekstensi ' . $namafile .' haram'
            ];
          echo json_encode($data);
          }else{
          $id = $this->session->userdata('nama');
          $success = move_uploaded_file($tmp,
            UPLOAD_DIR . $name);
if ($success){
         // set permisi file          
         chmod(UPLOAD_DIR . $name, 0644);
         $dataa = $this->Data_uploads->uploaddata($id, $tgl, $name, $size, $ext);
  if($dataa = true){
            $suksess = ['sukses upload '.$namafile];
            echo json_encode($suksess);
            }else{
             $data = [
                'error' => 'ERROR ekstensi ' . $namafile .' diharamkan'
            ];
            echo json_encode($data);
                 }
                    }
                        } 
                    } 
                }else{
                  $data = [
                'error' => 'UPLOAD HANDLING SYSTEM ANTI DIRECT ACCESS'
                          ];
                echo json_encode($data);
                }   
             }
          }
       }    
    }