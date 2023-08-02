<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- custom css file link  -->
   
    <style>
*{
  font-family: 'Poppins', sans-serif;
  margin:0; padding:0;
  box-sizing: border-box;
  outline: none; border:none;
  text-transform: capitalize;
  transition: all .2s linear;

}

.container{
  display: flex;
  justify-content: center;
  align-items: center;
  padding:25px;
  min-height: 75vh;
 background-position: center;
    background-size: cover;
  
    /* background-color:#9f8168; */
    background-image:url(../images/i.jpeg);

}

.container form{
    
  padding:20px;
  width:500px;
  background: #fdf7f7;
  box-shadow: 0 5px 10px rgba(0,0,0,.1);
  
}

.container form .row{
  display: flex;
  flex-wrap: wrap;
  gap:15px;
}

.container form .row .col{
  flex:1 1 250px;
}

.container form .row .col .title{
  font-size: 30px;
  color:#333;
  padding-bottom: 5px;
  text-transform: uppercase;
  color: #de7d16;
}

.container form .row .col .inputBox{
  margin:15px 0;
}

.container form .row .col .inputBox span{
  margin-bottom: 10px;
  display: block;
}

.container form .row .col .inputBox input{
  width: 100%;
  border:1px solid #ccc;
  padding:10px 10px;
  font-size: 15px;
  text-transform: none;
}

.container form .row .col .inputBox input:focus{
  border:1px solid #000;
}

.container form .row .col .flex{
  display: flex;
  gap:15px;
}

.container form .row .col .flex .inputBox{
  margin-top: 5px;
}

.container form .row .col .inputBox img{
  height: 34px;
  margin-top: 5px;
  filter: drop-shadow(0 0 1px #000);
}

.container form .submit-btn{
  width: 100%;
  padding:12px;
  font-size: 17px;
  background: #de7d16;
  color:#fff;
  margin-top: 5px;
  cursor: pointer;
}

.container form .submit-btn:hover{
  background: #eb0f0f;
}

    </style>

</head>
<body>

<div class="container">

    <form action="pya.php" method="post">

        <div class="row">

            <div class="col">

                <h3 class="title">billing address</h3>

                <div class="inputBox">
                <form action="pya.php" method="post">
                    <span>full name :</span>
                    <input type="text" id="fname" name="fname"  required>
                </div>
                <div class="inputBox">
                    <span>email :</span>
                    <input type="text" id="email" name="email"  required>
                </div>
                <div class="inputBox">
                    <span>address :</span>
                    <input type="text" id="address" name="address"  required>
                </div>
                <div class="inputBox">
                    <span>city :</span>
                    <input type="text" id="city" name="city"  required>
                </div>
                <div class="inputBox">
                    <span>Item name :</span>
                    <input type="text" id="item" name="item"  required>
                </div>
                <div class="flex">
                    <div class="inputBox">
                        <span>state :</span>
                        <input type="text" id="state" name="state"  required>
                    </div>
                    <div class="inputBox">
                        <span>pin code:</span>
                        <input type="text" id="code" name="code" placeholder="123 456">
                    </div>
                </div>

            </div>
            <div class="col">
            <div class="inputBox">
                    <span>phone number:</span>
                    <input type="text" id="phone" name="phone"  required>
                </div>
               
                    <span style="color:blue;font-size:20px">Cash on delavery</span>
                 
                </div>
               
                </div>
                <button type="submit"  id="submit" name="submit" class="submit-btn">Placeorder</button>
            </div>
    
</div>

    </form>
</div>
</div>    
    
</body>
</html>

<?php  
include "../php/connect.php" ;

if(isset($_POST['submit']))
{
    $fname = $_POST['fname'] ;
    $email = $_POST['email'] ;
    $address  = $_POST['address'] ;
    $city  = $_POST['city'] ;
    $item  = $_POST['item'] ;
    $state = $_POST['state'] ;
    $code = $_POST['code'];
    $phone = $_POST['phone'];
    $sql  = "insert into pya(fname,email,address,city,item,state,code,phone) values ('$fname','$email','$address','$city','$item','$state','$code','$phone')" ;

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