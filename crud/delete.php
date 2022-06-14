<?php
include 'conn.php';
// using the get method we can access the paramters in the url
if(isset($_GET['deleteid'])){
    $id= $_GET['deleteid'];

    $sql = "DELETE from `crud` where sno=$id";
    $result = mysqli_query($con,$sql);
    if($result){
        header("location: display.php");
    }
    else {
        die(mysqli_error($con));
    }
}
?>