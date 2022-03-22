<?php

    if(isset($_POST['submit'])) {

        $minimum = 5;
        
        $username = $_POST['username'];
        $password = $_POST['password'];
        
        if(strlen($username) < $minimum){
            echo "Username too short, has to be longer than 5 charS";
        }
    }
    
?>

<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    
<form action="form.php" method="post">

    <input type="text" name="username" placeholder="Enter name">
<br>
    <input type="password" name="password" placeholder="Enter password">
    <input type="submit" name="submit">
    
</form>




</body>
</html>