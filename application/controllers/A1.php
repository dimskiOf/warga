<?php defined('BASEPATH') OR exit('No direct script access allowed');
ob_start();
class A1 extends CI_Controller {
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
        $ses = $this->session->userdata('nama');
        $where2 = array(
        'user_id' => $ses
        );
        $data2['success'] = '<div class="alert alert-warning">Input file not allowed.<button onclick="goBack()">Go Back</button></div>';
    	$data['groups'] = $this->Data_uploads->taroh("uploads",$where2);
if($this->session->userdata('nama') == false){
      //echo '<div class="alert alert-danger">Anda harus login untuk membuka halaman ini.</div>';
        $this->load->view('err404');
        }else{
        $this->load->view('view_upload/a2',$data);
        $this->db->query("SET sql_mode = '' ");
       
        $folderr = $this->session->userdata('folderr');
        // definisi folder upload
        define("UPLOAD_DIR", "ups/".$folderr ."/");
if (!empty($_FILES)) {
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
          
            echo '<p><div class="alert alert-warning">'.$namafile.' Ekstensi file HARAM...!</div></p>';
            
          }else{
          $id = $this->session->userdata('nama');
          $success = move_uploaded_file($tmp,
            UPLOAD_DIR . $name);
if ($success){

         // set permisi file          
         chmod(UPLOAD_DIR . $name, 0644);
         $insert = "INSERT INTO uploads(user_id, tglUpload, file_name, file_size, file_type) VALUES(".$this->db->escape($id).", ".$this->db->escape($tgl).", ".$this->db->escape($name).", ".$this->db->escape($size).", ".$this->db->escape($ext).")";
         $dataa = $this->db->query($insert);
            if($dataa){
              echo '<p><div class="alert alert-success">File berhasil diupload, silahkan <a href="a1">Refresh</a>.</div></p>';
        
            }else{
              echo '<p><div class="alert alert-warning">Ekstensi file HARAM..!</div></p>';
              
            }
        }
                        }    
                    }  
                }
            }
        }    
    }