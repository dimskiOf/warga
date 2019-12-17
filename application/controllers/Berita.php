<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Berita extends CI_Controller {

 	 public function __construct()
        {
                parent::__construct();
                $this->load->helper('url');
                $this->load->library('session');
                $this->load->model('Berita_post');


        }
        public function index()
    {   
    if (!empty($_REQUEST)){
        $idberita = $_REQUEST['berita_id'];
        $query = $this->db->where('id_berita', $idberita)->get("berita");
        
    if ($query->num_rows() > 0){
        $idberita = $_REQUEST['berita_id'];
        $action['isiberita'] = $this->Berita_post->showberita($idberita);
        $actions = $this->Berita_post->showberita($idberita);
        foreach ($actions as $row => $value) {
           $kateberita = $value['kategori_berita']; 
        }
        $action['isiberita2'] =$this->Berita_post->showberitaterbaruktgr($kateberita);
        $action['isiberita3'] =$this->Berita_post->countall();
        $this->load->view('view_main/berita',$action);
        }else{
        $action['isiberita'] = $this->Berita_post->showberitaterbaru();
        $action['isiberita2'] = $this->Berita_post->showberitadummy();
        $action['isiberita3'] =$this->Berita_post->countall();
        $this->load->view('view_main/berita',$action);
            }
        }else{
        $action['isiberita'] = $this->Berita_post->showberitaterbaru();
        $action['isiberita2'] = $this->Berita_post->showberitadummy();
        $action['isiberita3'] =$this->Berita_post->countall();
        $this->load->view('view_main/berita',$action);
        }
    }
    public function getterdata(){
        $idberitapolitik = $this->input->post('poltik_name');
    if (!empty($idberitapolitik)){
        $data1 = $this->Berita_post->showberitaterbaruktgr($idberitapolitik);
       echo json_encode($data1);
      }else{
        echo "not allowed";
      }
    }
    public function setterdata(){
        $idberitapolitik = $this->input->post('poltik_name');
    if (!empty($idberitapolitik)){
        $data2 = $this->Berita_post->showberitabykategori($idberitapolitik);
       echo json_encode($data2);
      }else{
        echo "not allowed";
      }
    }
    public function foosetterdata(){
        $idberitapolitik = $this->input->post('poltik_name');
    if (!empty($idberitapolitik)){
        $data1 = $this->Berita_post->showberita($idberitapolitik);
       echo json_encode($data1);
      }else{
        echo "not allowed";
      }
  }
}