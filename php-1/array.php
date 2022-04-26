<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Array</title>
    </head>
    <body>
        <h1>Berlatih Array</h1>
        <?php
        echo "<h3> Soal 1 </h3>";
        /*
        SOAL NO 1
        Kelompokkan nama-nama di bawah ini ke dalam Array.
        Kids : "Mike", "Dustin", "Will", "Lucas", "Max", "Eleven"
        Adults: "Hopper", "Nancy", "Joyce", "Jonathan", "Murray"
        */
        $kids = array ("Mike", "Dustin", "Will", "Lucas", "Max", "Eleven"); // Lengkapi di sini
        $adults = ["Hopper", "Nancy", "Joyce", "Jonathan", "Murray"];
        print_r($kids);
        print_r($adults);
        echo "<h3> Soal 2</h3>";
        /*
        SOAL NO 2
        Tunjukkan panjang Array di Soal No 1 dan tampilkan isi dari masing-masing Array.
        */
        echo "Cast Stranger Things: ";
        echo "<br>";
        $panjangkids = count($kids);
        echo "Total Kids: $panjangkids "; // Berapa panjang array kids
        echo "<br>";
        echo "<ol>";
        echo "<li> $kids[0] </li>";
        // Lanjutkan
        echo "</ol>";
        $panjangadults = count($kids);
        echo "Total Adults: $panjangadults "; // Berapa panjang array adults
        echo "<br>";
        echo "<ol>";
        echo "<li> $adults[0] </li>";
        // Lanjutkan
        echo "</ol>";

        $peserta = [
            array("Nama" => "Will Byers", "Age" => 12, "Aliases" => "Will the Wise", "Status" => "Alive"),
            array("Nama" => "Mike Wheeler", "Age" => 12, "Aliases" => "Dungeon MAster", "Status" => "Alive"),
            array("Nama" => "Jim Hopper", "Age" => 43, "Aliases" => "Chief Hopper", "Status" => "Deceased"),
            array("Nama" => "Eleven", "Age" => 12, "Aliases" => "El", "Status" => "Alive"),
            ];
        echo "<pre>";
        print_r($peserta);
        echo "</pre>";

        $siswa1 = [ "nama" => "abduh",
            "kelas" => "laravel",
            "nilai" => 70,
            ];
        echo "<pre>";
print_r($siswa1);
echo "</pre>";

// Output:
// Array
// (
// [0] => Array
// (
// [Name] => Will Byers
// [Age] => 12
// [Aliases] => Will the Wise
// [Status] => Alive
// )
// [1] => Array
// (
// [Name] => Mike Wheeler
// [Age] => 12
// [Aliases] => Dugeon Master
// [Status] => Alive
// )
// [2] => Array
// (
// [Name] => Jim Hooper
// [Age] => 43
// [Aliases] => Chief Hopper
// [Status] => Deceased
// )
// [3] => Array
// (
// [Name] => Eleven
// [Age] => 12
// [Aliases] => El
// [Status] => Alive
// )
// )
// */
?>
</body>
</html>