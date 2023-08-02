<?php
require "../php/connect.php";
if ($_SERVER['REQUEST_METHOD'] =="POST")
{
    $name = $_POST['name'];
    $password = $_POST['password'] ;
$sql ="SELECT *FROM `users`";
$res = mysqli_query($con,$sql);
while($row = mysqli_fetch_assoc($res)){
    if($row['name'] == $name && $row['password'] == $password){
        ?>
        <script>
            alert("Login Successful")
        </script>
        <?php
        header("location:../html/index.html");
    }else{
        ?>
        <script>
            alert("Incorrect username or password")
            location.replace("../html/login.html")
        </script>
        <?php
    }
}
}
?>