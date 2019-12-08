<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Tes extends CI_Controller {

     public function __construct()
        {
                parent::__construct();
                $this->load->helper('url');
                $this->load->library('session');
                $this->load->model('Berita_model');


        }
        public function index()
    {
        $this->load->view('view_upload/simulasi');

    }
    public function testing(){
        $folder = "noobs/";
        $name = $_FILES['cover']['name'];
        $size = $_FILES['cover']['size'];
        $type = $_FILES['cover']['type'];
        $temp = $_FILES['cover']['tmp_name'];
        if (isset($_FILES['cover']) and ! $_FILES["cover"]["error"]) {
        if ($size < 502400000000 ){
        move_uploaded_file($temp, $folder.$name);
        echo "Nama File : <b>".$name;
        echo "</b><br>";
        echo "Ukuran File : <b>".$size;
        echo "</b> Byte<br>";
        echo "Type File : <b>".$type;
        echo "</b>";
        }else{
        echo "Gagal Upload File terlalu besar";
        }
        }
    }
    public function inputdataberita(){
if (($this->session->userdata('privilages') == 'SUPERADMIN') or ($this->session->userdata('privilages') == 'ADMIN')){
        $folderr = "assets/img/post-berita";
        $namafile = $_FILES['myFile']['name'];
        $ext = $_FILES['myFile']['type'];
        $tmp = $_FILES['myFile']['tmp_name'];
if (isset($_FILES['myFile']) and ! $_FILES["myFile"]["error"]) {
         $query = $this->db->where('ekstenti_file', $ext)->get("ekstensi");     
if ($query->num_rows() > 0) {
          echo 'ekstensi tidak diperbolehkan';
          }else{
          $success = move_uploaded_file($tmp,
            $folderr. $namefile);
if ($success){
         // set permisi file          
         chmod($folderr . $name, 0644);
          $a=$this->input->post('jdls');
          $b=$this->input->post('ctgr');
          $c=$this->input->post('aauth');
          $d=$this->input->post('kontn');
          $e=$namefile;
          $f=$this->input->post('slugs');
         $data = $this->Berita_model->inserting_berita($a,$b,$c,$d,$e,$f);
          echo json_encode($data);
                 }           
            }
        }
    }else{
        $this->load->view('err404');
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

    public function inputdataberitas(){
        if (($this->session->userdata('privilages') == 'SUPERADMIN') or ($this->session->userdata('privilages') == 'ADMIN')){
          $a=$this->input->post('jdls');
          $b=$this->input->post('ctgr');
          $c=$this->input->post('aauth');
          $d=$this->input->post('kontn');
          $e=$this->input->post('file');
          $f=$this->input->post('slugs');

          $data = $this->Berita_model->inserting_berita($a,$b,$c,$d);
          echo json_encode($data);
        }else{
          $this->load->view('err404');
        }
      }
}