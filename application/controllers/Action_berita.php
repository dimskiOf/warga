<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Action_berita extends CI_Controller {

 	 public function __construct()
        {
                parent::__construct();
                $this->load->helper('url');
                $this->load->library('session');
                $this->load->model('Berita_model');
                $this->load->library('upload');


        }
        public function index()
    {
        redirect(base_url().'dashboard', 'refresh');
        // $this->load->view('view_main/dashboard');
        // $data['kelur'] = $this->Berita_model->get_kel();
        // $data['kecam'] = $this->Berita_model->get_kec();
    }

function inputdatakegiatan(){
    if (-($this->session->userdata('privilages') == 'SUPERADMIN') or ($this->session->userdata('privilages') == 'ADMIN')){

      $aa =$this->input->post('keg-kel');
      $bb =$this->input->post('keg-kec'); 
      $cc =$this->input->post('keg-rt'); 
      $dd =$this->input->post('keg-rw'); 
      $data_rtrwid = $this->Berita_model->get_rtrw($aa, $bb, $cc, $dd);
        $config['upload_path'] = './assets/img/post-kegiatan/'; //path folder
        $config['allowed_types'] = 'jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
        $config['encrypt_name'] = TRUE; //Enkripsi nama yang terupload
        $this->upload->initialize($config);
        if(!empty($_FILES['myFile-keg']['name'])){
            $namafile = $_FILES['myFile-keg']['name'];
            $tmp = $_FILES['myFile-keg']['tmp_name'];
            $ext = pathinfo($_FILES['myFile-keg']['name'], PATHINFO_EXTENSION);
            $name = preg_replace("/[^A-Z0-9._-]/i", "_", $namafile);
            list($filenames,$ekstensi) = array_pad(explode('.', $namafile),2,null);
            list($explode) = array_pad(explode('.', $ekstensi),1,null);
            $names = preg_replace("/[^A-Z0-9._-]/i", "_", $filenames);
            $temporarys = base_url('assets/img/post-kegiatan/'.$name);
                if ($this->upload->do_upload('myFile-keg')){
                $gbr = $this->upload->data();
                //Compress Image
                $config['image_library']='gd2';
                $config['source_image']='./assets/img/post-kegiatan/'.$gbr['file_name'];
                $config['create_thumb']= FALSE;
                $config['maintain_ratio']= FALSE;
                $config['quality']= '50%';
                $config['width']= 400;
                $config['height']= 400;
                $config['new_image']= './assets/img/post-kegiatan/'.$gbr['file_name'];
                $this->load->library('image_lib', $config);
                $this->image_lib->resize();
                $temporary = base_url('assets/img/post-kegiatan/'.$gbr['file_name']);
                $c = '<img src="'.$temporary.'" alt=""><a href="#" class="video-play"><i class="fa fa-play"></i></a>';
                $a=$this->input->post('keg-name');
                $b=$this->input->post('keg-desk');
                $d=$this->input->post('keg-tgl');
                foreach ($data_rtrwid as $row) {
                $e=$row['id'];
                }
                $f=$this->session->userdata('userid');
                $data = $this->Berita_model->inserting_kegiatan($a,$b,$c,$d,$e,$f);
                echo json_encode($data);
              }
            }
          }
        }
          
function inputdatartrw(){
    if (-($this->session->userdata('privilages') == 'SUPERADMIN') or ($this->session->userdata('privilages') == 'ADMIN')){
                  $a=$this->input->post('klurhn-name');
                  $b=$this->input->post('kcmtn-name');
                  $c=$this->input->post('rw-no');
                  $d=$this->input->post('rw-nik');
                  $e=$this->input->post('rw-name');
                  $f=$this->input->post('rw-telp');
                  $k=$this->session->userdata('userid');
                  $g=$this->input->post('rt-no');
                  $i=$this->input->post('rt-name');
                  $h=$this->input->post('rt-nik');
                  $j=$this->input->post('rt-telp');
                  $data = $this->Berita_model->inserting_rtrw($a,$b,$c,$d,$e,$f,$g,$h,$i,$j,$k);
                  echo json_encode($data);
                }
              }
function inputdataberita(){
    if (($this->session->userdata('privilages') == 'SUPERADMIN') or ($this->session->userdata('privilages') == 'ADMIN')){
        $config['upload_path'] = './assets/img/post-berita/'; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp|mp4'; //type yang dapat diakses bisa anda sesuaikan
        $config['encrypt_name'] = TRUE; //Enkripsi nama yang terupload
        define("UPLOAD_DIR", "assets/video/video-post/");
        $this->upload->initialize($config);
        if(!empty($_FILES['myFile']['name'])){
            $namafile = $_FILES['myFile']['name'];
            $tmp = $_FILES['myFile']['tmp_name'];
            $ext = pathinfo($_FILES['myFile']['name'], PATHINFO_EXTENSION);
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

            if ($ext == 'mp4'){
            $success = move_uploaded_file($tmp,UPLOAD_DIR . $name);
            if ($success){
         // set permisi file          
                 chmod('assets/video/video-post/' . $name, 0644);
                  $temporarys = base_url('assets/img/post-berita/'.$name);
                  $a=$this->input->post('berita-name');
                  $b=$this->input->post('kategoris');
                  $c=$this->input->post('berita-author');
                  $d=$this->input->post('kontens');
                  $e = '<img src="'.$temporarys.'" alt=""><a href="#" class="video-play"><i class="fa fa-play"></i></a>';
                  $f=$this->input->post('slug-name');
                  $g=$this->session->userdata('userid');
                  $h=$ext;
                  $j=$name;
                  $data = $this->Berita_model->inserting_berita($a,$b,$c,$d,$e,$f,$g,$h,$j);
                  echo json_encode($data);
               } 
            }else{
            if ($this->upload->do_upload('myFile')){
                $gbr = $this->upload->data();
                //Compress Image
                $config['image_library']='gd2';
                $config['source_image']='./assets/img/post-berita/'.$gbr['file_name'];
                $config['create_thumb']= FALSE;
                $config['maintain_ratio']= FALSE;
                $config['quality']= '50%';
                $config['width']= 400;
                $config['height']= 400;
                $config['new_image']= './assets/img/post-berita/'.$gbr['file_name'];
                $this->load->library('image_lib', $config);
                $this->image_lib->resize();
                $temporary = base_url('assets/img/post-berita/'.$gbr['file_name']);
                $a=$this->input->post('berita-name');
                $b=$this->input->post('kategoris');
                $c=$this->input->post('berita-author');
                $d=$this->input->post('kontens');
                $e = '<img src="'.$temporary.'" alt=""><a href="#" class="video-play"><i class="fa fa-play"></i></a>';
                $f=$this->input->post('slug-name');
                $g=$this->session->userdata('userid');
                $h=$ext;
                $j='Null Media';
                $data = $this->Berita_model->inserting_berita($a,$b,$c,$d,$e,$f,$g,$h);
              echo json_encode($data);
            }
          }        
        }else{
            echo "Image yang diupload kosong";
        }
        }else{
            $this->load->view('err404');
        }         
    }
public function builders(){
 if (($this->session->userdata('privilages') == 'SUPERADMIN') or ($this->session->userdata('privilages') == 'ADMIN')){
      $config['upload_path'] = './assets/img/post-berita/'; //path folder
      $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp|mp4'; //type yang dapat diakses bisa anda sesuaikan
      $config['encrypt_name'] = TRUE; //Enkripsi nama yang terupload
      define("UPLOAD_DIR", "assets/video/video-post/");
      $this->upload->initialize($config);
    if(!empty($_FILES['myFile']['name'])){
           $namafile = $_FILES['myFile']['name'];
            $tmp = $_FILES['myFile']['tmp_name'];
            $ext = pathinfo($_FILES['myFile']['name'], PATHINFO_EXTENSION);
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

    if ($ext == 'mp4'){

        }else{

        }    
      }else{
        echo "empty file";
      }  
     }else{

     }   
    }
    
    public function getdataberita(){
        if ($this->session->userdata('privilages') == 'SUPERADMIN'){
          $data = $this->Berita_model->list_berita();
          echo json_encode($data);
        }else{
          $this->load->view('err404');
        }
      }
}