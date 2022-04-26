<?php
    class Ape extends Animal
    {
    public function yell()
    {    
        return "Auooo";
    }
    }

    $sungokong = new Ape("kera sakti");
            echo "Name : ".$sungokong->name."<br>"; // "buduk"
            echo "Legs : ".$kodok->legs = 2 ."<br>";// 2;
            echo "Cold Blooded : ".$sungokong->cold_blooded."<br>"; // "no"
            echo "Jump : ".$sungokong->yell()."<br>"; // "hop hop"
?>
