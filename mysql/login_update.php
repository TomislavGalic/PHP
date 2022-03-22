<?php include 'db.php';

    $query = "SELECT * FROM users";

    $result = mysqli_query($connection, $query);

    if(!$result){

        die('Query failed' . mysqli_error());

    }
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
        <form action="login_update.php" method="post">    
            <div class="form-group">
            <label for="username">Username</label>
            <input type="text" name="username" class="form-control">
            </div>

            <div class="form-group">
            <label for="password">Username</label>
            <input type="password" name="password" class="form-control">
            </div>

            <div class="form-group">

            <select name="" id="">

            <option value="">1</option>
            </select>

            <input class="btn btn-primary" type="submit" name="submit" value="Submit">
            </div>
        </form>

</div>
    
<?php



?>



</body>
</html>