<?php
include('include/dbcon.php');
include('include/session.php');

$result=mysqli_query($con, "select * from tb_log where id='$session_id'")or die('Error In Session');
$row=mysqli_fetch_array($result);

 ?>

<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="form-wrapper">
    <p>backend</p>
    <center><h3>Welcome: <?php echo $row['gbr']; ?> </h3></center>
	 <div class="reminder">
    <p><a href="logout.php">Log out</a></p>
  </div>
</div>

</body>
</html>
