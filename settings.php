<!DOCTYPE html>
<html>

<head>
    <title>Поставки</title>
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
        if(!isset($_SESSION['user']) || empty($_SESSION['user']))
        {}
        ?>


</body>

</html>