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
        <button class="btn btn-primary">
            <a href="create.php" class="text-light">Add user</a>
        </button>
    <div>
    <div class="container my-5">
        <table class="table">
            <thead>
                <tr>
                <th scope="col">Sno</th>
                <th scope="col">Name</th>
                <th scope="col">email</th>
                <th scope="col">Phone</th>
                <th scope="col">Operations</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include "conn.php";
                $sql = "SELECT * from `crud`";
                $result = mysqli_query($con,$sql);
                if($result){
                    while($row=mysqli_fetch_assoc($result)){
                        $id = $row['sno'];
                        $name = $row['name'];
                        $email = $row['email'];
                        $mobile = $row['mobile'];
                        echo '<tr>
                        <th scope="row">'.$id.'</th>
                        <td>'.$name.'</td>
                        <td>'.$email.'</td>
                        <td>'.$mobile.'</td>
                        <td>
                            <button class="btn btn-primary"><a href="update.php?updateid='.$id.'" class="text-light">Update</a></button>
                            <button class="btn btn-danger"><a href="delete.php?deleteid='.$id.'" class="text-light">Delete</a></button>
                        </td>
                        </tr>';
                    }
                }
                ?>
            </tbody>
        </table>
    </div>
  </body>
</html>