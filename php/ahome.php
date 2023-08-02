<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

<style>
    body{background-color:white rgba(236, 152, 152, 0.756) rgb(red, green, blue);
    background-size:60px;
}
   .img{
    margin-left: 50px;
    margin-right: 50px;
    width: 90%; 
    height: 50%; 


}

    .h1{text-align:center; 
    margin-top:-10px;
    margin-bottom:10px;
    padding-right:100px;
    
    color:rgb(21, 28, 212);
    font-size: 50px;
    font-weight: bold;
    font-family:sans-serif;
    font-style:italic;
     }

  
 div{
    background-color:white;

}  

.navbar{ font-size: 5px;
         width: 50px;
         height: 10px;
         margin: auto;
        }

     .saifg{ text-decoration:solid;
        color: rgb(175, 81, 81);
        background-color: rgb(109, 153, 194);
        border-top-left-radius: 40px;
        border-top-right-radius: 40px;
        margin-left: 100px;
        margin-right: 80px;
        margin-top:10px;
        margin-bottom: 10PX;
        text-align: center;

        
        
}

.saifg:hover{color: blue;
             font-style:oblique;
             font-weight:10;
           text-align: center;
           margin-left: 40px;
           margin-right: 60px;
            }
            
            
            
            
            ul{
    
    display: flex;
    justify-content: center;
    box-sizing: border-box;
    margin-left: 20px;
}

ul li{
    list-style: none;
    margin-left: 0px;
    font-size: 20px;
    border-width: 80px;
    margin-left:40px;
}

ul li a{
    text-decoration: none;
    color: rgb(167, 32, 34);
    font-weight: 100;
    transition: 0s ease-in-out
}

/* ul li a:hover{
    color: #ff7200;
    stroke-width: 0px;
    font-style: oblique;
} */

           .buy{
        border: 1px solid rgb(162, 239, 120);
        background-color: rgb(40, 130, 65);
        color: rgb(239, 236, 234);
        border-radius: 10px;
        text-decoration: none;
        padding: 5px 10px 5px 10px;
        margin-left: 100px;
        font-size: 20px;
       }


    .ms{
        line-height: 1vmax; 
        border-top:3px solid #d8ce1e;
        border-bottom:3px solid #d8ce1e;
        size:0px;
        padding-top: 40px;
        padding-bottom:20px;
        padding-left:20px;
        padding-right:20px;
        border-bottom-left-radius:20px;
        border-bottom-right-radius: 20px;
        border-top-left-radius:20px;
        border-top-right-radius:20px;

        margin-top:1.5px;
        margin-left:10px;
        margin-bottom:1.5px;
        margin-right:-1px;
        <!--border-collapse:collapse-->
        }


    td{border:solid 1pX BISQUE;
        padding:4pt;
      }


    .p{font-style: italic;
        background-color: #00eeff;
       height: 30px ;

    }
    .m{
        width:70%;
        margin-left: 15%;
        border-image-width: 70px;
        margin-top: 40px;
    }
    
    .tr{
        background-color:rgb(195, 202, 138) ;
    }



    </style>
</head>

<?php
include "connect.php" ;

$query = "select * from products" ;

$result = mysqli_query($con,$query) ;

?>



<body class="ms">
    <div class="menu">
    <p>
    <nav> 
    <h1 class="h1">SRB HARDWARE SHOP</h1>
    
<marquee behavior="scroll" direction="LEFT" scrollamount="15" style="width:100%; height:20px;color:rgb(28, 28, 31);font-size: 25px;font-style:oblique;margin-top: 2px;">SRB   HARDWARE   SHOPE  ALL  TYPES  HARDWARE   PRODUCT  AVAILABLE</marquee>    
</nav>     
<ul class="saifg">
        <li class="saifg"><a href="myweb.html">HOME</a></li>
        <li class="saifg"><a href="home.html">ABOUT</a></li>
        <li class="saifg"><a href="#">IMAGES</A></LI>
        <li class="saifg"><a href="#">VIDEOS</a></li>
        <li class="saifg"><a href="productsadd.php">Add</a></li>
    </ul>
   

    <img class="img" src="WhatsApp Image 2022-11-24 at 21.54.39.jpg"><img>

</div>
<style>
 
   
</style>


<marquee behavior="alternate" scrollamount="10" style="width:100%; height:20px;color:rgb(27, 25, 25);background-color:rgb(160, 63, 142);font-size: 20px;">TYPES OF HARDWARE ITAMS and BUY NOW </marquee>
<p>
   <table class="m">
    <tr class="p">
        <th style="width:6cm"><font size="6" color="green">PRODUCT</font></th>
        <th style="width:11cm"><font size="6" color="green">NAME</font></th>
        <th style="width:11cm"><font size="6" color="green">BUY</font></th>
        <th style="width:6cm"><font size="6" color="green">PRODUCT</font></th>
        <th style="width:11cm"><font size="6" color="green">NAME</font></th>
        <th style="width:11cm"><font size="6" color="green">BUY</font></th>
    </tr>

    
    
    <?php
        while($rows = mysqli_fetch_assoc($result))
        
        {
            ?>    
            <tr class="tr">
        <td>
    <img src="upload/<?php echo $rows['pimg']?>" alt="image" width="200" height="250">
    </td>
        <td style="width:300px"><?php echo $rows['pname'];?></td>
        <td style="width:300px"><a class="buy" href="order.html">Buy now</font></a></td>
    </tr>
        <?php
}
    ?>
    
   
  </table>

   
</p>
</body>
</html>