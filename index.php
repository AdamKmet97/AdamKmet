<?php
  //Start session
	session_start();
	//Unset the variables stored in session
	unset($_SESSION['SESS_UNAME']);
  unset($_SESSION['SESS_STAFF']);
?>

<html>
<head>
  <title> Home </title>
</head>
<body>
  <h1><center>Choose user Type</center></h1>
  <hr>
  <table cellpadding="50" align="center">
    <tr>
      <td>
        <a href="userlogin.php">Login as User</a>
      </td>
      <td>
        <a href="stafflogin.php">Login as Staff</a>
      </td>
    </tr>
  </table>
</body>
</html>
