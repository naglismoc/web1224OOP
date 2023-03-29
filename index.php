
<?php include "./Animal.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $animal = new Animal();
    print_r($animal);
    echo "<br>";
    $animal->name = "Julian";
    $animal->species = "Lemur";
    $animal->year = 3;
    $animal->gender = true;
    print_r($animal);
    
    echo "<br>";
    $animal2 = new Animal("Kitty softpaws", "cat", 5, false);
    var_dump($animal2);
    echo "<br>";
    echo "<br>";
    echo "<br>";

    $animal->intro();
    $animal2->intro();

    Animal::classInfo();
?>
</body>
</html>