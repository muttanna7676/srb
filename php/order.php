
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title style="font-color:rgb(36, 124, 36)";>Register</title>
</head>
<style>
.form{
      width: 300px;
      height: 350px;
      position: absolute;
      left: 300px;
      bottom: 1PX;
     top:50px;

      transform: translate(0%,-15%);
      border-radius: 10px;
      padding-right: 140px;
      padding-left: 50px;
     padding-top:60px;
      padding-bottom: 200px;
      border-radius: 10px;
      margin-top: 50px;
     background: linear-gradient(20deg, #000, #6170cf, #985d26, #6864b6);
    



    
}
  
  .muttu{
    margin-top: 10px;
  }
  
 
  *{
    margin: 0;
    padding: 0;
}

  
  .main{
    width: 100%;
    background-position: center;
    background-size: cover;
    height: 115vh;
   
    background: linear-gradient(20deg, #452929, #088052, #4c568d, #6e3755);
}
  
 
  .icon{
      width: 200px;
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
      margin-top: 27px;
      font-size: 50px;
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
  
  
  
  .content{
    width:80px;
      height: auto;
      margin: auto;
      position: relative;
    
  }
  
  .content .par{
      padding-left: 10px;
      padding-bottom: 25px;
      font-family: Arial;
      letter-spacing: 1.2px;
      line-height: 30px;
  }
  
  .content h1{
      font-family: 'Times New Roman';
      font-size: 50px;
      padding-left: 60%;
    
      letter-spacing: 2px;
  }
  
  .content .cn{
      width: 100px;
      height: 15px;
      background: #9f900a;
      border: none;
      margin-bottom: 10px;
      margin-left: 10%;
      font-size: 14px;
      border-radius: 5px;
      cursor: pointer;
      transition: .4s ease;
      margin: top 3px;
      
  }
  
  .content .cn a{
      text-decoration: none;
      color: #000;
      transition: .3s ease;
  }
  
  .cn:hover{
      background-color: #ac9191;
  }
  
  .content span{
      color: #ff7200;
      font-size: 45px
  }
  
  
  .form h1{
      width: 280px;
      font-family: sans-serif;
      text-align: center;
      color: #081883;
      font-size: 25px;
     
      border-radius: 10px;
      margin: 1px;
      padding: 5px;
      margin-left: 60px;

    
  }
  
  .form input{
      width: 250px;
      height: 40px;
      background: transparent;
      border-bottom: 1px solid #df8a44;
      border-top: none;
      border-right: none;
      border-left: none;
      color: #fff;
      font-size: 15px;
      letter-spacing: 2px;
      margin-top: 5px;
      font-family: sans-serif;
      margin-left: 50px;
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
      margin-left: 80px;
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
      color: #ff7200;
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

  .content .r{
      width: 60%;
      height: 55%;
      background: #c77823;
      border: none;
      margin-bottom: 6px;
      margin-left: 50%;
      font-size: 20px;
      border-radius: 8px;
      cursor: pointer;
      transition: .4s ease;
      margin-top: 8%;
      
  }
  
  .content .r a{
      text-decoration: none;
      color: #000;
      transition: .3s ease;
      width:80px;
  }
  
  .r:hover{
      background-color: #fff;
  }
  
  .content .n{
      width: 100px;
      height: 25px;
      background: #9f900a;
      border: none;
      margin-bottom: 10%;
      margin-left: 80%;
      font-size: 14px;
      border-radius: 5px;
      cursor: pointer;
      transition: .4s ease;
      margin: top 3px;
      
  }
  
  .content .n a{
      text-decoration: none;
      color: #000;
      transition: .3s ease;
  }
  
  .n:hover{
      background-color: #fff;
  }

  .btn {
  background-color:#c3770c;
  padding: 12px;
  margin: 10px 0;
  border-color:#c3770c ;
  width: 60%;
  border-radius: 4px;
  cursor: pointer;
  font-size: 17px;
  margin-left: 40%;
}

.btn:hover {
  background-color:rgb(61, 201, 54);
}
.lable{

    color:rgb(217, 217, 212);
    margin-top: 3px; 
    font-size:larger;
}
</style>
<body><div class="main">
    <div class="navbar">
        <div class="icon">
<div class="content">
        <div class="form">
    <h1 class="h1">Registration From</h1>
    <div class="muttu">
    <form action="order.php" method="post">
        <label for="fname" class=lable><i class="fa fa-user"></i> Full Name : </label>
              <input type="text" id="fname" name="fname"  required>
              <label for="" class=lable><i class="fa fa-envelope"></i> Phone Number : </label>
              <input type="text" id="email" name="phone"  required>
              <label for="adr"  class=lable><i class="fa fa-address-card-o"></i> Address : </label>
              <input type="text" id="adr" name="address"  required>
              <label for="city" class=lable><i class="fa fa-institution"></i> City : </label>
              <input type="text" id="city" name="city"  required>
              <label for="city"  class=lable><i class="fa fa-envelope"></i> Items name : </label>
              <input type="text" id="item" name="item"  required>
              <label for="city"  class=lable><i class="fa fa-envelope"></i> code : </label>
              <input type="text" id="code" name="code"  required>
              <h1 style="color:rgb(255, 136, 0);font-size:15px;margin-left: 20px;">Only Cash on Delevery</h1>
              <button type="submit"  name="submit" class="btn">Placeorder</button>
      
</form>
</body>
</html>

<?php  
include "../php/connect.php" ;


if(isset($_POST['submit']))
{
    $fname = $_POST['fname'] ;
    $phone = $_POST['phone'] ;
    $address  = $_POST['address'] ;
    $city  = $_POST['city'] ;
    $item  = $_POST['item'] ;
    $code = $_POST['code'] ;
    $sql  = "insert into orders(fname,phone,adress,city,item,code) values ('$fname','$phone','$address','$city','$item','$code')" ;

    $result = mysqli_query($con,$sql) ;

    if ($result)
    {
?>
<script>
    alert("Done");
    location.replace("ordersuccess.php");
</script>
<?php
    }

    else
    {
        ?>
        <script>
            alert("Something went wrong")
        </script>
        <?php
    }
}

?>













