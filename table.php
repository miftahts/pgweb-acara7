<?php
$kecamatan = ["Moyudan", "Minggir", "Seyegan", "Godean", "Gamping"];
$luas = [27.62, 27.27, 26.63, 26.84, 29.25];
$jumlah_penduduk = [31497, 29886, 47129, 72028, 108675];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Kecamatan</title>
</head>
<body>
    <table border="1">
        <tr>
            <td>kecamatan</td>
            <td>luas</td>
            <td>jumlah_penduduk</td>
        </tr>
        <?php foreach ($kecamatan as $i => $nama) { ?>
        <tr>
            <td><?php echo $nama; ?></td>
            <td><?php echo $luas[$i]; ?></td>
            <td><?php echo $jumlah_penduduk[$i]; ?></td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>