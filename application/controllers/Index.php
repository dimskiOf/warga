<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Index extends CI_Controller {

 	 public function __construct()
        {
                parent::__construct();
                $this->load->helper('url');
                $this->load->library('session');
                $this->load->model('Berita_post');


        }
        public function index()
    {
        $data['pp'] = $this->Berita_post->pemerintahdanpolitik();
        $data['lb'] = $this->Berita_post->lifestyledanbudaya();
        $data['kh'] = $this->Berita_post->kriminaldanhukum();
        $data['ok'] = $this->Berita_post->olahragadankesehatan();
        $this->load->view('view_main/index', $data);
    }
}