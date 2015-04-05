<?php
require_once 'includes/connection.php';
require_once 'includes/functions.php';
sec_session_start();
  if(login_check($mysqli) == false)
   header('location:403.html');
?>