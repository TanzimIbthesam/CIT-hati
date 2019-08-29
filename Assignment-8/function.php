<?php 
include 'db.php';


 function checkEmail($validate_email){
     global $pdo;
     $sql="SELECT email from inserts WHERE email= :email";
    $stmt=$pdo->prepare($sql);
    $stmt->bindValue(":email",$validate_email);
    $stmt->execute();

    $count=$stmt->fetch();
    if($count>0){
      return true;
    }else{
      return false;
    }

  }
  function checkUsername($username){
    global $pdo;
    $sql="SELECT email from inserts WHERE username= :username";
   $stmt=$pdo->prepare($sql);
   $stmt->bindValue(":username",$username);
   $stmt->execute();

   $count=$stmt->rowCount();
   if($count>0){
     return true;
   }else{
     return false;
   }

 }
 function login($email,$password){
   global $pdo;
   $password=md5($_POST['password']);
   $sql="SELECT * FROM inserts WHERE email=:email AND password=:password LIMIT 1";
   $stmt=$pdo->prepare($sql);
   $stmt->bindValue(':email',$email);
   $stmt->bindValue(':password',$password);
  

   $stmt->execute();
   $result=$stmt->rowCount();

   if($result>0){
     header("location:dashboard.php");
     $_SESSION['status']='Yes';
     $_SESSION['SuccessMessage']='You are successfully loggedin';
     $_SESSION['email']=$email;
   }else{
     $_SESSION['ErrorMessage']='Your password or email is incorrect';
    header("location:login.php");
   }
 }


 
?>