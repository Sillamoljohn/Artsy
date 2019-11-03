<?php
 session_start();
 //echo "user".$_SESSION['user'];
 //if(session_is_registered('txt_username')){
 session_unset();
 session_destroy();
 header('location:index.php');
 //}// else {
 //   echo "session not set";
 //}
?>