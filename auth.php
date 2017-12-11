<?php
	//Start session
	session_start();
	//Check whether the session variable SESS_UNAME is present or not
	if(!isset($_SESSION['SESS_UNAME']) || (trim($_SESSION['SESS_UNAME']) == '')) {
		header("location: index.php");
		exit();
	}
?>
