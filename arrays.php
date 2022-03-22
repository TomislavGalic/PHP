<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
  
<?php

    $number1 = 10;
    $number2 = 20;
    
    $sum = $number1 + $number2;
    echo "Zbroj number1 i number2 je: " . $sum;

    $arrayNormal = array("Tomo", "Zvone", 111);
    $arrayAssociative = array("Animal1" => 'Dog', "Animal2" => 'Cat');

    echo '<br>';

    echo $arrayNormal[0];
    echo '<br>';
    echo $arrayAssociative['Animal1'];

?>





</body>
</html>