<?php
    $foxes = [
        "https://randomfox.ca/images/1.jpg",
        "https://randomfox.ca/images/2.jpg",
        "https://randomfox.ca/images/3.jpg",
    ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>HTML from PHP</h1>
    <?php
        foreach($foxes as $fox) {
    ?>
        <img src="<?php echo $fox; ?>">
    <?php
        }
    ?>
</body>
</html>
