<?php
require "..\php\connect.php";

if ($_SERVER['REQUEST_METHOD'] =="POST")
{
    $name = $_POST['name'] ;
    $email = $_POST['email'] ;
    $password = $_POST['password'] ;
    $phone = $_POST['phone'] ;
    echo $name;0;
    $sql = "INSERT INTO `users` (`name`, `email`, `password`, `phone`) VALUES ('$name', '$email', '$password', '$phone')" ;
    
    $result = mysqli_query($con,$sql) ;
    
    if ($result)
    {
        ?>
        <script>
            alert("Registered Successful")
            alert("Go to Login")
            location.replace("../html/login.html")
        </script>
        <?php
    }else{
        echo "error".mysqli_error($con);
    }
}
?>