<html>

<head>

    <meta charset="utf-8">
</head>

</html>

<?php


include("includes/connection.php");
if(isset($_POST['login']))
{

  $user = $_POST['username'];
  $pass = $_POST['password'];

  $check_email = "select * from user where email='$user'";
    $run_email = mysqli_query($conn, $check_email);
    $check = mysqli_num_rows($run_email);

  $check_user = "select * from user where username='$user'";
    $run_user = mysqli_query($conn, $check_user);
    $check2 = mysqli_num_rows($run_user);  

  if($check2 ==1 || $check ==1)
    {
      $salt1 = "ap3gmh*!";
      $salt2 = "o_7p@&";
      $token = hash('ripemd128',"$salt1$pass$salt2");
        

        if($check2==1)
        {$result = $run_user;}
        else
        {$result = $run_email;}

        $row = mysqli_fetch_assoc($result); 
        if(($row["password"]) == $token)
        {
          session_start();
          $_SESSION['user'] = $row["username"];
          $_SESSION['ime'] = $row["ime"];
          $_SESSION['prezime'] = $row["prezime"];
          
          header("Location: header.php");
        }
        else
        {
          echo"<script charset=\"utf-8\"> alert('Погрешна лозинка'); history.back();</script>";
        }
      
     }
  
    else
    {
      
      ?>
<script charset="utf-8">
alert("Не постои корисничкото име или е-пошта. \nВе молиме обидете се повторно.");
history.back();
</script>
<?php
      
    }  
  }

  
?>