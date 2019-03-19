<?php include('dbcon.php');?>
<html>
   <head>
      <title>Add New Record in MySQLi Database</title>
      <link rel = "stylesheet" type = "text/css" href = "style.css">
   </head>

   <body>
      <div id = "main">
         <form action = "" method = "post">
             <label>id :</label>
            <input type = "text" name = "id" id = "id" />
            <br />
            <label>Name :</label>
            <input type = "text" name = "gbr" id = "gbr" />
            <br />
             <input type = "text" name = "password" id = "password" />
            <br />
            <input type = "submit" value ="Submit" name = "submit"/>
            <br />
            <br />
         </form>
      </div>

       <?php
       if(isset($_POST["submit"])){
        require("dbcon.php");
       $id = $_POST['id'];
       $gbr = mysqli_real_escape_string($link, $_POST['gbr']);
       $password = $_POST['password'];
       $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        $sql = "INSERT INTO tb_log (id, gbr, ww) VALUES ("", "$gbr", "$hashed_password")";

       if (mysqli_query($conn, $sql)) {
         echo "<script type= 'text/javascript'>alert('Product succesvol toegevoegd!');</script>";
        } else {
        echo "Error: " . $sql . "" . mysqli_error($conn);
        }
    $conn->close();
    }

       ?>

