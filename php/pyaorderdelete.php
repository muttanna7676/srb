<?php
include 'connect.php';
if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];

    $sql="delete from `pya` where id=$id";
    $result=mysqli_query($con,$sql);
    if($result)
    {
        header('location:pyaorder.php');

    } else{
        die(mysqli_error($con));
    }
}
?>