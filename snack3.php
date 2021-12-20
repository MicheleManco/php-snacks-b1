<!-- Creare un array di array. Ogni array figlio avrà come chiave una data in questo formato:
DD-MM-YYYY es 01-01-2007 e come valore un array di post associati a quella data. Stampare ogni data con i relativi post.

Qui l'array di esempio: https://www.codepile.net/pile/R2K5d68z -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>snack3</title>
</head>
<body>
    <?php
        $posts = [
            '1/01/2021' => [
                [
                    'title' => 'Cut The Mustard',
                    'author' => 'Mario',
                    'text' => 'To cut the mustard is to meet a required standard, or to meet expectations.'
                ],
                [
                    'title' => 'Yada Yada',
                    'author' => 'Francesca',
                    'text' => ' A way to notify a person that what theyre saying is predictable or boring'
                ],  
            ],
            '10/02/2021' => [
                [
                    'title' => 'Cry Over Spilt Milk',
                    'author' => 'Anna',
                    'text' => 'Its useless to worry about things that  already happened and cannot be changed.'
                ],
                [
                    'title' => 'Under the Weather',
                    'author' => 'Giuseppe',
                    'text' => 'Not feeling well, in health or mood.'
                ],  
            ],
            '15/03/2021' => [
                [
                    'title' => 'A Cold Fish',
                    'author' => 'Ernesto',
                    'text' => 'Someone who lacks empathy and emotion.'
                ],
                [
                    'title' => 'On the Same Page',
                    'author' => 'Lady',
                    'text' => 'hinking alike or understanding something in a similar way with others.'
                ],  
            ],
        ];

        $chiavi = array_keys($posts);

        for($i=0; $i<count($posts); $i++){

          for($x=0; $x<count($posts[$chiavi[$i]]); $x++){

              echo "<div>" ."</br>" .
               $chiavi[$i] ."</br>".
               $posts[$chiavi[$i]][$x]['title'] ."</br>".
               $posts[$chiavi[$i]][$x]['author'] ."<br>" .
               $posts[$chiavi[$i]][$x]['text'] ."</div>";
          };
        }
        
    ?>
</body>
</html>