<!DOCTYPE html>
<html>

<head>
    <?php
    include("includes/connection.php");
    $username = $_GET['username'];
            $sql = "SELECT * from user where username = '$username'";
            if ($result = mysqli_query($conn, $sql)) {
                while ($row = $result -> fetch_row()) {

    $ime = $row[1];
    $prezime= $row[2];
    $opstina = $row[7] ;
    $drzava = $row[8] ;
    $opis= $row[10];
    $slika= $row[9];
                }
            }
?>
    <title><?php echo $ime . " " . $prezime ?></title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" type="text/css" href="style/style_header.css" />
    <link rel="stylesheet" href="style/bootstrap.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


</head>

<body>
    <?php 
        include("includes/header.php"); 
        
        if(!isset($_SESSION['user']) || empty($_SESSION['user']))
        {
            header("Location:main.php");
        }
        else
        {
            
    ?>
    <div class="container">
        <br>
        <br>
        <div class="row">
            <div class="col-3 offset-2">
                <img src="<?php echo $slika ?>" style="max-width:100%">
            </div>
            <div class="col-7">
                <br>
                <h1> <?php echo $ime . " " . $prezime ?> </h1>
                <p> <?php echo "@" . $username ?></p> <br>
                <h3>
                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                    <?php echo  $opstina . ", " . $drzava ?>
                </h3>
            </div>
            <div class="col-2">

            </div>

        </div>
        <br>

        <div class="row">
            <div class="col-8 offset-2">
                <h3> Опис </h3>
                <p class="lead"> <?php echo $opis?> </p>
            </div>
            <div class="col-2">
            </div>
        </div>

        <?php

  }


        
        ?>


</body>

</html>