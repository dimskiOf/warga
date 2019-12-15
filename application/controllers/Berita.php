<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Berita extends CI_Controller {

 	 public function __construct()
        {
                parent::__construct();
                $this->load->helper('url');
                $this->load->library('session');
                $this->load->model('Berita_post');


        }
        public function index($berita_id = '63')
    {
        $this->load->view('view_main/berita',array('berita_id' => $berita_id));
        $action['iniisinyaberita'] = $this->Berita_post->showberita($berita_id);
        $this->load->view('view_main/berita',$action);
    }
}