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

    }

    public function inputdataberita(){
    if (($this->session->userdata('privilages') == 'SUPERADMIN') or ($this->session->userdata('privilages') == 'ADMIN')){
        require_once(APPPATH.'/vendor/autoload.php');
        $getID3 = new getID3;
        $config['upload_path'] = './assets/img/post-berita/'; //path folder
        $config['allowed_types'] = 'jpg|png|jpeg'; //type yang dapat diakses bisa anda sesuaikan
        $config['encrypt_name'] = TRUE; //Enkripsi nama yang terupload
        define("UPLOAD_DIR", "assets/video/video-post/");
        $this->upload->initialize($config);
     if(!empty($_FILES['myFile']['name']) && !empty($_FILES['myFile2']['name'])){
            $namafile = $_FILES['myFile']['name'];
            $tmp = $_FILES['myFile']['tmp_name'];
            $ext = pathinfo($_FILES['myFile']['name'], PATHINFO_EXTENSION);
            $name = preg_replace("/[^A-Z0-9._-]/i", "_", $namafile);
            $videopower = $getID3->analyze($tmp);

            list($filenames,$ekstensi) = array_pad(explode('.', $namafile),2,null);
            list($explode) = array_pad(explode('.', $ekstensi),1,null);
            $names = preg_replace("/[^A-Z0-9._-]/i", "_", $filenames);

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
            if ($this->upload->do_upload('myFile2')){
            $gbr = $this->upload->data();
            move_uploaded_file($tmp,UPLOAD_DIR . $name);
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
            $o=$this->input->post('berita-name');
            $b=$this->input->post('kategoris');
            $c=$this->input->post('berita-author');
            $d=$this->input->post('kontens');
            $e=$gbr['file_name'];
            $f=$this->input->post('slug-name');
            $g=$this->session->userdata('userid');
            $h=$ext;
            $j=$name;
            $k=$videopower['playtime_string'];
            $data = $this->Berita_model->inserting_berita($o,$b,$c,$d,$e,$f,$g,$h,$j,$k);
             echo json_encode($data);
            }
        }else{
            echo "ext tidak valid";
        }
        }else{
           echo "empty file";
        }
      }else{
         $this->load->view('err404');
        }
    }

    public function inputdataberitas(){
    if (($this->session->userdata('privilages') == 'SUPERADMIN') or ($this->session->userdata('privilages') == 'ADMIN')){
        $config['upload_path'] = './assets/img/post-berita/'; //path folder
        $config['allowed_types'] = 'jpg|png|jpeg'; //type yang dapat diakses bisa anda sesuaikan
        $config['encrypt_name'] = TRUE; //Enkripsi nama yang terupload
        $this->upload->initialize($config);
        if(!empty($_FILES['myFile1']['name'])){
            $ext = pathinfo($_FILES['myFile1']['name'], PATHINFO_EXTENSION);

        if ($this->upload->do_upload('myFile1')){
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
            $a=$this->input->post('berita-name');
            $b=$this->input->post('kategoris');
            $c=$this->input->post('berita-author');
            $d=$this->input->post('kontens');
            $e=$gbr['file_name'];
            $f=$this->input->post('slug-name');
            $g=$this->session->userdata('userid');
            $h=$ext;
            $j='Media Null';
            $k='NoDuration';
            $data = $this->Berita_model->inserting_berita($a,$b,$c,$d,$e,$f,$g,$h,$j,$k);
             echo json_encode($data);
            }
        else{
            echo "ext tidak valid";
        }
        }else{
            echo "empty file";
        }
      }else{
            $this->load->view('err404');
        }
    }
    
}