<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Berita_post extends CI_Model {

 public function __construct()
    {
        parent::__construct();

    }

public function pemerintahdanpolitik(){
    $kategori = 'pemerintah';
    $kategori2 = 'politik';
    $this->db->select('judul, id_berita, Slug_berita, thumbnail,extensi,duration_vid');
    $this->db->from('berita');
    $this->db->where("kategori_berita",$kategori);
    $this->db->or_where("kategori_berita",$kategori2);
    
    return $this->db->get()->result_array();
}

public function olahragadankesehatan(){
    $kategori = 'olahraga';
    $kategori2 = 'kesehatan';
    $this->db->select('judul, id_berita, Slug_berita, thumbnail,extensi,duration_vid');
    $this->db->from('berita');
     $this->db->where("kategori_berita",$kategori);
    $this->db->or_where("kategori_berita",$kategori2);
    return $this->db->get()->result_array();
}
public function lifestyledanbudaya(){
    $kategori = 'lifestyle';
    $kategori2 = 'budaya';
    $this->db->select('judul, id_berita, Slug_berita, thumbnail,extensi,duration_vid');
    $this->db->from('berita');
    $this->db->where("kategori_berita",$kategori);
    $this->db->or_where("kategori_berita",$kategori2);
    return $this->db->get()->result_array();
}
public function kriminaldanhukum(){
    $kategori = 'kriminal';
    $kategori2 = 'hukum';
    $this->db->select('judul, id_berita, Slug_berita, thumbnail,extensi,duration_vid');
    $this->db->from('berita');
    $this->db->where("kategori_berita",$kategori);
    $this->db->or_where("kategori_berita",$kategori2);
    return $this->db->get()->result_array();
}
public function showberita($berita_id){
    $this->db->select('media_src,duration_vid,judul, id_berita, Slug_berita,pembuat, thumbnail,kategori_berita,konten,tgl,extensi');
    $this->db->from('berita');
    $this->db->where("id_berita",$berita_id);
    return $this->db->get()->result_array();
}
public function showberitaterbaru(){
    $idberitapolitik = 'POLITIK';
    $this->db->select('media_src,duration_vid,judul, id_berita, Slug_berita,pembuat, thumbnail,kategori_berita,konten,tgl,extensi');
    $this->db->from('berita');
    $this->db->where("kategori_berita",$idberitapolitik);
    $this->db->order_by('id_berita desc');
    $this->db->limit(1);
    return $this->db->get()->result_array();
}
public function showberitabykategori($idberitapolitik){

    $this->db->select('media_src,duration_vid,judul, id_berita, Slug_berita,pembuat, thumbnail,kategori_berita,konten,tgl,extensi');
    $this->db->from('berita');
    $this->db->where("kategori_berita",$idberitapolitik);
    $this->db->order_by('id_berita desc');
    $this->db->limit(1);
    return $this->db->get()->result_array();
}
public function showberitaterbaruktgr($idberitapolitik){
    $this->db->select('media_src,duration_vid,judul, id_berita, Slug_berita,pembuat, thumbnail,kategori_berita,konten,tgl,extensi');
    $this->db->from('berita');
    $this->db->where("kategori_berita",$idberitapolitik);
    $this->db->order_by('id_berita desc');
    return $this->db->get()->result_array();
}
public function showberitadummy(){
    $idberitapolitik = 'POLITIK';
    $this->db->select('media_src,duration_vid,judul, id_berita, Slug_berita,pembuat, thumbnail,kategori_berita,konten,tgl,extensi');
    $this->db->from('berita');
    $this->db->where("kategori_berita",$idberitapolitik);
    return $this->db->get()->result_array();
}
public function countall(){
    $inall = "SELECT(SELECT COUNT(*) FROM berita WHERE kategori_berita = 'politik') as pol, (SELECT COUNT(*) FROM berita WHERE kategori_berita = 'pemerintah') as pem, (SELECT COUNT(*) FROM berita WHERE kategori_berita = 'budaya') as bud, (SELECT COUNT(*) FROM berita WHERE kategori_berita = 'hukum') as huk, (SELECT COUNT(*) FROM berita WHERE kategori_berita = 'kesehatan') as kes, (SELECT COUNT(*) FROM berita WHERE kategori_berita = 'kriminal') as krim, (SELECT COUNT(*) FROM berita WHERE kategori_berita = 'lifestyle') as lif, (SELECT COUNT(*) FROM berita WHERE kategori_berita = 'olahraga') as olah FROM dual";
    return  $this->db->query($inall)->result_array();

}
}