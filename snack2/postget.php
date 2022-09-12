<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack2</title>
</head>
<body>
    <?php 
    $myName = $_GET['name'];
    $myNameLen = strlen($myName);
    $myEmail = $_GET['email'];
    $myEmailpos = strpos($myEmail, '@');
    $myAge = $_GET['age'];
    $myAgeCheck = 3;

    
    if($myNameLen > 3 && $myEmailpos == true && $myAge != NAN){

        echo ($myNameLen > 3) ? '<p>'.'your name ' ."'".$myName."'". ' is a correct name.'.'</p>' : 'invalid name';
        echo ($myEmailpos == true ) ? '<p>'.'your email ' ."'".$myEmail."'". ' is a correct email.'.'</p>' : 'invalid email';
        echo ($myAge != NAN) ? '<p>'.'your age ' ."'".$myAge."'". ' is a correct age.'.'</p>' : 'Invalid Age' ;

    } else echo 'Accesso Negato'
    
    ?>
    
</body>
</html>