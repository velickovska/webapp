<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <?php 
    
    $zivotno = $_GET['zivotno'];
    $zivotno_id = $_GET['ID'];
    ?>
    <title>
        <?php
        if($zivotno == "kuce")
        echo "Куче";
        else
        echo "Маче";
    ?>
    </title>

    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" type="text/css" href="style/style_header.css" />
    <link rel="stylesheet" href="style/bootstrap.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>


</head>

<body>
    <?php 
        include("includes/header.php"); 
        include("includes/connection.php");
        if($zivotno=="kuce")
        $sql = "SELECT * from kuce where ID='$zivotno_id'";
        else
        $sql = "SELECT * from mace where ID='$zivotno_id'";
        if ($result = mysqli_query($conn, $sql)) 
        {
        
        while ($row = mysqli_fetch_row($result)) 
        {
          
           $vozrast = $row[1];
           $pol = $row[2];
           $chipirano = $row[3];
           $vakcinirano = $row[4];
           $user_username = $row[5];
           $opstina = $row[6];
           $drzava = $row[7];
           $slika = $row[8];
           $opis = $row[9];
           $data_oglas = $row[10];
           $vdomeno = $row[11];

           if($zivotno=="kuce")
           {
               $rast = $row[12];
           }

           ?>
    <div class="container">
        <br>
        <div class="row">
            <div class="col-4 offset-2 ">
                <img style="max-width: 100%" src=" <?php echo $slika; ?> " style=" ">
            </div>
            <div class="col-4">

                <h5 class="opis-glavno"> Пол</h5>

                <p class="opis"> <?php if($pol=='z')
                echo "Женско";
                else
                echo "Машко"; ?> </p>
                <hr>

                <h5 class="opis-glavno"> Возраст</h5>

                <p class="opis"> <?php if($vozrast=='0')
                echo "Помало од 6 месеци";
                else if($vozrast=='1')
                echo "Од 6 месеци до 1 година"; 
                    else if($vozrast=='2')
                    echo "Од 1 година до 3 години";
                    else
                    echo "Над 3 години"; ?>
                </p>
                <hr>

                <h5 class="opis-glavno"> Место</h5>

                <p class="opis">
                    <?php echo $opstina . ", " .  $drzava;?>
                </p>
                <hr>

                <?php 
                if($zivotno=="kuce")
                {
                    ?>
                <h5 class="opis-glavno"> Раст</h5>
                <p class="opis">
                    <?php  if($rast=="mal")
                echo "Мал";
                else if($rast=="sreden")
                echo "Среден";
                else 
                echo "Голем";?>
                </p>
                <hr>
                <?php } ?>


                <h5 class="opis-glavno"> Вакцинирано</h5>

                <p class="opis"> <?php if($vakcinirano=='da')
                echo "Да";
                else
                echo "Не"; ?> </p>
                <hr>

                <h5 class="opis-glavno"> Чипирано</h5>

                <p class="opis"> <?php if($chipirano=='da')
                echo "Да";
                else
                echo "Не"; ?> </p>
                <hr>


            </div>
            <div class="col-2"> </div>
        </div>






        <div class="row">
            <div class="col-8 offset-2">
                <br>
                <h5 class="opis-glavno"> Опис</h5>

                <p class="opis">
                    <?php echo $opis ;?>
                </p>
                <hr>
            </div>
            <div class="col-2">
            </div>

        </div>


    </div>


    <?php
           
        }
    }

    
        if(!isset($_SESSION['user']) || empty($_SESSION['user']))
        {

        }
        else if($user_username == $user)
        {

        }
        else
        {

        }
        ?> </body>

</html>