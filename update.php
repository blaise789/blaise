

<?php

include 'connect.php';


$id=$_GET['updateid'];
$sql="SELECT  * from users  where id=$id";

$result=mysqli_query($con,$sql);

$row=mysqli_fetch_assoc($result);
$name=$row['name'];
$email=$row['email'];
$mobile=$row['mobile'];
$password=$row['password'];
// on submitting from the form  then



if(isset($_POST['submit'])){
  
// an sumbit from the  input form below
  $name=$_POST['name'];
  $email=$_POST['email'];
  $mobile=$_POST['mobile'];
  $password=$_POST['password'];

  $sql="UPDATE users set  id=$id,name='$name', email='$email',password='$password',mobile=$mobile where id=$id";

  $result=mysqli_query($con,$sql);  
  if($result){
    header('location:display.php');
  }
  else{
    echo 'Error:',$sql.'<br>'.$conn -> error;
}
$conn->close();
//   else{
//     // tom mean that there is an error in the connection
//     die(mysqli_err($con));
//   }


}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
  <h2>Update form</h2>
  <form  method="POST" action="">
    <div class="mb-3 mt-3">
      <label >Name:</label>
      <input type="text" class="form-control"  placeholder="Enter Your name"  value= " <?php echo $name; 
      ?> "
      autocomplete="off" name="name">
    </div>
    <div class="mb-3" >
      <label>Email:</label>
      <input type="email" class="form-control" placeholder="Enter your email"autocomplete="off" 
      value=<?php
       echo     $email;
     ?> name="email">
    </div>
    <div class="mb-3">
      <label >Mobile Number:</label>
      <input type="number" class="form-control" placeholder="Enter your mobile number"autocomplete="off" value=<?php 
      echo $mobile;
       ?> name="mobile" />
    </div>
    <div class="mb-3">
      <label >Password:</label> 
      <input type="password" class="form-control" placeholder="Enter password"autocomplete="off"  value="<?php 
       echo  $password; 
       ?>"
      name="password">
    </div>

   
    <div class="form-check mb-3">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="remember"> Remember me
      </label>
    </div>
    <button type="submit" name="submit" class="btn btn-primary">Update</button>
  </form>
</div>

</body>
</html>
  

  