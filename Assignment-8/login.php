<?php 
include 'db.php';
include 'function.php';
session_start();
if(isset($_SESSION['status']))
{
	header('location:dashboard.php');
}
if(isset($_POST['submit'])){
 
  $email=$_POST['email'];
  $password=$_POST['password'];
 
  if(empty($email) && empty($password)){
    $password=md5($_POST['password']);
    $errorMessage=' <li class="list-group-item list-group-item-warning">Please enter your username ans password</li>';
  }else{
    login($email,$password);
  }

  

}


?>


<!doctype html>
<html lang="en">
  <head>
    <title>Insert Data</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    <div class="container bg-warning">
        <h1 class="text-center">Registration Form</h1>
    </div>
      <div class="d-flex justify-content-center">
       <form action=""method="post">
              
             
              
              <div class="form-group">
                  <label for="email">Email</label>
                  <input type="text" class="form-control" id="email"name="email" placeholder="Enter your Email">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password"name="password" class="form-control" id="username" placeholder="Enter your Password">
                  </div>
              <button name="submit" type="submit" class="btn btn-primary">Submit</button><br>
            <span><a href="login.php"class="btn btn-success">Login</a></span>  
            </form>
            
           
      </div>
     
      <div class="container ">
      <div class="col-md-12">
      <?php 
              if(isset($successMessage)){
                echo $successMessage;
              }
              ?>
              <?php
               if(isset($errorMessage)){
                echo $errorMessage;
              }
              ?>
      </div>
      </div>
     
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>