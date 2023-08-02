<?php

$server = "localhost" ;
$username = "root" ;
$password = "" ;
$dbname = "srb" ;

$con = mysqli_connect($server,$username,$password,$dbname);
if($con){
 ?>
 <script>
    alert("Connection Successful")
 </script>
 <?php
}
?>