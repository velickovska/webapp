<?php
require_once "dbconfig.php";
if(isset($_POST['submit']))
{
if(isset($_POST['username']) && isset($_POST['password']))
{
  $user = $_POST['username'];
  $pass = $_POST['password'];
  $query = "SELECT * FROM user WHERE username='$username'";
  $result = mysql_query($query);
  if(!$result) die ('You are not registered!');
  else {
  $row = mysql_fetch_row($result);
  $salt1 = "gmh*!";
  $salt2 = "op@&";
  $token = hash('ripemd128',"$salt1$pass$salt2");

  if($token == $row[4])
  {
    echo "Hi $row[1], you are now logged in as $row[1] $row[2]";
    session_start();
    $_SESSION['username'] = $row[3];
    $_SESSION['surname'] = $row[2];
    $_SESSION['firstname'] = $row[1];

    echo "<p><a href=main.php>Click here to continue</a></p>";
  }
  else
  die("Invalid username/password combination");
}
}
}
?>
