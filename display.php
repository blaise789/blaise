<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud operation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<?php 
include 'connect.php'



?>


    <div class="container">
        <button class="btn btn-primary my-5">
<a href="user.php " class="text-light"> Add user</a>           
        </button>
    </div>
    <table class="table ">
        <thead>
     <tr>

   <th scope="col"> SL no</th>
    <th scope="col">Name </th>
    <th scope="col"> Email</th>
    <th scope="col"> Mobile </th>
    <th scope="col">password</th>
    <th scope="col"> Operations
    </th>


    </tr>
      
        </thead>
        <tbody>  
<?php 

 $sql="select * from `users` "  ;
 $result=mysqli_query($con,$sql);

 if($result){

    
    while($row=mysqli_fetch_assoc($result)){
        $id=$row['id'];
           $name=$row['name']; 
           $password=$row['password'] ;
           $email=$row['email'];
           $mobile=$row['mobile'];
       echo "<tr>
    <th scope='row'>$id</th>
      
  <td>$name</td>
    <td>$email</td>
    <td>$mobile</td>
    <td>$password </td> 
    <td><button class='btn btn-primary' > <a href='update.php? updateid=$id' class=' text-light'>Update</a></button>
<button class='btn btn-danger '> <a href='delete.php?
deleteid=$id

' class='text-light'>Delete</a></button></td>

</tr>    
";





  // we import the data fetched into  the $row folder

  // it is taken as an associative array


    }
  
}
?>



    </table>
 
    <div class="user">

    <div class="user ">
  <a href="pdf.php" >Export to PDF <?php echo '<i class="fas fa-book"></i>';?></a>
  </div>
    </div>


</body>
</html>