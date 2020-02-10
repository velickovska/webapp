<!DOCTYPE html>
<html>

<head>
    <title>Petscue - вдомете животно</title>
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
        
        ?>
    <br>
    <div class="container">

        <form accept-charset="UTF-8" action="kreiraj_oglas.php" method="POST" enctype="multipart/form-data">
            <div class="row">
                <div class="col-4">
                    <select class="form-control input-md" name="zivotno" required="required" id="zivotno">
                        <option value="/">Животно</option>
                        <option value="mace">Маче</option>
                        <option value="kuce">Куче</option>
                    </select>
                </div>

                <div class="col-4">
                    <select class="form-control input-md" name="pol" required="required">
                        <option value="/">Пол</option>
                        <option value="m">Машки</option>
                        <option value="z">Женски</option>
                    </select>
                </div>
                <div class="col-4">
                    <select class="form-control input-md" name="vozrast" required="required">
                        <option value="/">Возраст</option>
                        <option value="0">Помало од 6 месеци</option>
                        <option value="1">Од 6 месеци до 1 година</option>
                        <option value="2">Од 1 година до 3 години</option>
                        <option value="3">Над 3 години</option>
                    </select>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-4">
                    <div class="checkbox">
                        <label><input type="checkbox" name="vakcinirano" value="ne">&nbsp;Вакцинирано</label>
                    </div>

                </div>
                <div class="col-4">
                    <div class="checkbox">
                        <label><input type="checkbox" name="chipirano" value="da">&nbsp;Чипирано</label>
                    </div>
                </div>
                <div class="col-4">
                    <button name="choice" type="submit" class="btn btn-dark btn-block">
                        Пребарувај
                    </button>
                </div>
            </div>

        </form>
        <hr>
        <br>
    </div>




    <?php
       if(!isset($_POST["choice"]))
       {

       }
       else
       {
        
    
       }
       ?>
</body>

</html>