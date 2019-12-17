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
public function get_kel(){
    $this->db->select('kelurahan');
    $this->db->from('tbl_rtrw');
    $this->db->group_by('kelurahan');
    return $this->db->get()->result_array();
}
public function get_kec(){
    $this->db->select('kecamatan');
    $this->db->from('tbl_rtrw');
    $this->db->group_by('kecamatan');
    return $this->db->get()->result_array();
}
public function get_rtrw($kel,$kec,$rt,$rw){
    $this->db->select('id');
    $this->db->from('tbl_rtrw');
    $this->db->where('kelurahan',$kel);
    $this->db->where('kecamatan',$kec);
    $this->db->where('rt',$rt);
    $this->db->where('rw',$rw);
    return $this->db->get()->result_array();
}
public function inserting_kegiatan($a,$b,$c,$d,$e,$f){
    $data = array(
        'nama_kegiatan' => $a,
        'deskripsi' => $b,
        'foto' => $c,
        'tgl_kegiatan' => $d,
        'id_rtrw' => $e,
        'user_id' => $f,
    );
     $hasil = $this->db->insert('tbl_kegiatan', $data);
     return $hasil;
}

}