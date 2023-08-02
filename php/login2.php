<?php
require "connect.php";
if ($_SERVER['REQUEST_METHOD'] =="POST")
{
    $name = $_POST['name'];
    $password = $_POST['password'] ;
$sql ="SELECT *FROM `users`";
$res = mysqli_query($con,$sql);
while($row = mysqli_fetch_assoc($res)){
    if($row['name'] == $name && $row['password'] == $password){
        header("location:index.html");
    }else{
        header("location:reg1.html");
    }
}
}
?>