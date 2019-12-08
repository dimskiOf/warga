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
    $this->db->select('judul, id_berita, Slug_berita, thumbnail');
    $this->db->from('berita');
    $this->db->where("kategori_berita",$kategori);
    $this->db->or_where("kategori_berita",$kategori2);
    
    return $this->db->get()->result_array();
}
public function olahragadankesehatan(){
    $kategori = 'olahraga';
    $kategori2 = 'kesehatan';
    $this->db->select('judul, id_berita, Slug_berita, thumbnail');
    $this->db->from('berita');
     $this->db->where("kategori_berita",$kategori);
    $this->db->or_where("kategori_berita",$kategori2);
    return $this->db->get()->result_array();
}
public function lifestyledanbudaya(){
    $kategori = 'lifestyle';
    $kategori2 = 'budaya';
    $this->db->select('judul, id_berita, Slug_berita, thumbnail');
    $this->db->from('berita');
    $this->db->where("kategori_berita",$kategori);
    $this->db->or_where("kategori_berita",$kategori2);
    return $this->db->get()->result_array();
}
public function kriminaldanhukum(){
    $kategori = 'kriminal';
    $kategori2 = 'hukum';
    $this->db->select('judul, id_berita, Slug_berita, thumbnail');
    $this->db->from('berita');
    $this->db->where("kategori_berita",$kategori);
    $this->db->or_where("kategori_berita",$kategori2);
    return $this->db->get()->result_array();
}

}