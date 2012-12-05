<?php
  session_start();
	session_destroy();
  header("Location: http://localhost/facebook_login/examples/login.php");
?>