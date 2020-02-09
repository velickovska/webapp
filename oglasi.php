<!DOCTYPE html>
<html>

<head>
    <title>Објавени огласи</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" type="text/css" href="style/style_header.css" />
    <link rel="stylesheet" href="style/bootstrap.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

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
            
            $br =0;
     
    $sql = "SELECT ID, slika, opstina, drzava FROM kuce WHERE user_username='$user'";
    if ($result = mysqli_query($conn, $sql)) {
        
        while ($row = mysqli_fetch_row($result)) {
            $br = $br+1;
        $slika = $row[1];
        $zivotno_ID =  $row[0];
        $mesto = $row[2];
        $drzava = $row[3];
        
        ?>
        <a href="zivotno.php?ID=<?php echo $zivotno_ID?>&zivotno=kuce">
            <div class="row">
                <div class="col-3 offset-2">
                    <img style="max-width: 100%" src=" <?php echo $slika ?>">
                </div>
                <div class="col-7">
                    <h3 style="color: #1a2b42"> Куче </h3>
                    <hr>
                    <h5 style="color: #4c5267">
                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                        <?php echo $mesto . ", " . $drzava ?></h5>

                </div>
            </div>
        </a>
        <hr>
        <?php
        
        }
        mysqli_free_result($result);
        }
$sql = "SELECT ID, slika, opstina, drzava FROM mace WHERE user_username='$user'";
    if ($result = mysqli_query($conn, $sql)) {
        while ($row = mysqli_fetch_row($result)) {
            $br = $br+1;
        $slika = $row[1];
        $zivotno_ID =  $row[0];
        $mesto = $row[2];
        $drzava = $row[3];
        
        ?>
        <a href="zivotno.php?ID=<?php echo $zivotno_ID?>&zivotno=mace">
            <div class="row">
                <div class="col-3 offset-2">
                    <img style="max-width: 100%" src=" <?php echo $slika ?>">
                </div>
                <div class="col-7">

                    <h3 style="color: #1a2b42"> Маче </h3>
                    <hr>
                    <h5 style="color: #4c5267">
                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                        <?php echo $mesto . ", " . $drzava ?></h5>


                </div>
            </div>
        </a>
        <hr>
        <?php
        
        }
        mysqli_free_result($result);
        }

        
        if ($br==0)
        
    {
        ?>
        <div class="col-10 offset-2 ">
            <p class="lead">
                Досега немате креирано оглас.
            </p>
            <p class="lead">
                <a href="oglas.php"> Креирајте оглас сега. </a>
            </p>

        </div>
        <hr>
        <?php
    }

    ?>
    </div> <?php
        }
        ?>




</body>

</html>