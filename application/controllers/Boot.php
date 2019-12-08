<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Boot extends CI_Controller {

 	 public function __construct()
        {
                parent::__construct();
                $this->load->helper('url');
                $this->load->library('session');
                $this->load->model('Data_uploads');


        }
    private $perPage = 5; 
    public function index()
    {
     $this->load->database();
     $count = $this->db->get('posts')->num_rows();
     if(!empty($this->input->get("page"))){
      $start = ceil($this->input->get("page") * $this->perPage);
      $query = $this->db->limit($start, $this->perPage)->get("posts");
      $data['posts'] = $query->result();
      $result = $this->load->view('view_upload/tes', $data);
      echo json_encode($result);

     }else{

      $query = $this->db->limit(5, $this->perPage)->get("posts");
      $data['posts'] = $query->result();
    $this->load->view('view_upload/tes', $data);
     }
    }
}