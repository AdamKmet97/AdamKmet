<?php
require_once("authstaff.php");
require_once("connection.php");

$qry = "SELECT * FROM wicked";
$result = mysqli_query($bd, $qry);

?>

