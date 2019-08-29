<?php 
if(isset($_POST['update'])){
    $currentpassword=$_POST['cupass'];
    $newpassword=$_POST['newpass'];
    $confirmpassword=$_POST['conpass'];

    if(empty($currentpassword)|| empty($newpassword || empty($confirmpassword) )){
        echo "All fields must be fulfilled";
    }elseif($currentpassword === false){
        echo 'Current Password is wrong';
    }elseif($newpassword != $confirmpassword){
        echo 'New password and confirm password dont match';
    }else{
        
    }
}



?>



<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      <div class="container">
          <div class="row">
          <div class="col-md-12">
          <div class="card">
              <div class="card-header text-center">
              Change your Password
              </div>
          </div>
          <form method="post" action="password.php">
          <div class="form-group">
            <label for="">Current Password</label>
            <input type="password" name="cupass" id="" class="form-control" placeholder="" >
            <label for="">New Password</label>
            <input type="password" name="newpass" id="" class="form-control" placeholder="" >
            <label for="">Confirm Password</label>
            <input type="password" name="conpass" id="" class="form-control" placeholder="" >
            <button class="btn btn-info mt-2" name="update">Update</button>
          </div>
          </form>
         
          </div>
          </div>
      </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>