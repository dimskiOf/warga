<?php
class Ajax extends CI_Controller {
  
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->limit = 5;
    }
 
   public function load_list(){
        $limit = $this->limit;
        $data['users'] = $this->get_load_more_data($limit,'');
        $this->load->view('ajax_load_more_list', $data);
    }
   public function get_ajax_load_more(){
        $limit = $this->limit; 
        $page = $limit * $this->input->get('page');
        $data['users'] = $this->get_load_more_data($limit,$page);
        $isExist = $this->load->view('load_more_loop', $data);
        if($isExist){
            echo json_encode($isExist);
        }
   } 
   function get_load_more_data($limit, $offset = ''){
        $this->db->select('name');
        $this->db->from('users');
        $this->db->limit($limit,$offset);
        $data = $this->db->get()->result();
        return $data;
   }
 
   
}