<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>String PHP</title>
    </head>
        <body>
            <h1>Berlatih String PHP</h1>
            <?php
            echo "<h3> Soal No 1</h3>";

            //First Sentence
            $first_sentence = "<p>Hello PHP!<p/>";
            $hasil = strlen($first_sentence);
            $hasil1 = str_word_count($first_sentence);
            echo $first_sentence;
            echo ("<pre>Panjang String : $hasil</pre>"); // Panjang string 10, jumlah kata: 2
            echo "<pre>Jumlah Kata : $hasil1</pre>";

            //Second Sentence
            $second_sentence = "I'm ready for the challenges"; // Panjang string: 28, jumlah kata: 5
            $hasil2 = strlen($second_sentence);
            $hasil3 = str_word_count($second_sentence);
            echo $second_sentence;
            echo ("<pre>Panjang String : $hasil2</pre>"); // Panjang string 10, jumlah kata: 2
            echo "<pre>Jumlah Kata : $hasil3</pre>";

            // Mengambil kata pada string dan karakter-karakter yang ada di dalamnya.
            echo "<h3> Soal No 2</h3>";
            $string2 = "I love PHP";
            echo "<label>String: </label> \"$string2\" <br>";
            echo "Kata pertama: " . substr($string2, 0, 1) . "<br>" ;

            // Mengubah karakter atau kata yang ada di dalam sebuah string.
            echo "<h3> Soal No 3 </h3>";
            $string3 = "PHP is old but Good!";
            echo str_replace("Good", "awesome",$string3);
            // OUTPUT : "PHP is old but awesome"

            ?>
            


            <?php
            //First Sentence
            $first_sentence = "<p>Hello PHP!<p/>";
            $hasil = strlen($first_sentence);
            $hasil1 = str_word_count($first_sentence);
            echo $first_sentence;
            echo ("<pre>Panjang String : $hasil</pre>"); // Panjang string 10, jumlah kata: 2
            echo "<pre>Jumlah Kata : $hasil1</pre>";
            ?>
            <hr/>
        </body>
</html>