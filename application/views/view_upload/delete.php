<?php
if($this->session->userdata('nama')){

$fold  = $this->session->userdata('folderr');
$url = 'http://localhost/a1';
$file = $_REQUEST['id'];
$row = $_REQUEST['id'];
   
if (!unlink($fold."ups/".$file))
  {
  echo ("Error deleting $file");
 
  }
else
  {
  $insert = "DELETE FROM uploads WHERE file_name='$row'";
  $this->db->query($insert);
  echo ("Deleted $file");
  
   header(sprintf('Location: %s', $url));
  }
     
    }
echo '<div class="alert alert-danger">Selain dari pengguna asli tidak diizinkan.</div>';  
?>
	