<?php
  //Start session
	session_start();
	//Unset the variables stored in session
	unset($_SESSION['SESS_STAFF']);

?>

<html>
<head>
  <title>Staff Login </title>
</head>
<body>
<style>
    @import "css/main.css"
</style>
<a href="index.php">Back</a><br>
<h1 align = "center"><img src = "images/wicked_title.jpg" alt=" Wicked" height= "300" width="1500" />	</h1>

  <h1><center>Staff Login</center></h1>
  <hr>
  <form name="staffloginform" action="login_execute_staff.php" method="post">
    <table cellpadding="10">
      <tr>
        <td>
          <?php
            if( isset($_SESSION['ERRMSG_ARR']) && is_array($_SESSION['ERRMSG_ARR']) && count($_SESSION['ERRMSG_ARR']) >0 ) {
              echo '<ul>';
              foreach($_SESSION['ERRMSG_ARR'] as $msg) {
                echo '<li>',$msg,'</li>';
              }
              echo '</ul>';
              unset($_SESSION['ERRMSG_ARR']);
            }
            ?>
        </td>
      </tr>
      <tr>
        <th>Username</th><td><input type="text" name="username"></td>
      </tr>
      <tr>
        <th>Password</th><td><input type ="password" name="userpass"></td>
      </tr>
      <tr>
        <td colspan="2"><center><input type="submit" value="login" name="login">
        </center></td>
      </tr>
    </table>
  </form>
</body>
</html>
