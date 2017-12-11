<?php
require_once("authstaff.php");
require_once("connection.php");
$qry = "SELECT * FROM wicked";
$result = mysqli_query($bd, $qry);
?>
<!doctype html>
<html>
<html lang="en">
<head>

    <title> WICKED</title>
</head>
<body>


<style>
    @import "css/main.css"
</style>
<a href="index.php">logout</a><br>
<h1 align = "center"><img src = "images/wicked_title.jpg" alt=" Wicked" height= "300" width="1500" />	</h1>

<!-------create a button class-------->
<div class ="nav" align="center">
    <ul>

        <a href="index.html">			HOME			</a>
        <a href="faq.html">              FAQ				</a>

        <a href="staffhome.php"> 			Staff Ven 			</a>
        </h3>
        <ul>
            <br>
</div>
<br>

<h1><center>Welcome!<center></h1>
<hr>

<table cellpadding="10">
    <tr><th>Event Name</th><th>Venue</th><th>Date</th><th><th></tr>
    <?php foreach ($result as $item): ?>
        <tr>
            <td> <?php echo $item['event_name']; ?></td>
            <td><?php echo $item['venue']; ?></td>
            <td><?php echo $item['date']; ?></td>
            <td><?php echo "<a href=\"deleteitem.php?del=".$item['id']."\">delete</a>" ?></td>
        </tr>
    <?php endforeach; ?>
    <form name="addnew" method="post" action="addnewcol.php">
        <tr>
            <td></td>
            <td>
                <input type ="text" name="event_name" placeholder="Enter event name">
            </td>
            <td>
                <input type ="text" name="venue" placeholder="Enter venue">
            </td>
            <td>
                <input type = "text" name="date" placeholder="YYYY-MM-DD">
            </td>
            <td>
                <input type="submit" name="submit" value="Add new">
            </td>
        </tr>

</table>

</body>
</html>