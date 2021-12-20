<!-- Creare un array con 15 numeri casuali, tenendo conto che l'array non dovrà contenere lo stesso numero più di una volta -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>snack4</title>
</head>
<body>
    <?php
    $arraynum = [];
    for($i=0; count($arraynum)<15; $i++){
        $num = rand(0,15);
    if(!in_array($num, $arraynum)){
        $arraynum[] = $num;
        echo $arraynum[$i]."<br>";
    }else{
        $i--;
    }; 
   
    }

    ?>
</body>
</html>