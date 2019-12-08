<?php defined('BASEPATH') OR exit('No direct script access allowed');
ob_start();
class Forum extends CI_Controller {

 	 public function __construct()
        {
                parent::__construct();
                $this->load->helper('url');
                $this->load->library('session');
                $this->load->model('Data_uploads');
        }
        public function index()
        {
if ($this->session->userdata('nama')){ 
require_once(APPPATH.'/vendor/autoload.php');
        $options = array(
            'cluster' => 'ap1',
            'useTLS' => true
        );
        $pusher = new  Pusher\Pusher(
            '03390b8b7160498ec7dc', //ganti dengan App_key pusher Anda
            '2019924890ffdf16030d', 
            '865726', 
            $options
            );
        $info = $pusher->get_channel_info('my-channel', array('info' => 'subscription_count'));
        $subscription_count['jml'] = $info->subscription_count;
        $this->load->view('view_upload/forum',$subscription_count);
    }else{
        $this->load->view('view_upload/forum');
    }
         }
    public function send(){
    if ($this->session->userdata('nama')){
            $nama = $this->session->userdata('namaasli');
            $userid = $this->session->userdata('nama');
            $token = md5($this->session->userdata('id'));
            date_default_timezone_set('Asia/Jakarta');
            $waktu = date('Y-m-d H:i:s');
    if (!empty($_REQUEST['isinya'])){
            $chatusr = $_REQUEST['isinya'];
            $this->Data_uploads->kirimmessage($userid, $waktu, $token, $nama, $chatusr);
    require_once(APPPATH.'/vendor/autoload.php');
            $options = array(
                'cluster' => 'ap1',
                'useTLS' => true
            );
            $pusher = new  Pusher\Pusher(
                '03390b8b7160498ec7dc', //ganti dengan App_key pusher Anda
                '2019924890ffdf16030d', 
                '865726', 
                $options
            );
            $data['message'] = 'success';
            $info = $pusher->get_channel_info('my-channel', array('info' => 'subscription_count'));
            $data['berapanih'] = $info->subscription_count;
            $pusher->trigger('my-channel', 'my-event', $data);
            }else{
            
            }      
        }else{
            echo 'anti hacker method';
        }
    }
}