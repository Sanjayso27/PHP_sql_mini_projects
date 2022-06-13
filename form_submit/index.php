<?php
$insert=false;
if(isset($_POST['name'])){
    $server = "localhost";
    $username = "root";
    $password = "";

    $con = mysqli_connect($server,$username,$password);
    if(!$con){
        die("connection to db failed".mysqli_connect_error());
    }
    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $age = $_POST['age'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $desc = $_POST['desc'];
    $sql = "INSERT INTO `us_trip`. `trip` (`name`, `age`, `gender`, `email`, `phone`, `other`, `dt`) VALUES ('$name', '$age', '$gender', '$email', '$phone', '$desc', current_timestamp());";
    if($con->query($sql)==true){
        // echo "Successfully inserted";
        $insert=true;
    }
    $con->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Travel Form</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto|Sriracha&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <img class="bg" src="bg.jpg" alt="IIT K">
    <div class="container">
        <h1>Welcome to IITK Manali Trip Form</h1>
        <p>Enter ur details</p>
        <?php
            if($insert == true){
            echo "<p class='submitMsg'>Thanks for submitting your form. We are happy to see you joining us for the Manali trip</p>";
            }
        ?>
        <form action="index.php" method="post">
            <input type="text" name="name" id="name" placeholder="Enter ur name">
            <input type="text" name="age" id="age" placeholder="Enter ur age">
            <input type="text" name="gender" id="gender" placeholder="Enter ur gender">
            <input type="email" name="email" id="email" placeholder="Enter ur email">
            <input type="phone" name="phone" id="phone" placeholder="Enter ur phone">
            <textarea name="desc" id="desc" cols="30" rows="10" placeholder="Enter any other information here"></textarea>
            <button class="btn">Submit</button> 
        </form>
    </div>
    <script src="index.js"></script>
</body>
</html>