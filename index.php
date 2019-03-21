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
    <div>Welcome: <?php echo $row['gbr']; ?></div>
	 <div class="reminder">
    <p><a href="logout.php">Log out</a></p>
  </div>
</div>
</body>
</html>
