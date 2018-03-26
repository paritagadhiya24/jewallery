<?php
   session_start();
   unset($_SESSION['username']);
//   echo "hi";die;
   if(session_destroy()) {
      header("Location:loginform.php");
   }
?>

