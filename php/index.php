<?php include("index.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
</head>
<body>
   <nav class"navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="#">navabar</a>
      <button class="navbar-toggler" type="button " data-toggle="collapse" data-toggle="#navbarSupportedContent"> 
   <span class="navbar-toggler-icon"></span>
      </button>


      <div class="collapse" navbar-collapse" id="navbarSupportedContent"
<ul class="navbar-nav mr-auto"><li class="navbar-nav-auto">
   <li class="nav-item active"> <a class="nav-link" href="#">home<span class="sr-only">(current)</span></a></li><</ul>

   </nav> 



 <div class="main">

<!--cards -->

<div class="card">
<form action="manage_cart.php" method="POST">
 <div class="image">
    <img src="imgG1.jpg" height="200px">
 </div>
 <div class="title">
  <h1>
 PVC Pipes</h1>
 </div>
 <div class="des">
  <p>Price: Rs:455</p>
  <button  type="submit" name="Add_TO_Cart">Add to Cart</button>
  <input type="hidden" name="Item_Name" value="PVC Pipes">
  <input type="hidden" name="Price" value="950">
 </div>
 </div>

</body>
</html>