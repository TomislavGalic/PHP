<?php

    $connection = mysqli_connect('localhost', 'root', '', 'loginapp'); 

    if($connection) {

        echo "We are connected";

    } else {

        die("Database connection failed");
    }

   /* if(isset($_POST['submit'])){

            $username = $_POST['username'];
            $password = $_POST['password'];
        
            if($username && $password) {

                echo $username;
                echo $password;
            } else {
                echo "Cannot be blank";
            }
    }*/

?>



<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>
<div class="container">
    
    <div class="col-sm-6"></div>
        <form action="login.php" method="post">    
            <div class="form-group">
            <label for="username">Username</label>
            <input type="text" name="username" class="form-control">
            </div>

            <div class="form-group">
            <label for="password">Username</label>
            <input type="password" name="password" class="form-control">
            </div>

            <div class="form-group">
            <input class="btn btn-primary" type="submit" name="submit" value="Submit">
            </div>
        </form>

</div>
    
<?php



?>



</body>
</html>