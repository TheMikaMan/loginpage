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



?>

