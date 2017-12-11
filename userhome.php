<?php
  require_once("auth.php");
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
        <a href="userhome.php"> 			User Ven 			</a>
        <a href="staffhome.php"> 			Staff Ven 			</a>
        </h3>
        <ul>
            <br>
</div>
<br>

<h1><center>Welcome!<center></h1>
<hr>

    <table cellpadding="10">
      <tr><th>Event Name</th><th>Venue</th><th>Date</th></tr>
      <?php foreach ($result as $item): ?>
        <tr>
          <td> <?php echo $item['event_name']; ?></td>
          <td><?php echo $item['venue']; ?></td>
          <td><?php echo $item['date']; ?></td>
          
        </tr>
      <?php endforeach; ?>

    </table>

</body>
</html>
