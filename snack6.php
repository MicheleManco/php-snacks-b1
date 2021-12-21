<!-- Utilizzare questo array: https://pastebin.com/CkX3680A. Stampiamo il nostro array mettendo gli insegnanti in un rettangolo grigio e i PM in un rettangolo verde. -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>snack6</title>
    <style>
        .green{
            background-color:green;
        }
        .grey{
            background-color:grey;
        }
    </style>
</head>
<body>
    <?php
    
    $db = [
        'teachers' => [
            [
                'name' => 'Michele',
                'lastname' => 'Papagni'
            ],
            [
                'name' => 'Fabio',
                'lastname' => 'Forghieri'
            ]
        ],
        'pm' => [
            [
                'name' => 'Roberto',
                'lastname' => 'Marazzini'
            ],
            [
                'name' => 'Federico',
                'lastname' => 'Pellegrini'
            ]
        ]
    ];

    ?>
    <div class="box green">
    <?php
    
    foreach ($db as $key => $dbs) {
        foreach ($dbs as $person) {
            if ($key === 'teachers') {
                echo $person['name'] . " " . $person['lastname'] . "<br>";
            }
        }
    }
    ?>
    </div>

    <div class="box grey">
    <?php
     foreach ($db as $key => $dbs) {
        foreach ($dbs as $person) {
            if ($key === 'pm') {
                echo $person['name'] . " " . $person['lastname'] . "<br>";
            }
        }
    }
    ?>
    </div>
</body>
</html>