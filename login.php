<html>

<head>

    <meta charset="utf-8">
</head>

</html>


<?php


include("includes/connection.php");
if(isset($_POST['login']))
{
$name = $_POST['username'];
$pass = $_POST['password'];
$salt1 = "ap3gmh*!";
$salt2 = "o_7p@&";
$c_pass = hash('ripemd128',"$salt1$pass$salt2");

if (filter_var($name, FILTER_VALIDATE_EMAIL))
{

$query = mysqli_query($conn,"SELECT * FROM `user` WHERE `email` = '$name' AND `password` = '$c_pass'");
} 
else 
{
$query = mysqli_query($conn,"SELECT * FROM `user` WHERE `username` = '$name' AND `password` = '$c_pass'");
}

if($query)
{
session_start();
          $_SESSION['user'] = $row["username"];
          $_SESSION['ime'] = $row["ime"];
          $_SESSION['prezime'] = $row["prezime"];
          
          header("Location: main.php");
} 
else 
{
echo"<script charset=\"utf-8\"> alert('Погрешни информации'); history.back(); </script>";
}

  }

  
?>