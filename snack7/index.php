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
                        10,
                        10,
                        10,
                        10,
                    ]
        ],

        [
            'Name' => 'Valentina',
            'Cognome' => 'Bianchi',
            'Voti' => [ 
                        10,
                        3,
                        9,
                        7,
                    ]
        ],

        [
            'Name' => 'Giuseppe',
            'Cognome' => 'Verdi',
            'Voti' => [ 
                        10,
                        5,
                        5,
                        9,
                    ]
        ],
    ]

    
  
    ?>

<ul>
    <?php 
      // ORA STAMPIAMO I DATI
       for($i = 0 ; $i < count($myStudents)  ; $i++){
        
        $myVoto = '';

        for($x = 0 ; $x < 3 ; $x++ ){

            $myVoto += $myStudents[$i]['Voti'][$x];
        };

        echo '<li>'.$myStudents[$i]['Name']. ' ' .
                    $myStudents[$i]['Cognome']. ' || Media Voto: '.
                    ($myVoto / 4). '</li>';
    
      }

      
      
    ?>
      
</ul>
</body>
</html>