<?php
  require_once("connection.php");
  $event_name = $_POST['event_name'];
  $venue = $_POST['venue'];
  $date = date("Y-m-d", strtotime($_POST['date']));
  $qry = "INSERT INTO `wicked` (`event_name`, `venue`, `date`, `id`) VALUES ('$event_name', '$venue', '$date', NULL)";

  $result = mysqli_query($bd, $qry);

  if($result) {
    header("location: staffhome.php");
  }else{
    die("Query Failed");
  }


 ?>
