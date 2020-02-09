<!DOCTYPE html>
<html>

<head>
    <title>Home Page</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link href="style/style.css" rel="stylesheet">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

</head>


<body>

    <style>
    .navbar-brand>img {
        max-height: 100%;
        height: 100%;
        -o-object-fit: contain;
        object-fit: contain;
    }
    </style>
    <div class="container-fluid">
        <div class="row" style="background-color: #1a2b42 ;">
            <div class="col-8 offset-2">
                <nav class="navbar navbar-icon-top navbar-expand-lg navbar-dark navbar-expand-lg static-top"
                    style="background-color: #1a2b42 ;">
                    <a class="navbar-brand" href="#">
                        <img src="images/logo.png"></a>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="#">
                                    <i class="fa fa-home"></i>
                                    Home

                                </a>
                            </li>

                        </ul>


                        <ul class="navbar-nav ">
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <i class="fa fa-bell">
                                        <span class="badge badge-info">11</span>
                                    </i>
                                    Interested
                                </a> </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <i class="fa fa-envelope-o">
                                        <span class="badge badge-danger">11</span>
                                    </i>
                                    Messages
                                </a>
                            </li>
                            <li class="nav-item dropdown">
                                <!--<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fa fa-user"></i>
                                    Account
                                </a> -->


                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                    <i class="fa fa-user"></i>Профил </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                </div>
                            </li>


                        </ul>

                    </div>
                </nav>
            </div>
        </div>
</body>

</html>