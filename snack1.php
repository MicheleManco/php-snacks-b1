<!-- Creiamo un array contenente le partite di basket di un'ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, 
punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.

Olimpia Milano - Cantù | 55-60 -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>snack1</title>
</head>
<body>
    <?php
        $arrayPartite = [
            [
                "squadra1" => "Alianz Trieste ",
                "squadra2" => "Armani Milano",
                "res1" => 35,
                "res2" => 46,
            ],
            [
                "squadra1" => "Banco di Sardegna ",
                "squadra2" => "Derthona tortona",
                "res1" => 57,
                "res2" => 29,
            ],
            [
                "squadra1" => "Carpegna Pesaro ",
                "squadra2" => "Adolomiti Trentino",
                "res1" => 45,
                "res2" => 49,
            ],
            [
                "squadra1" => "Fortitudo Bologna",
                "squadra2" => "Gevi Napoli",
                "res1" => 64,
                "res2" => 83,
            ],
            [
                "squadra1" => "Happy Casa Brindisi",
                "squadra2" => "Treviso Basket",
                "res1" => 75,
                "res2" => 59,
            ],
        ];

        for ($i=0; $i<count($arrayPartite); $i++) {
            $casa = $arrayPartite[$i]["squadra1"];
            $ospite = $arrayPartite[$i]["squadra2"];
            $casaRes = $arrayPartite[$i]["res1"];
            $ospiteRes = $arrayPartite[$i]["res2"];
            echo "<div>$casa - $ospite || $casaRes - $ospiteRes</div>";
        }
    ?>
   
</body>
</html>