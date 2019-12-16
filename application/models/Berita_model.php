<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Berita_model extends CI_Model {

 public function __construct()
    {
        parent::__construct();

    }
public function list_berita(){
	$this->db->select('judul, kategori_berita, tgl, pembuat, id_berita');
	$this->db->from('berita');
	return $this->db->get()->result_array();
}
public function inserting_berita($a,$b,$c,$d,$e,$f,$g,$h,$j){
	date_default_timezone_set('Asia/Jakarta');
    $tglposting=date('Y-m-d H:i:s');
	$data = array(
        'judul' => $a,
        'kategori_berita' => $b,
        'tgl' => $tglposting,
        'konten' => $d,
        'pembuat' => $c,
        'Slug_berita' => $f,
        'thumbnail' => $e,
        'user_id' => $g,
        'extensi' => $h,
        'media_src' => $j,
	);
	 $hasil = $this->db->insert('berita', $data);
	 return $hasil;
}
}