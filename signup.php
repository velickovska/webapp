<!DOCTYPE html>
<html>

<head>

<title>Sign Up</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
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

  <div class="container">

  <div class="menu">

    </div>


     <div class="col-md-6 offset-md-3 mt-5">
        
        <form accept-charset="UTF-8" action="https://getform.io/f/d709b72b-d30b-4316-9cc1-4d1d33778a8b" method="POST" enctype="multipart/form-data" target="_blank">
          
          <div class="form-group">
            <label for="exampleInputName">Name</label>
            <input type="text" name="name" class="form-control" id="exampleInputName" placeholder="Enter your name" required="required">
          </div>
          <div class="form-group">
            <label for="exampleInputName">Last Name</label>
            <input type="text" name="name" class="form-control" id="exampleInputName" placeholder="Enter your last name" required="required">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1" required="required">Email address</label>
            <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
          </div>

          <div class="form-group">
            <label for="exampleFormControlSelect1">Favourite Platform</label>
            <select class="form-control" id="exampleFormControlSelect1" name="platform" required="required">
              <option>Github</option>
              <option>Gitlab</option>
              <option>Bitbucket</option>
            </select>
          </div>
          <hr>
          <div class="form-group mt-3">
            <label class="mr-2">Upload your profile picture:</label>
            <input type="file" name="file">
          </div>
          <hr>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
        </div>
  </body>
</html>
