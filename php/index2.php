<?php  

$server = 'localhost' ;
$username = 'root' ;
$password = '' ;
$db = 'srb' ;

$con = mysqli_connect($server,$username,$password,$db) ;

if ($con)
{
    ?>
    <script>
        // alert("Connection Success") ;
    </script>
    <?php
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script
      src="https://kit.fontawesome.com/8f27d68390.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="..\style.css" />
    <title>Document</title>
    <style>
      
    </style>
  </head>
  <body>
    <header>
      <div id="navbar">
        <img src="../images/logo.jpg" id="logo" style="height: 50px; width:60px;border-radius:10cm;" >
        <div>
          <h1 style="color: blue;">SRB ELECTRICALS</h1>
        </div>
        <div id="navbar-right">
        <a href ="#">my new add items</a>
          <a href ="../html/Index.html">Home</a>
        
       </div>
   
      </div>
    </header><br>
    <br>    <br>    
    <br>
    <br>
    <br>
    <br>    <br>    <br>    <br>    <br>

        
    <?php 

$query = "select * from products" ;

$result = mysqli_query($con,$query) ;

?>

<!---imag 1-->
    <section class="shop-section">

    <?php 
            while ($rows= mysqli_fetch_assoc($result))
            {
                ?>
<section>
      <div class="card-wrapper">
        <div data-id="1" class="card-item">
          <img src="upload/<?php echo $rows['img'] ;?>"  style="width:200px">
          <div class="details">
            <h1><?php echo $rows['name'] ?></h1>
            <p>
              <!-- <span class="span" -->
            <?php echo $rows['details'] ?>   
            <!-- </span > -->

              <span class="price">Price: <?php echo $rows['price']?></span>
              <span class="add-to-cart-btn">Add To Cart</span>
              
              <span <button class="b" style="margin-top: -40px;margin-left: 200px ; width: 120px;" ><a href="../php/pya.php" style="color: aqua;text-decoration: none;">Buy now</button></a></span>
             
            </p>
          </div>
        </div>
            </section>
<?php
}

?>
       
</section>

    <script src="..\script.js"></script>
  </body>
</html>