<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Data_uploads extends CI_Model {

var $table = 'chat-khusus'; //nama tabel dari database
var $column_order = array('datetime, idchat, nama_usr, chat_usr'); //field yang ada di table user
var $order = array('datetime' => 'asc'); // default order

 public function __construct()
    {
        parent::__construct();
    }
 public function dadu($table, $where) {
     $query = $this->db->get_where($table,$where); 
     return $query->result_array(); 
 }
 public function dim($table, $username) {
     $query = $this->db->get_where($table,$username); 
     return $query->result_array(); 
 }
 public function file($table, $file_id) {
     $query = $this->db->get_where($table,$file_id); 
     return $query->result_array(); 
 }
 public function ceking($table, $ses){
	 $query = $this->db->get_where($table,$ses); 
     return $query->result_array(); 
	}
public function taroh($ses){
	$this->db->select('username, tglDaftar, nama, email, folder');
	$this->db->from('free_user');
	$this->db->where(array('user_id' => $ses));
	return $this->db->get()->result_array();
	}
public function name($ses){
	$this->db->select('nama');
	$this->db->from('free_user');
	$this->db->where(array('user_id' => $ses));
	return $this->db->get()->result_array();
	}
public function your($ses){
	$this->db->select('user_id, nama_usr, chat_usr');
	$this->db->from('chat-khusus');
	$this->db->where(array('user_id' => $ses));
	return $this->db->get()->result_array();
	}
public function ambil($limit, $start){
	$this->db->select('datetime, idchat, nama_usr, chat_usr');
	$this->db->from('chat-khusus');
	$this->db->order_by('datetime DESC');
	$this->db->limit($limit,$start);
	return $this->db->get()->result_array();
	}
public function ambil1(){
	$this->db->select('nama_usr, chat_usr');
	$this->db->from('chat-khusus');
	return $this->db->get()->result_array();
	}
public function spesific($ses){
	$this->db->select('file_name , file_size, file_type, status');
	$this->db->from('uploads');
	$this->db->where(array('user_id' => $ses));
	return $this->db->get()->result_array();
	}
public function spesific2($ses){
	$this->db->select('file_name, status, action');
	$this->db->from('uploads');
	$this->db->where(array('user_id' => $ses));
	return $this->db->get()->result_array();
	}
public function free(){
	return	$this->db->get('free_user');
	}
public function data_tahunan(){
	return	$this->db->get('penggunaan')->result_array();
	}
public function countall(){
		$insert = "SELECT SUM(file_size) FROM uploads";
	return	$this->db->query($insert)->result_array();
	}
public function deletechild($fileid)
    {
    	$this->db->delete('shared_files', array('fille_id' => $fileid));
    }
public function deleteparent($row, $userd)
    {
    	$this->db->delete('uploads', array('file_name' => $row, 'user_id' => $userd));
    }
public function uploaddata($id, $tgl, $name, $size, $ext)
    {
    	$data['user_id']   = $id;
        $data['tglUpload'] = $tgl;
        $data['file_name']  = $name;
        $data['file_size']   = $size;
        $data['file_type']    = $ext;
        $data['status']    = 'not shared';
        $data['action']    = 'SHARE';
	   	$this->db->insert('uploads', $data);
    }
public function kirimmessage($userid, $waktu, $token, $nama, $chatusr)
    {
    	$data['user_id']   = $userid;
        $data['datetime'] = $waktu;
        $data['idchat']  = $token;
        $data['nama_usr']   = $nama;
        $data['chat_usr']    = $chatusr;
	   	$this->db->insert('chat-khusus', $data);
    }
public function regis()
    {
    	$data['nama']   = $this->input->post('nama');
        $data['folder'] = $this->input->post('folder');
        $data['email']  = $this->input->post('email');
        $data['username']   = $this->input->post('username');
        $data['tglDaftar']    = date("Y-m-d");
	   $this->db->insert('free_user', $data);
    }
public function regis2()
    {
    	$data['access_token'] = md5($this->input->post('username'));
        $data['privilege'] = "USER";
        $data['username']   = $this->input->post('username');
        $data['password']   = md5($this->input->post('password'));
	   $this->db->insert('free_login', $data);
    }
public function files($limit){
	$this->db->select('fille_id, file_name, readme_file');
	$this->db->from('shared_files');
	$this->db->order_by('file_name ASC');
	$this->db->limit($limit);
	return $this->db->get()->result_array();
}

public function insert($data = array()){
        $insert = $this->db->insert_batch('uploads',$data);
        return $insert?true:false;
    }
}