<?php
  require_once("connection.php");

  $qry = "DELETE FROM `wicked` WHERE `wicked`.`id` =".$_GET['del']."";

  $result = mysqli_query($bd, $qry);

  if($result) {
    header("location: staffhome.php");
  }else{
    die("Query Failed");
  }


 ?>
