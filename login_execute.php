<?php
  //start session
  session_start();

  require_once('connection.php');

  //store error in an Array
  $errmsg_arr = array();
  //flag to store whether the error exists
  $errflag = false;

  $username = $_POST['username'];
  $password = $_POST['userpass'];

  if($username == ''){
    $errmsg_arr[] = 'Username Missing!';
    $errflag = true;
  }
  if($password == ''){
    $errmsg_arr[] = 'Password Missing!';
    $errflag = true;
  }

  if($errflag){
    $_SESSION['ERRMSG_ARR'] = $errmsg_arr;
    session_write_close();
    header("location: userlogin.php");
    exit();
  }

  $qry = "SELECT * FROM user WHERE username='$username' AND password='$password'";
  $result = mysqli_query($bd, $qry);

  if($result) {
    if(mysqli_num_rows($result) > 0){
      session_regenerate_id();
      $member = mysqli_fetch_assoc($result);
      $_SESSION['SESS_UNAME'] = $member['username'];
      session_write_close();
      header("location: userhome.php");
      exit();
    }else{
      $errmsg_arr[] = 'username or password not correct';
      $errflag = true;
      if($errflag){
        $_SESSION['ERRMSG_ARR'] = $errmsg_arr;
        session_write_close();
        header("location: userlogin.php");
        exit();
      }
    }
  }else{
    die("Query Failed");
  }

 ?>
