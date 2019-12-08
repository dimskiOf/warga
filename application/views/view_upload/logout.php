<?php
session_destroy();
echo '<script>alert("terimakasih");</script>';
redirect(base_url().'layanan', 'refresh');
?>