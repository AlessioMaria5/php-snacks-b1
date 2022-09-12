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

    for($i = 0 ; $i < 15 ; $i++){
        $myrandn = rand(0,50);
        (!in_array($myRandNumbers)) ? $myRandNumbers[] += $myrandn : '' ;
        echo '<p>'. $myRandNumbers[$i] . '</p>'; 
    }

    echo '<p>'. $myRandNumbers[$i] . '</p>'

?>
    
</body>
</html>