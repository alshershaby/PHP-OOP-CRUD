<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>records</title>
  </head>
  <body>
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-5">
                <h1 class="text-center"> PHP OOP CRUD</h1>    
            </div>
        </div>
        <div class="row">
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Mobile</th>
                    <th>Address</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
               
                <?php
                include 'model.php';
                $model = new Model();
                $rows = $model->fetch();
        
                $i = 1 ;
                if(!empty($rows)){
                    foreach($rows as $row){
                ?>
                <tr>
                    <td><?php echo $i++;  ?></td>
                    <td><?php echo $row['Name'];  ?></td>
                    <td><?php echo $row['Email'];  ?></td>
                    <td><?php echo $row['Mobile'];  ?></td>
                    <td><?php echo $row['Address'];  ?></td>
                    <td> 
                        <a href=" read.php?id= <?php echo $row['ID']; ?> " class ="badge badge-info"> Read</a>
                        <a href=" delete.php?id= <?php echo $row['ID']; ?> " class ="badge badge-danger">Delete</a>
                        <a href=" edit.php?id= <?php echo $row['ID']; ?> " class ="badge badge-success">Edit</a>
                    </td>
                </tr>
                <?php
                    }
                }else{
                    echo "<div class='alert alert-danger py-1 my-2'>no data found</div>";
                }
                ?>
            </tbody>
        </table>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>