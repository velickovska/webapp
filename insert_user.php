<?php
include("includes/connection.php");

if(isset($POST["sign_up"]))
{
    $ime = htmlentities(mysqli_real_escape_string($conn,$POST["ime"]));
    $prezime = htmlentities(mysqli_real_escape_string($conn,$POST["prezime"])) ;
    $username = htmlentities(mysqli_real_escape_string($conn,$POST["username"]));
    $email = htmlentities(mysqli_real_escape_string($conn,$POST["email"]));
    $tel_br = htmlentities(mysqli_real_escape_string($conn,$POST["phone"]));
    $drzava = htmlentities(mysqli_real_escape_string($conn,$POST["country"]));
    $grad = htmlentities(mysqli_real_escape_string($conn,$POST["state"]));
    $posts = "no";
    $password = htmlentities(mysqli_real_escape_string($conn,$POST["password"]));
    $opis = htmlentities(mysqli_real_escape_string($conn,$POST["opis"]));
    

    if(strlen($password) < 8)
    {
        echo"<script> alert('Лозинката мора да биде долга најмалку 8 знаци')</script>";
        exit();
    }

    $check_email = "select * from user where email='$email'";
    $run_email = mysqli_query($check_email);
    $check = mysqli_num_rows($run_email);
    if($check == 1)
    {
        echo"<script> alert('Е-поштата веќе постои, Ве молиме обидете се повторно')</script>";
        echo"<script> window.open('signup.php','_self')</script>";
        exit();
    }
    $rand = rand(1, 5);
    $profilna = "images/user" . $rand . ".png";

    $salt1 = "ap3gmh*!";
    $salt2 = "o_7p@&";

    $token = hash('ripemd128',"$salt1$password$salt2",FALSE);

    $insert = "insert into user (ime, prezime, username, password, telbr, grad, drzava, profile_pic, opis, posts) 
    values ('$ime', '$prezime', '$username','$token','$tel_br','$grad','$drzava','$profilna','$opis','$posts')";
    $query = mysqli_query($conn, $insert);

    if($query)
    {
        echo"<script> alert('Успешна регистрација!')</script>";
        echo"<script> window.open('signin.php','_self')</script>";
        
    }
    else
    {
        echo"<script> alert('Неуспешна регистрација.\n Ве молиме обидете се повторно.')</script>";
        echo"<script> window.open('signup.php','_self')</script>";
        
    }

}
?>