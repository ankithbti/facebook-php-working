<?php
  session_start();
	session_destroy();
  header("Location: http://www.fitied.com/facebook-php-sdk/examples/login.php");
?>