<?php
 session_start();
include 'db.php';
include 'function.php';
include 'header.php';
if(!isset($_SESSION['status'])){
header("location:login.php");
}





?>


        <div class="container">
        <div class="row">
        <div class="col-md-12">
        <table class="table">
  <thead>
  
    <tr>
      <th scope="col">Slno</th>
      <th scope="col">name</th>
      <th scope="col">username</th>
      <th scope="col">phonenumber</th>
      <th scope="col">email</th>
      
    </tr>
  </thead>
  <?php 
$sql="SELECT * FROM inserts";
$stmt=$pdo->prepare($sql);
$stmt->execute();

while($datarows=$stmt->fetch()){

?>
  <tbody>
    <tr>
      <td><?= $datarows['id']; ?></td>
      <td><?= $datarows['name']; ?></td>
      <td><?= $datarows['username']; ?></td>
      <td><?= $datarows['phonenumber']; ?></td>
      <td><?= $datarows['email']; ?></td>

      
    </tr>
   
    
  </tbody>
<?php }
?> 
    
</table>
        </div>
        </div>
        </div>
        </div>
      </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    
  </body>
</html>