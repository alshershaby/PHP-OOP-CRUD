<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>PHP CRUD</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>


    <div class="container">
    <div class="row">
        <div class="col-md-12 my-4">
        <h2 class="text-center">PHP OOP CRUD</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-md-5 mx-auto">
        <?php
        include "model.php";
          $model = new Model;
          $insert = $model->insert();
        ?>

        <form action="" method="post">
        <div class="form-group">
          <label for="">Name</label>
          <input type="text" class="form-control" name="name" id="name">
          <!-- <div class="alert alert-danger py-1 my-2">please enter valid name 5:12 char</div> -->
        </div>
        <div class="form-group">
          <label for="">Email</label>
          <input type="email" class="form-control"  name="email" id="email">
          <!-- <div class="alert alert-danger py-1 my-2">please enter valid Email</div> -->
        </div>
        <div class="form-group">
          <label for="">Mobile No</label>
          <input type="text" class="form-control" name="mobile" id="mobile">
          <!-- <div class="alert alert-danger py-1 my-2">please enter valid mobile Number</div> -->
        </div>
        <div class="form-group">
          <label for="">Address</label>
          <textarea name="address" id="" cols="" rows="3" class="form-control"></textarea>
        </div>
        <div class="form-group">
        <button class="btn btn-primary" type="submit" name="submit" id ="submit">Submit</button>
        </div>
        </form>
        </div>
    </div>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>
