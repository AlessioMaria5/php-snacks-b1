<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 7</title>
</head>
<body>
    <?php 
    
    $myStudents = [
        [
            'Name' => 'Giorgio',
            'Cognome' => 'Rossi',
            'Voti' => [ 
                        'Geografia' => 6,
                        'Storia' => 7,
                        'Italiano' => 5,
                        'Matematica' => 2,
                    ]
        ],

        [
            'Name' => 'Valentina',
            'Cognome' => 'Bianchi',
            'Voti' => [ 
                        'Geografia' => 5,
                        'Storia' => 10,
                        'Italiano' => 7,
                        'Matematica' => 2,
                    ]
        ],

        [
            'Name' => 'Giuseppe',
            'Cognome' => 'Verdi',
            'Voti' => [ 
                        'Geografia' => 10,
                        'Storia' => 2,
                        'Italiano' => 8,
                        'Matematica' => 9,
                    ]
        ],
    ]

    
  
    ?>

<ul>
    <?php 
      // ORA STAMPIAMO I DATI
       for($i = 0 ; $i < count($myStudents)  ; $i++){
        
        for($x ; $x < count($myStudents[$i]['Voti']) ; $x++ ){

            $myVoto += $myStudents[$i]['Voti'][$x];
            
            

        };

        echo '<li>'.$myStudents[$i]['Name'].
                    $myStudents[$i]['Cognome'].
                    $myVoto. '</li>';
        

      }
    ?>
      
</ul>
</body>
</html>