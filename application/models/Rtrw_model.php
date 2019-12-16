<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Rtrw_model extends CI_Model {

 public function __construct()
    {
        parent::__construct();

    }
public function list_berita(){
	$this->db->select('judul, kategori_berita, tgl, pembuat, id_berita');
	$this->db->from('berita');
	return $this->db->get()->result_array();
}
public function inserting_rtrw($a,$b,$c,$d,$e,$f,$g,$h,$i,$j,$k){
    $data = array(
        'kelurahan' => $a,
        'kecamatan' => $b,
        'rw' => $c,
        'nik_rw' => $d,
        'nama_rw' => $e,
        'telp_rw' => $f,
        'rt' => $g,
        'nik_rt' => $h,
        'nama_rt' => $i,
        'telp_rt' => $j,
        'user_id' => $k,
	);
	 $hasil = $this->db->insert('tbl_rtrw', $data);
	 return $hasil;
}
}