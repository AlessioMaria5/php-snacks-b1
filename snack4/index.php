<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 4</title>
</head>
<body>

<?php 

    $myRandNumbers = [];

    $i = 0;
    while($i < 15){
        $myrandn = rand(0,50);
        (!in_array($myRandNumbers)) ? $myRandNumbers[] += $myrandn : '' ;
        echo '<p>'. $myRandNumbers[$i] . '</p>'; 
        $i++;
    }

    echo '<p>'. $myRandNumbers[$i] . '</p>'

?>
    
</body>
</html>