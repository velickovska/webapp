<html>

<head>

    <meta charset="utf-8">
</head>

</html>

<?php


include("includes/connection.php");
if(isset($_POST['login']))
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
  $salt1 = "ap3gmh*!";
  $salt2 = "o_7p@&";
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