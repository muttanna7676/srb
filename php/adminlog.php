
<?php 
session_start();
require("connect.php")
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
   
  *{
    margin: 0;
    padding: 0;
}

.main{
    width: 100%;
   
    background-position: center;
    background-size: cover;
    height: 100vh;
    /* background-color:#9f8168; */
    background-image:url(../images/i.jpeg);
}

.navbar{
    width: 1100px;
    height: 75px;
    margin: auto;
}

.icon{
    width: 200px;
    float: left;
    height: 70px;
}

.logo{
    color: #ff7200;
    font-size: 35px;
    font-family: Arial;
    padding-left: 20px;
    float: left;
    padding-top: 10px;
    margin-top: 5px
}

.menu{
    width: 400px;
    float: left;
    height: 70px;
}

ul{
    float: left;
    display: flex;
    justify-content: center;
    align-items: center;
}

ul li{
    list-style: none;
    margin-left: 62px;
    margin-top: 50px;
    font-size: 14px;
}

ul li a{
    text-decoration: none;
    color: #fff;
    font-family: Arial;
    font-weight: bold;
    transition: 0.4s ease-in-out;
}

ul li a:hover{
    color: #ff7200;
}

.search{
    width: 330px;
    float: left;
    margin-left: 270px;
}



.btn{
    width: 100px;
    height: 40px;
    background: #ff7200;
    border: 2px solid #ff7200;
    margin-top: 13px;
    color: #fff;
    font-size: 15px;
    border-bottom-right-radius: 5px;
    border-bottom-right-radius: 5px;
    transition: 0.2s ease;
    cursor: pointer;
}
.btn:hover{
    color: #000;
}

.btn:focus{
    outline: none;
}

.srch:focus{
    outline: none;
}

.content{
    width: 100%;
    height: auto;
    margin: auto;
    color:white;
    position: relative;
}

.content .par{
    padding-left: 20px;
    padding-bottom: 25px;
    font-family: Arial;
    letter-spacing: 1.2px;
    line-height: 30px;
}

.content h1{
    font-family: 'Times New Roman';
    font-size: 50px;
    padding-left: 20px;
    margin-top: 9%;
    letter-spacing: 2px;
}

.content .cn{
    width: 160px;
    height: 40px;
    background: #ff7200;
    border: none;
    margin-bottom: 10px;
    margin-left: 20%;
    font-size: 18px;
    border-radius: 10px;
    cursor: pointer;
    transition: .4s ease;
    margin-top:5%;
    
}

.content .cn a{
    text-decoration: none;
    color: #0f0c0c;
    transition: .3s ease;
}

.cn:hover{
    background-color: #fff;
}

.content span{
    color: #ff7200;
    font-size: 65px
}

.form{
    width: 250px;
    height: 300px;
    position: absolute;
    top: 50px;
    left: 450px;
    transform: translate(0%,-5%);
    border-radius: 10px;
    padding: 30px;
    margin-top: 50px;
    background:linear-gradient(20deg, #000, #6170cf, #985d26, #6864b6);
}

.form h2{
    width: 220px;
    font-family: sans-serif;
    text-align: center;
    color: #000000;
    font-size: 22px;
    background-color: #fff;
    border-radius: 10px;
    margin: 2px;
    padding: 5px;
}

.form input{
    width: 240px;
    height: 30px;
    background: transparent;
    border-bottom: 1px solid #000000;
    border-top: none;
    border-right: none;
    border-left: none;
    color: #fff;
    font-size: 15px;
    letter-spacing: 2px;
    margin-top: 30px;
    font-family: sans-serif;
}

.form input:focus{
    outline: none;
}

::placeholder{
    color: #fff;
    font-family: Arial;
}

.btnn{
    width: 240px;
    height: 40px;
    background: #ff7200;
    border: none;
    margin-top: 30px;
    font-size: 18px;
    border-radius: 10px;
    cursor: pointer;
    color: #fff;
    transition: 0.4s ease;
}
.btnn:hover{
    background: #fff;
    color: #ff7200;
}
.btnn a{
    text-decoration: none;
    color: #000;
    font-weight: bold;
}
.form .link{
    font-family: Arial, Helvetica, sans-serif;
    font-size: 17px;
    padding-top: 20px;
    text-align: center;
}
.form .link a{
    text-decoration: none;
    color: #79604c;
    text-decoration: none;
    color: #fff;
}
.icons ion-icon{
    color: #fff;
    font-size: 30px;
    padding-left: 14px;
    padding-top: 5px;
    transition: 0.3s ease;
}
.icons ion-icon:hover{
    color: #ff7200;
}
.liw{
    padding-top: 15px;
    padding-bottom: 10px;
    text-align: center;
}
.h2{
    background-color: #ff7200;
}




</style>
<body> 
    <div class="main">
    <div class="navbar">
        <div class="icon">
    <div class="content">
        <div class="form">
            <form action="" method="POST">
        <h2  style="background-color:  #ff7200;">Admin Login Here</h2>
         <label for="text" style="color:rgb(9, 8, 7),font-size=30px">Enter UsrName :</label>
        <input type="text" name="Admin_Name" placeholder="admin name">
        <label for="" style="color:rgb(8, 8, 6),font-size=30px">Enter Password:</label>
        <input type="password" name="Admin_Password" placeholder="password">
       <button class="btnn" name="submit"><a href="#">Login</a></button>
       </form>
         </div>
        </div>
        </div>
        </div>
        </div>
       
<?php
if(isset($_POST['submit']))
{
   $query="SELECT * FROM `admin_login` WHERE `Admin_Name`='$_POST[Admin_Name]' AND `Admin_Password`='$_POST[Admin_Password]'";
   $result = mysqli_query($con,$query);
   if(mysqli_num_rows($result)==1)
   {
  
  $_SESSION['admin_loginId']=$_POST['Admin_Name'];
?>
<script>
    location.replace("admin.php");
</script>
<?php
   }
   else{
    ?>
    <script>
        alert("Incorrect password")
    </script>
    <?php
   }


}


?>
 </body>
</html>