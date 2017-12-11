<?php
	//Start session
	session_start();
	//Check whether the session variable SESS_UNAME is present or not
	if(!isset($_SESSION['SESS_STAFF']) || (trim($_SESSION['SESS_STAFF']) == '')) {
		header("location: index.php");
		exit();
	}
?>
