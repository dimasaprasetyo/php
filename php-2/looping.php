<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Looping</title>
    </head>
    <body>
        <h1>Berlatih Looping</h1>
        <?php
        echo "<h3>Soal No 1 Looping I Love PHP</h3>";
        /*
        Soal No 1
        Looping I Love PHP
        Lakukan Perulangan (boleh for/while/do while) sebanyak 20 iterasi. Looping terbagi menjadi dua: Looping yang pertama Ascending
        (meningkat)
        dan Looping yang ke dua menurun (Descending).*/
        echo "<h3>Looping Pertama</h3>";
        $bilangan = 2;
        while($bilangan <= 20) {
            echo "$bilangan - I Love PHP<br>";
            $bilangan+=2;
        }
        echo "<h3>Looping Kedua</h3>";
        $bilangan = 20;
        while($bilangan > 0) {
            echo "$bilangan - I Love PHP<br>";
            $bilangan-=2;
        }
        ?>
        <hr>
        <?php
        echo "<h3>Soal No 2 Looping Array Module</h3>";
        /*
        Soal No 2
        Looping Array Module
        Carilah sisa bagi dengan angka 5 dari setiap angka pada array berikut.
        Tampung ke dalam array baru bernama $rest
        */
        $numbers = [18, 45, 29, 61, 47, 34];
        echo "array numbers: ";
        print_r($numbers);
        // Lakukan Looping di sini
        for ($i=0; $i < count($numbers);  $i++) {
            $rest[$i] = $numbers[$i] % 5;
        };
        echo "<br>";
        echo "Array sisa baginya adalah:  ";
        print_r($rest);
        echo "<br>";    
        ?>
        <hr>
        <?php     
        echo "<h3> Soal No 3 Looping Asociative Array </h3>";
        /*
        Soal No 3
        Loop Associative Array
        Terdapat data items dalam bentuk array dimensi. Buatlah data tersebut ke dalam bentuk Array Asosiatif.
        Setiap item memiliki key yaitu : id, name, price, description, source.
        */
        $items = [
        ['001', 'Keyboard Logitek', 60000, 'Keyboard yang mantap untuk kantoran', 'logitek.jpeg'],
        ['002', 'Keyboard MSI', 300000, 'Keyboard gaming MSI mekanik', 'msi.jpeg'],
        ['003', 'Mouse Genius', 50000, 'Mouse Genius biar lebih pinter', 'genius.jpeg'],
        ['004', 'Mouse Jerry', 30000, 'Mouse yang disukai kucing', 'jerry.jpeg']
        ];
        // Output:   
        foreach ($items as $label => $value){
            $item = [
                "id" => $value[0],
                "name" => $value[1],
                "price" => $value[2],
                "description" => $value[3],
                "name" => $value[4]
            ];
            print_r($item);
            echo "<br>";
        }
            ?>
            <?php
            echo "<h3>Soal No 4 Asterix </h3>";
            /*
            Soal No 4
            Asterix 5x5
            Tampilkan dengan looping dan echo agar menghasilkan kumpulan bintang dengan pola seperti berikut:
            */
            $star=5;
            for($a=$star;$a>0;$a--){
                for($b=$star;$b>=$a;$b--){
                    echo "*";
                }
                echo "<br>";
            }            
            
            ?>









        
        
        

</body>
</html>