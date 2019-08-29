<?php 

session_start();
include 'db.php';
include 'function.php';
include 'header.php';


 
if(isset($_POST['update'])){
    $name=$_POST['name'];
    $username=$_POST['username'];
    $phonenumber=$_POST['phonenumber'];
    $email=$_SESSION['email'];

    $sql="UPDATE inserts SET name='$name',username='$username',phonenumber='$phonenumber' WHERE email='$email'";
    $stmt=$pdo->prepare($sql);
    $execute=$stmt->execute();
    if($execute){
       
        $success="Your data has been updated";
    }else{
        $error="Please try again";
    }
    
}

$sql="SELECT * FROM inserts  WHERE email='howlie360@gmail.com'";
 $stmt=$pdo->query($sql);
 $stmt->execute();
 while($datarows=$stmt->fetch()){


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row">
        <div class="col-md-12">
        <div class="card bg-info">
            <div class="cardbody">
            <p> Name: <?php echo $datarows['name'];?></p>
            <p> Email: <?php echo $datarows['username'];?></p>
            
            <p> Email: <?php echo $datarows['phonenumber'];?></p>
            </div>
        </div>
        <form method="post" action="myprofile.php">
  <div class="form-group">
    <label>Name</label>
    <input type="text"name="name" class="form-control"  aria-describedby="emailHelp" value="<?php echo $datarows['name'];  ?>">
    <label>Username</label>
    <input type="text" name="username" class="form-control mt-2"  value="<?php echo $datarows['username'];  ?>">
    <label>PhoneNumber</label>
   
    
    
    <input type="number"name="phonenumber" class="form-control mt-2"  value="<?php echo $datarows['phonenumber'];  ?>">
    
    </div>
  
  
  <button type="submit"name="update" class="btn btn-primary">Update</button>
</form>
<?php  if(isset($success)){
    echo $success;
    }
    ?>
    <?php  if(isset($error)){
    echo $error;
    }
    ?> 
    <br>
</body>
<a href="password.php">Change your password</a>
        </div>
        </div>
    </div>
 <?php }?>

</html>