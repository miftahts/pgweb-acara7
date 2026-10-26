<?php
// Perulangan while
/*
$n = 5;
while ($n > 0) {
    echo $n . "<br>";
    $n = $n - 1;
}
*/

// Perulangan for
/*
for ($n = 2; $n <= 10; $n += 2) {
    echo $n . "<br>";
}
*/

// Deklarasi array
$hari = array("Senin", "Selasa", "Rabu", "Kamis", "Jumat");

// Perulangan foreach
foreach ($hari as $h) {
    echo "$h <br>";
}

// Menampilkan isi array dengan for
for ($i = 0; $i < 3; $i++) {
    echo $hari[$i] . "<br>";
}
?>