<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Class</title>
    </head>
    <body>
        <h1>Berlatih Class</h1>
        <?php
            class Animal
            {
            public $name;
            public $legs;
            public $cold_blooded;
            public function __construct($name)
            {
                $this->name = $name;
                $this->legs = 4;
                $this->cold_blooded = "no";
            }
            }
            $sheep = new Animal("shaun");
            echo $sheep->name."<br>"; // "shaun"
            echo $sheep->legs."<br>"; // 4
            echo $sheep->cold_blooded."<br>"; // "no"

            echo "<br>";
            require ('Frog.php');

            echo "<br>";
            require ('Ape.php');
            ?>
</body>
</html>

