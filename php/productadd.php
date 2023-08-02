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
        alert("Connection Success") ;
    </script>
    <?php
}

?>

<!DOCTYPE html>

<html>


<head>
    <title>Products add</title>
    <style>

    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;500;600&display=swap');



    :root{
    --orange:#ff7800;
    --black:#130f40;
    --light-color:rgb(153, 151, 151);
    --box-shadow:0 .5rem 1.5rem rgba(0,0,0,.1);
    --border:.2rem solid rgba(0,0,0,.1);
    --outline:.1rem solid rgba(0,0,0,.1);
    --outline-hover:.2rem solid var(--black);
}

*{
    font-family: 'Poppins', sans-serif;
    margin:0; padding:0;
    box-sizing: border-box;
    outline: none; border:none;
    text-decoration: none;
    text-transform: capitalize;
    transition: all .2s linear;
}

html{
    font-size: 62.5%;
    overflow-x: hidden;
    scroll-behavior: smooth;
    scroll-padding-top: 7rem;
}

body{
    background:url("http://localhost/project/body.jpg");
}






.btn{
    margin-top: 1rem;
    display: inline-block;
    padding:.8rem 3rem;
    font-size: 1.7rem;
    border-radius: .5rem;
    border:.2rem solid var(--black);
    color:var(--black);
    cursor: pointer;
    background: none;
}

.btn:hover{
    background: rgb(18, 135, 37);
    color:#fff;
}

.header{
    position: fixed;
    top:0; left:0; right: 0;
    z-index: 1000;
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding:2rem 9%;
    background:#fff;
    box-shadow: var(--box-shadow);
}



.header .productadd-form  .box:hover{
    background:#fff;
    color:dimgray;
}

.header .productadd-form{
    position:absolute;
    margin-left: 27rem;
    top:220%; 
    height: 45rem;
    width:50rem;
    box-shadow: var(--box-shadow);
    padding:2rem;
    border-radius: .7rem;
    background: rgb(97, 97, 97);
    text-align: center;
}

.header .productadd-form h1{
    font-size: 1.5rem;
    color: var(--black);
    text-align:left;
}


.header .productadd-form .box{
    width: 100%;
    margin:.7rem 0;
    background:#eee;
    border-radius: .5rem;
    padding:1rem;
    font-size: 1.5rem;
    color:var(--black);
    text-transform: none;
}





/* media queries  */

@media (max-width:991px){

html{
    font-size: 55%;
}

.header{
    padding:2rem;
}

section{
    padding:2rem;
}

}
 






</style>
</head>

<body>

<header class="header">
    
<form action="" method="post" enctype="multipart/form-data">

<div class="productadd-form">

<label for=""><h1>Name</h1></label>
<input type="text" name="name" class="box">

<br>

<label for=""><h1>Price</h1></label>
<input type="number" name="price" class="box">

<br>

<label for=""><h1>Details</h1></label>
<input type="text" name="details" class="box">

<br>

<label for=""><h1>Image</h1></label>
<input type="file" name="img" class="box">

<br>

<br>

<button type="submit" name="submit"  class="btn">Add</button>
</form>
</body>
</html>

<?php

if (isset($_POST['submit']))
{


    $name = $_POST['name'] ;
    $price = $_POST['price'] ;
    $details = $_POST['details'] ;
    $img = $_FILES['img']['name'] ;


    $tmp_name = $_FILES['img']['tmp_name'] ;
    $uploaddir = "upload/" ;
    move_uploaded_file($tmp_name,$uploaddir.$img);

    $insert = "insert into products (name,price,details,img) values ('$name','$price','$details','$img')" ;

    $result = mysqli_query($con,$insert) ;
    
    
    if ($result)
    {

        ?>
        <script>
            alert("Item added Succesfully")
            location.replace("./index2.php");
        </script>
        <?php
    }

    else
    {
        ?>
        <script>
            alert("Something went wrong") ;
            location.replace("productadd.php");
        </script>
        <?php
    }


}
?>