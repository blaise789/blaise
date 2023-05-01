<?php
include 'connect.php';
if(isset($_GET['deleteid']))
// we require the resources from the this url becuase the attaches itself to the header
{
$id=$_GET['deleteid'];

$sql="delete from `users` where id=$id";
$result=mysqli_query($con,$sql);
if($result)
{
    header('location:display.php');
    echo "Deleted  successFul ";
}
}

?>