<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {
  font-family: Arial;
  font-size: 25px;
  padding: 4px;
  background: linear-gradient(20deg, #000, #6170cf, #985d26, #6864b6);;
}

* {
  box-sizing: border-box;
  
}
.h1{ 
  color:rgb(16, 14, 16);
margin-top:-2px;
 width:50%;
margin-left: 25%;
border-radius: 10px;
background-color: #569f31;


}

.row {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
  margin: 0 -16px;
  width: 120%;
  
  
}



.col-50 {
  -ms-flex: 50%; /* IE10 */
  flex: 50%;
  margin-left: 10%;
  

}



.container {
  margin-left: 25%;
  border-radius: 10px solid rgb(3, 4, 3);
width:50%;
background-color: linear-gradient(20deg, #000, #6170cf, #985d26, #6864b6);
height: 7%;
margin-top: -3%;
}


input[type=text] {
  width: 50%;
  margin-bottom: 0px;
  margin-top: -0%;
  padding: 12px;
  border: 1px solid #171616;
  border-radius: 3px;
  margin-left: 30%;
  
}

label {
  margin-bottom: 1%;
 display: block;
  
}

.icon-container {
  margin-bottom: 10px;
  padding: 7px 0;
  font-size: 20px;
}

.btn {
  background-color:#c3770c;
  padding: 12px;
  margin: 10px 0;
  border-color:#c3770c ;
  width: 60%;
  border-radius: 6px;
  cursor: pointer;
  font-size: 17px;
  margin-left: 10%;
}

.btn:hover {
  background-color:rgb(61, 201, 54);
}

</style>
</head>
<body>

<h1 align="center" class="h1">Order Details</h1>
  
    
      <div class="container">
      
        
      <div class="row">
    <div class="col-50">
    <form action="order.php" method="post">
              <label for="fname" style="color:rgb(217, 217, 212);margin-top: 3px;"><i class="fa fa-user"></i> Full Name : </label>
              <input type="text" id="fname" name="firstname"  required>
              <label for=""  style="color:rgb(214, 214, 206);margin-top: 3px;"><i class="fa fa-envelope"></i> Phone : </label>
              <input type="text" id="email" name="phone"  required>
              <label for="adr"  style="color:rgb(214, 214, 206);margin-top: 3px;"><i class="fa fa-address-card-o"></i> Address : </label>
              <input type="text" id="adr" name="address"  required>
              <label for="city"  style="color:rgb(214, 214, 206);margin-top: 3px;"><i class="fa fa-institution"></i> City : </label>
              <input type="text" id="city" name="city"  required>
              <label for="city"  style="color:rgb(214, 214, 206);margin-top: 3px;"><i class="fa fa-envelope"></i> Items name : </label>
              <input type="text" id="item" name="item"  required>

              <h1 style="color:rgb(208, 140, 173);font-size:25px;">Only Cash on Delevery</h1>
              <button type="submit"  name="submit" class="btn">Placeorder</button>
            <div class="row">
          <div class="col-50">

            </div>
   </form>
</body>
</html>

