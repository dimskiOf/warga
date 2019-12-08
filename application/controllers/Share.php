<?php defined('BASEPATH') OR exit('No direct script access allowed');
ob_start();
class Share extends CI_Controller {

 	 public function __construct()
        {
                parent::__construct();
                $this->load->helper('url');
                $this->load->library('session');
                $this->load->model('Data_uploads');
                $this->load->library('user_agent');

        }
        public function index()
    {
if($this->session->userdata('nama')){
        $this->db->query("SET sql_mode = '' ");
        $fold  = $this->session->userdata('folderr');
        $dodon = $this->input->post('file');
        $dodin = $this->input->post('set');
if (is_array($dodon)){
        echo '<script>alert("not an array mode");</script>';
        redirect($this->agent->referrer());
}else{
if(!empty($_REQUEST['file']) && !empty($_REQUEST['set'])){
        $file = $_REQUEST['file'];
        $set = $_REQUEST['set'];
        $usrids = $this->session->userdata('nama');
        $token = $this->session->userdata('id');
        $a = $this->input->post('readmes');
        $b = preg_replace('#<script(.*?)>(.*?)</script>#is', '', $a);
        $c = preg_replace('/\bcenter\b/i', '', $b);
        $d = preg_replace('/\bright\b/i', '', $c);
        $e = preg_replace('/\bjustify\b/i','',$d);
        $f = strip_tags($e, "<style><img><src><class><h1><h2><h3><h4><sup><strike><color><marquee><b><br><em></em><hr></hr><i><li><ol><p><s><span><tr><td><u><ul>");
        $readme = $this->security->xss_clean($f);
        $final = "ups/".$fold."/".$file;
        $where2 = array(
        'file_name' => $file,
        'user_id' => $usrids
    );
$data = $this->Data_uploads->ceking("uploads",$where2);
if (($data)==null){
		echo '<script>alert("no request data");</script>';
		redirect(base_url().'tabel', 'refresh');
	}else{
if (file_exists($final) && is_readable($final) && preg_match('/\.*$/',$final)) {
        foreach ($data as $id) {
        $fileid = $id['file_id'];
        }
$query = $this->db->query("SELECT * FROM shared_files where fille_id = ".$this->db->escape($fileid)." and access_token = ".$this->db->escape($token)."");
if ($query->num_rows() > 0){
    echo '<script>alert("file tersebut sudah dishare");</script>'; 
    }else{
        $dater = date("Y-m-d");
        $insert = "INSERT INTO shared_files(access_token, fille_id, directory, file_name, dater, readme_file) VALUES(".$this->db->escape($token).", ".$this->db->escape($fileid).", ".$this->db->escape($final).", ".$this->db->escape($file).", ".$this->db->escape($dater).", ".$this->db->escape($readme).")";
        $update = "UPDATE uploads set status = 'shared', action = 'UNSHARE' where file_id = ".$this->db->escape($fileid)." ";
        $dataa = $this->db->query($insert);
        $dataa = $this->db->query($update);

 require_once(APPPATH.'/vendor/autoload.php');
        $options = array(
            'cluster' => 'ap1',
            'useTLS' => true
        );
        $pusher = new  Pusher\Pusher(
            '03390b8b7160498ec7dc', //ganti dengan App_key pusher Anda
            '2019924890ffdf16030d', //ganti dengan App_secret pusher Anda
            '865726', //ganti dengan App_key pusher Anda
        $options
        );
        $data['message'] = 'dishare';
        $pusher->trigger('my-channel', 'my-event', $data);
        echo '<script>alert("'.$file.' Berhasil dishare");</script>';
         }
                        }else{
                            echo "no direct access";
                        }
                        }
                 }else
                 {
                    echo "no direct access";
                 }
            }
       
         }else{redirect(base_url(), 'refresh');}	
    }

public function unshare(){
    if($this->session->userdata('nama')){
        $this->db->query("SET sql_mode = '' ");
        $fold  = $this->session->userdata('folderr');
        $dodon = $this->input->post('file');
if (is_array($dodon)){
        echo '<script>alert("not an array mode");</script>';
        redirect($this->agent->referrer());
}else{
if(!empty($_REQUEST['file'])){
        $file = $_REQUEST['file'];
        $usrids = $this->session->userdata('nama');
        $token = $this->session->userdata('id');
        $final = "ups/".$fold."/".$file;
        $where2 = array(
        'file_name' => $file,
        'user_id' => $usrids
    );
$data = $this->Data_uploads->ceking("uploads",$where2);
if (($data)==null){
        echo '<script>alert("no request data");</script>';
        redirect(base_url().'tabel', 'refresh');
    }else{
if (file_exists($final) && is_readable($final) && preg_match('/\.*$/',$final)) {
        foreach ($data as $id) {
        $fileid = $id['file_id'];
        }
$query = $this->db->query("SELECT * FROM shared_files where fille_id = ".$this->db->escape($fileid)." and access_token = ".$this->db->escape($token)."");
if ($query->num_rows() > 0){
        $update = "UPDATE uploads set status = 'not shared', action = 'SHARE' where file_id = ".$this->db->escape($fileid)." ";
        $delete = "DELETE FROM shared_files WHERE fille_id=".$this->db->escape($fileid)."";
        $dataa = $this->db->query($update);
        $dataa = $this->db->query($delete);
        echo $file.' Unshare Berhasil';

    require_once(APPPATH.'/vendor/autoload.php');
        $options = array(
            'cluster' => 'ap1',
            'useTLS' => true
        );
        $pusher = new  Pusher\Pusher(
            '03390b8b7160498ec7dc', //ganti dengan App_key pusher Anda
            '2019924890ffdf16030d', //ganti dengan App_secret pusher Anda
            '865726', //ganti dengan App_key pusher Anda
        $options
        );
        $data['message'] = 'unshare';
        $pusher->trigger('my-channel', 'my-event', $data);
        
    }else{
            echo 'no direct access';
         }
                        }else{
                            echo "no direct access";
                        }
                        }
                 }else
                 {
                    echo "no direct access";
                 }
            }
       
         }else{redirect(base_url(), 'refresh');} 
    }
    
}