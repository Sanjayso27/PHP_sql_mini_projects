<?php
include 'conn.php';
$id = $_GET['updateid'];
$sql= "SELECT * from `crud` where sno=$id";
$result=mysqli_query($con,$sql);
$row = mysqli_fetch_assoc($result);
$id = $row['sno'];
$name = $row['name'];
$email = $row['email'];
$mobile = $row['mobile'];
$password = $row['password'];

if(isset($_POST['submit'])){
    $name =  $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $password = $_POST['password'];

    $sql = "UPDATE `crud` set name = '$name',email = '$email',mobile='$mobile',password='$password' where sno=$id";
    $result=mysqli_query($con,$sql);
    if($result){
        header("location: display.php");
    }
    else {
        die(mysqli_error($conn));
    }
}
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>CRUD app</title>
  </head>
  <body>
    <div class="container my-5">
        <form method="post">
            <div class="form-group">
                <label for="name">name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name" autocomplete="off"
                value=<?php echo $name;?>>
            </div>
            <div class="form-group">
                <label for="email">email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" autocomplete="off"value=<?php echo $email;?>>
            </div>
            <div class="form-group">
                <label for="mobile">mobile</label>
                <input type="text" class="form-control" id="mobile" name="mobile" placeholder="Enter your mobile" autocomplete="off"value=<?php echo $mobile;?>>
            </div>
            <div class="form-group">
                <label for="password">password</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password" autocomplete="off"value=<?php echo $password;?>>
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Update</button>
        </form>
    </div>
  </body>
</html>