<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
    Olimpia Milano - Cantù | 55-60 -->

    <?php 
        $matches= [
            [
                'homeTeam'=> 'Roma',
                'guestTeam'=> 'Treviso',
                'score'=>[
                    'homeScore'=> 85,
                    'guestScore'=> 75,
                ],
            ],

            [
                'homeTeam'=> 'Milano',
                'guestTeam'=> 'Bologna',
                'score'=>[
                    'homeScore'=> 145,
                    'guestScore'=> 175,
                ],
            ],

            [
                'homeTeam'=> 'Venezia',
                'guestTeam'=> 'Cagliari',
                'score'=>[
                    'homeScore'=> 255,
                    'guestScore'=> 195,
                ],
            ],
        ];
    
        for($i = 0; $i < count($matches); $i++){
            $thisMatch = $matches[$i];
            echo $thisMatch['homeTeam'] . '-' . $thisMatch['guestTeam'] . ' | ' . $thisMatch['score']['homeScore'] . '-'.$thisMatch['score']['guestScore'] . '<br>';
        }
    ?>

    
</body>
</html>