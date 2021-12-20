<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>snack5</title>
</head>
<body>
    <?php
    $p = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, beatae magni debitis reprehenderit impedit vitae ullam amet et soluta eaque repudiandae voluptas sunt, quidem voluptatum facere cum sapiente, Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione placeat cumque sunt pariatur adipisci quis tempora, aliquam dicta, in natus et fugiat esse molestiae culpa. Doloremque commodi architecto optio illum?Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur explicabo alias voluptate adipisci neque facilis exercitationem possimus ab omnis impedit quisquam dolorum harum dicta labore autem, earum ex itaque tenetur. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum molestias placeat quod nesciunt quae tempora id quas doloribus illo, vel sequi repudiandae in nostrum, recusandae aliquid quaerat, quis nemo totam! Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, beatae magni debitis reprehenderit impedit vitae ullam amet et soluta eaque repudiandae voluptas sunt, quidem voluptatum facere cum sapiente, Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione placeat cumque sunt pariatur adipisci quis tempora, aliquam dicta, in natus et fugiat esse molestiae culpa. Doloremque commodi architecto optio illum?Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur explicabo alias voluptate adipisci neque facilis exercitationem possimus ab omnis impedit quisquam dolorum harum dicta labore autem, earum ex itaque tenetur. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum molestias placeat quod nesciunt quae tempora id quas doloribus illo, vel sequi repudiandae in nostrum, recusandae aliquid quaerat, quis nemo totam!";
    $frasi = explode(".", $p);
    for($i=0; $i<count($frasi); $i++){
        echo "<div>".$frasi[$i]."<br>"."</div>";
    }
    ?>
</body>
</html>