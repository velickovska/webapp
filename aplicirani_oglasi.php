<!DOCTYPE html>
<html>

<head>
    <title>Аплицирани огласи</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" type="text/css" href="style/style_header.css" />
    <link rel="stylesheet" href="style/bootstrap.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

    <style>
    h1 {
        font-size: 20px;
        margin-top: 24px;
        margin-bottom: 24px;
    }
    </style>
</head>

<body>
    <?php 
        include("includes/header.php"); 
        include("includes/connection.php"); 
        if(!isset($_SESSION['user']) || empty($_SESSION['user']))
        {
            header("Location:main.php");
        }
        else
        {
            ?>
    <div class="container">
        <hr>
        <?php
        $br = 0;
        
        $sql = "SELECT zivotno_ID, zivotno FROM zainteresirani WHERE zainteresiran_ID='$user'";
        if ($result = mysqli_query($conn, $sql)) {

        while ($row = mysqli_fetch_row($result)) {
        $br = $br+1;
        if ($row[1] == "kuce")
        {
        $z= "kuce";
        $sql2 = "SELECT slika, user_username, opstina, drzava FROM kuce WHERE ID='$row[0]'";
        }
        else
        {
        $z= "mace";
        $sql2 = "SELECT slika, user_username, opstina, drzava FROM mace WHERE ID='$row[0]'";
        }
        $rez = mysqli_query($conn, $sql2);
        $zivotno = mysqli_fetch_row($rez);
        $slika = $zivotno[0];
        $user_dava = $zivotno[1];
        $mesto = $zivotno[2];
        $drzava = $zivotno[3];

        ?>
        <a href="zivotno.php?ID=<?php $row[0]?>&$zivotno=<?php $z ?>">
            <div class="row">
                <div class="col-3 offset-2">
                    <img src=" <?php echo $slika ?>">
                </div>
                <div class="col-7">
                    <h5> <?php echo $mesto . ", " . $drzava ?></h5>
                    <p> <?php echo $user_dava ?></p>
                </div>
            </div>
        </a>
        <hr>
        <?php
    
    }
    mysqli_free_result($result);
    }
    else
    { }
    if($br==0) {
        ?>
        <div class="col-10 offset-2 ">
            <p class="lead">
                Досега немате аплицирано за огласи.
            </p>
            <a href="main.php">
                <p class="lead"> Разгледајте огласи.</p>
            </a>
        </div>
        <hr>
        <?php
    }

    
        }
        ?>


</body>

</html>