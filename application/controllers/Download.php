<?php defined('BASEPATH') OR exit('No direct script access allowed');
ob_start();
class Download extends CI_Controller {

 	 public function __construct()
        {
                parent::__construct();
                $this->load->helper('url');
                $this->load->library('session');
                $this->load->model('Data_uploads');


        }
        public function index()
    {
if($this->session->userdata('nama')){
	$this->db->query("SET sql_mode = '' ");
	$fold  = $this->session->userdata('folderr');
if (!($_REQUEST)){
    	echo '<script>alert("hmmmmm not allowed!");</script>';
		redirect(base_url().'tabel', 'refresh');
    }else{
if(!empty($_REQUEST['file'])){
    $file = $_REQUEST['file'];
    $final = "ups/".$fold."/".$file;
        $where2 = array(
        'file_name' => $file
        );
    	$data = $this->Data_uploads->ceking("uploads",$where2);
if (($data)==null){
		echo '<script>alert("no request data");</script>';
		redirect(base_url().'tabel', 'refresh');
	}else{
if (isset($final)) {
if (file_exists($final) && is_readable($final) && preg_match('/\.*$/',$final)) {
header('Content-Description: File Transfer');
header("Content-Type: application/force-download");// some browsers need this
header("Content-Disposition: attachment; filename=\"$file\"");
header('Expires: 0');
header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
header('Pragma: public');
header('Content-Length: ' . filesize($final));
ob_clean();
flush();
readfile($final);

    exit;
}else {
header("HTTP/1.0 404 Not Found");
echo "<h3>Error 404: File Not Found:  <br /><em>$file</em></h3>";
header('Refresh: 5; url=./tabel');
print '<i style="color:red">You will be redirected in 5 seconds</i>';
exit ;
}
} else {
	$success = '<div class="alert alert-success">Download Succes <a href="tabel">refresh</a>.</div>';
print '<h1 style="text-align:center">You you shouldn\'t be here ......</h1><br> <p style="color:red"><b>redirection in 5 seconds</b></p>';
header('Refresh: 5; url=./tabel');
exit;
}
}
}
}

    }
    	$this->load->view('err404');
}
public function files(){
	$idfile = $this->input->post('file_id');
	$where = array(
		'fille_id' => $idfile
		);
	$cek = $this->Data_uploads->dadu($where);
}
}