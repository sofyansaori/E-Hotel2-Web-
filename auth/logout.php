<?php 
 
session_start();
session_destroy();
 
 echo "<script>
             alert('Logout Berhasil');
             window.location.href='../index.php';
              </script>";

?>