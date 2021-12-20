<!-- Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri,
che mail contenga un punto e una chiocciola e che age sia un numero.
Se tutto è ok stampare "Accesso riuscito", altrimenti "Accesso negato" -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>snack2</title>
</head>
<body>
    <?php
    $nome = $_GET["name"];
    $email = $_GET["mail"];
    $ages = $_GET["age"];
    
    if (str_contains($email, '@') && str_contains($email, '.') && is_numeric($ages) && strlen($nome)>3){
        echo "<div>accesso effettuato</div>"; 
    }else{
        echo "<div>accesso negato</div>";
    }
    ?>
    
    
</body>
</html>