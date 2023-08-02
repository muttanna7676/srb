<?php  

$server = 'localhost' ;
$username = 'root' ;
$password = '' ;
$db = 'parlour' ;

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


<?php

$id = $_GET['id'] ;

$deletequery = "delete from parlours where id = '$id'" ;


$result = mysqli_query($con,$deletequery) ;

if ($result)
{
    ?>
    <script>
        alert("Deleted Successful")
        location.replace("admin1.php");
    </script>
    <?php
}


else
{
    ?>

<script>

    alert("Deletion failed") ;
</script>
<?php
}


?>