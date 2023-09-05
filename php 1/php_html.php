<?php
    $zorritos = array(
        "https://randomfox.ca/images/1.jpg", 
        "https://randomfox.ca/images/2.jpg", 
        "https://randomfox.ca/images/3.jpg",
    );
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zorritos</title>
</head>
<body>
    <h1>PHP con HTML!!</h1>

    <?php foreach( $zorritos as $zorrito){ ?>

            <img src="<?php echo $zorrito; ?>" alt="">

    <?php    } ?>
   
</body>
</html>