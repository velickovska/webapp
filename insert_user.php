<html>

<head>

    <meta charset="utf-8">
</head>

</html>

<?php


include("includes/connection.php");


if(isset($_POST["sign_up"]))  
{
    $ime =  $_POST["ime"];
    $prezime =  $_POST["prezime"];
    $username = $_POST["username"];
    $email = $_POST["email"]  ;
    $tel_br = $_POST["phone"]  ;
    $drzava = $_POST["country"]  ;
    $grad =  $_POST["state"]  ;
    $posts = "no";
    $password = $_POST["pass"]  ;
    $opis =  $_POST["opis"];
    

    if(strlen($password) < 8)
    {
        echo"<script charset=\"utf-8\"> alert('Лозинката мора да биде долга најмалку 8 знаци'); history.back();</script>";
        exit();
    }

    $check_email = "select * from user where email='$email'";
    $run_email = mysqli_query($conn, $check_email);
    $check = mysqli_num_rows($run_email);
    if($check == 1)
    {
        echo"<script charset=\"utf-8\"> alert('Е-поштата веќе постои. \nВе молиме обидете се повторно'); history.back();</script>";
        exit();
        
    }

    $check_user = "select * from user where username='$username'";
    $run_user = mysqli_query($conn, $check_user);
    $check2 = mysqli_num_rows($run_user);
    if($check2 == 1)
    {
        echo"<script charset=\"utf-8\"> alert('Корисничкото име веќе постои. \nВе молиме обидете се повторно'); history.back();</script>";
        exit();
        
    }

    $rand = rand(1, 5);
    $profilna = "images/user" . $rand . ".png";

    $salt1 = "ap3gmh*!";
    $salt2 = "o_7p@&";

    $token = hash('ripemd128',"$salt1$password$salt2",FALSE);

    $insert = "insert into user (ime, prezime, username, password, email, telbr, grad, drzava, profile_pic, opis, posts) 
    values ('$ime', '$prezime', '$username','$token', '$email','$tel_br','$grad','$drzava','$profilna','$opis','$posts')";
    //$query = mysqli_query($conn, $insert);

    if (!mysqli_query($conn, $insert)) 
    {
    
   echo"<script charset=\"utf-8\"> alert('Неуспешна регистрација.\n Ве молиме обидете се повторно.'); history.back();</script>";
        
        
    }
    else
    {
        
        echo"<script charset=\"utf-8\"> alert('Успешна регистрација!')</script>";
        echo"<script charset=\"utf-8\"> window.open('login.php','_self')</script>";
        
        
    }

}
?>