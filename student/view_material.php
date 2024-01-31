
<?php

session_start();
$host = "localhost";
error_reporting(0);
$user = "root";
$password = "";
$db = "schoolproject";

$data = mysqli_connect($host, $user, $password, $db);
$sql="SELECT * FROM teacher";
$result=mysqli_query($data, $sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .content
        {
            margin-left: 25%;
        }
    </style>
</head>
<body>
<?php
include("studenthome.php");
?>
   
    <div class="content">
        <h1>View Materials</h1>
        <table class="table">
  <tbody>
    <tr>
      <th><a href="first_year.php">First year</a></th>
    </tr>
    <tr>
      <th><a href="second_year.php">second year</a></th>
    </tr>
    <tr>
      <th><a href="Third_year.php">Third year</a></th>
    </tr>
    <tr>
      <th><a href="Final_year.php">Final year</a></th>
    </tr>
  </tbody>
</table>
    </div>
</body>
</html>