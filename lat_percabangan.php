<?php
// Deklarasi variabel
$uts = 65;
$uas = 85;

// Logika percabangan
if ($uts >= 80 && $uas >= 80) {
    echo "Predikat A <br>";
} elseif ($uts >= 60 && $uas >= 60) {
    echo "Predikat B <br>";
} elseif ($uts >= 40 || $uas >= 40) {
    echo "Predikat C <br>";
} else {
    echo "Predikat D <br>";
}

// Menampilkan pesan akhir
echo "Penilaian selesai";
?>