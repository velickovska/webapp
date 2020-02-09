<!DOCTYPE html>
<html>

<head>
    <title>Регистрација</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" type="text/css" href="style/style_header.css" />
    <link rel="stylesheet" href="style/bootstrap.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <!---------------------mesto na ziveenje------------------>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="includes/countrystate.js"></script>
    <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">

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
      {
    
      ?>

    <div class="col-md-6 offset-md-3 mt-5">
        <form action="insert_user.php" method="post" accept-charset="utf-8">
            <div class="form-group">
                <label for="exampleInputName">Име</label>
                <input type="text" name="ime" class="form-control" id="exampleInputName"
                    placeholder="Внесете го Вашето име" required="required">
            </div>
            <div class="form-group">
                <label for="exampleInputName">Презиме</label>
                <input type="text" name="prezime" class="form-control" id="exampleInputLastName"
                    placeholder="Внесете го Вашето презиме" required="required">
            </div>
            <div class="form-group">
                <label for="exampleInputName">Корисничко име</label>
                <input type="text" name="username" class="form-control" id="exampleInputUserName"
                    placeholder="Креирајте корисничко име" required="required">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1" required="required">Е-пошта</label>
                <input type="email" name="email" class="form-control" id="exampleInputEmail1"
                    aria-describedby="emailHelp" placeholder="Внесете ја Вашата електронска пошта">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1" required="required">Лозинка</label>
                <div class="row">
                    <div class="col-8">
                        <input type="password" name="pass" class="form-control" id="myInput"
                            aria-describedby="emailHelp">
                    </div>
                    <div class="col-4">
                        <input type="checkbox" onclick="Lozinka()">Прикажи лозинка
                        <script>
                        function Lozinka() {
                            var x = document.getElementById("myInput");
                            if (x.type === "password") {
                                x.type = "text";
                            } else {
                                x.type = "password";
                            }
                        }
                        </script>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1" required="required">Телефонски број</label>
                <input type="tel" id="phone" class="form-control" name="phone" pattern="(07)\d-[0-9]{3}-[0-9]{3}"
                    required="required" placeholder="Внесете го Вашиот телефонски број">
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect1">Место на живеење</label>
                <div class="row">
                    <div class="col-6">
                        <select class="form-control countries order-alpha presel-byip" id="countryId" name="country"
                            required="required">
                            <option value="">Држава</option>
                        </select>
                    </div>
                    <div class="col-6">
                        <select class="form-control states order-alpha" id="stateId" name="state" required="required">
                            <option value="">Општина</option>
                        </select>
                    </div>
                </div>
                </select>
            </div>
            <div class="form-group">
                <label for="exampleInputName">Опис </label>
                <textarea name="opis" class="col-12" rows="3"
                    placeholder="Внесете краток опис (незадолжително)"></textarea>
            </div>
            <div class="form-group">
                <a style="text-decoration: none;float: right;color: #187fab;" data-toggle="tooltip" title="Signin"
                    href="login.php">Веќе имате профил? Најавете се.</a><br><br>
                <button id="signup" name="sign_up" type="submit" class="btn btn-primary">Регистрирај се</button>

        </form>
    </div>
    </div>
    <?php
      }
      else
      {
          header("Location: main.php");
      }
      ?>
</body>




</html>