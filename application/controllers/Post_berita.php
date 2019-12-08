<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Post_berita extends CI_Controller {

 	 public function __construct()
        {
                parent::__construct();
                $this->load->helper('url');
                $this->load->library('session');
                $this->load->model('Berita_post');


        }
        public function index()
    {
        $this->load->view('view_main/berita');
    }
    // kategori berita atau list berita
    public function beritapemerintahdanpolitik(){
      $data = $this->Berita_post->pemerintahdanpolitik();
      echo json_encode($data);  
      }

    public function beritalifestyledanbudaya(){
      $data = $this->Berita_post->lifestyledanbudaya();
      echo json_encode($data); 
      }

    public function beritakriminaldanhukum(){
      $data = $this->Berita_post->kriminaldanhukum();
      echo json_encode($data);  
      }

    public function beritaolahragadankesehatan(){
      $data = $this->Berita_post->olahragadankesehatan();
      echo json_encode($data);  
      }

  
}