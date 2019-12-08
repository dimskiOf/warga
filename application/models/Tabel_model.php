<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Tabel_model extends CI_Model {

 public function __construct()
    {
        parent::__construct();

    }
public function userbyadmin(){
$hak = 'SUPERADMIN';
 $this->db->select('tbl_user.username,login.username,nama, jenis_kelamin, tgl_daftar, tbl_user.privilage,login.privilage, user_id');
$this->db->from('tbl_user');
$this->db->join('login', 'tbl_user.username = login.username');
$this->db->where('login.privilage !=', $hak);

	return $this->db->get()->result_array();
}
 public function user(){
 	$this->db->select('tbl_user.username,login.username,nama, jenis_kelamin, tgl_daftar, tbl_user.privilage,login.privilage, user_id');
$this->db->from('tbl_user');
$this->db->join('login', 'tbl_user.username = login.username');
	return $this->db->get()->result_array();
}
public function get_user_byid($kous){
	 $hsl=$this->db->query("SELECT * FROM tbl_user WHERE user_id='$kous'");
        if($hsl->num_rows()>0){
            foreach ($hsl->result() as $data) {
                $hasil=array(
                    'username' => $data->username,
                    'nama' => $data->nama,
                    'jenis_kelamin' => $data->jenis_kelamin,
                    );
            }
        }
      return $hasil;
}
public function get_user_byidadmin($kous){
	$hak = 'SUPERADMIN';
	$this->db->select('tbl_user.username,login.username,nama, jenis_kelamin');
	$this->db->from('tbl_user');
	$this->db->join('login', 'tbl_user.username = login.username');
	$this->db->where('login.privilage !=', $hak);
	$this->db->where('tbl_user.user_id', $kous);
	$hsl = $this->db->get()->result_array();
 if($hsl != null){
            foreach ($hsl as $data) {
                $hasil=array(
                    'username' => $data['username'],
                    'nama' => $data['nama'],
                    'jenis_kelamin' => $data['jenis_kelamin'],
                    );
            }
            return $hasil;
        }
      
}
function hapus_data($kous){
        $hasil=$this->db->query("DELETE FROM tbl_user WHERE username='$kous'");
        $this->db->query("DELETE FROM login WHERE username='$kous'");
        return $hasil;
    }
function hapus_databyadmin($kous){
		$hak = 'SUPERADMIN';
		$hasil=$this->db->query("DELETE FROM tbl_user WHERE username='$kous' and privilage != '$hak'");
        $this->db->query("DELETE FROM login WHERE username='$kous' and privilage != '$hak'");
        return $hasil;

    }
public function simpan_data1()
    {	

        $passwordid=md5($this->input->post('password'));
        $token=md5($passwordid);
        $str = $this->input->post('hak');
        $filter = preg_replace("/[^0-2]/", "",$str);
        $data['username']   = $this->input->post('username');
        $data['password'] = $passwordid=md5($this->input->post('password'));
        $data['privilage']  = $filter;
        $data['access_token']   = $token;
        $data['email']    = $this->input->post('email');
	   	$this->db->insert('login', $data);
    }
public function simpan_data2()
    {	
    	date_default_timezone_set('Asia/Jakarta');
        $tgldftar=date('Y-m-d H:i:s');
        $str = $this->input->post('hak');
        $str2 = $this->input->post('ki');
        $filter = preg_replace("/[^0-2]/", "",$str);
        $filter2 = preg_replace("/[^0-2]/", "",$str2);
      	$data['nama']   = $this->input->post('nama');
        $data['username'] = $this->input->post('username');
        $data['jenis_kelamin']  = $filter2;
        $data['privilage']  = $filter;
        $data['tgl_daftar']   = $tgldftar;
        $data['email']    = $this->input->post('email');
	   	$this->db->insert('tbl_user', $data);
    }
  public function update_data_user($nama,$ke,$kous){
        $hasil=$this->db->query("UPDATE tbl_user SET nama='$nama',jenis_kelamin='$ke' WHERE username='$kous'");
        return $hasil;
    }

}