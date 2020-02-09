<div class="container-fluid" style="background-color:#1a2b42">
    <div class="row">
        <div class="col-8 offset-2 navbarCustom">
            <nav class="navbar navbar-expand-sm navbar-custom bg-dark">
                <ul class="navbar-nav mr-auto">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCustom">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <a href="index.php" class="navbar-brand">Petscue</a>
                </ul>
                <span></span>
                <?php
            session_start();
            if(!isset($_SESSION['user']) || empty($_SESSION['user']))
            { ?>
                <ul class="navbar-nav ">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            Профил
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="login.php">Најави се</a>
                            <a class="dropdown-item" href="signup.php">Регистрирај се</a>

                        </div>
                    </li>
                </ul>
                <?php
            }
            else
            {
                $user = $_SESSION['user'];
                ?>
                <ul class="navbar-nav ">
                    <li class="nav-item">
                        <a class="nav-link" href="oglas.php">Креирај оглас</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            <?php echo $_SESSION["ime"] . " " . $_SESSION["prezime"];?>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="profil.php?username=<?php echo $user?>">Профил</a>
                            <a class="dropdown-item" href="oglasi.php">Огласи</a>
                            <a class="dropdown-item" href="aplicirani_oglasi.php">Аплицирани огласи</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="settings.php">Поставки</a>
                            <a class="dropdown-item" href="logout.php">Одјави се</a>
                        </div>
                    </li>
                </ul>

                <?php
            } ?>
            </nav>
        </div>
    </div>
</div>