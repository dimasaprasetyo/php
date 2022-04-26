<?php
    class Frog extends Animal
    {
    public function jump()
    {
        return "Hop Hop";
    }
    }

    $kodok = new Frog("buduk");
    echo "Name : ".$kodok->name."<br>"; // "buduk"
    echo "Legs : ".$kodok->legs."<br>"; // 4
    echo "Cold Blooded : ".$kodok->cold_blooded."<br>"; // "no"
    echo "Jump : ".$kodok->jump()."<br>"; // "hop hop"

?>
            