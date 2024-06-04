<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Nilai</title>
</head>

<body>
    <form method="post" action="">
        Nama: <input type="text" name="nama" required><br>
        Nilai: <input type="number" name="nilai" required><br>
        <input type="submit" name="submit" value="Submit">
    </form>
</body>

<?php
if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $nilai = $_POST['nilai'];

    echo "<h2>Hasil:</h2>";
    echo "Nama: $nama <br>";
    echo "Nilai: $nilai <br>";

    if ($nilai > 80) {
        echo "Klasifikasi: A";
    } elseif ($nilai > 70 && $nilai <= 80) {
        echo "Klasifikasi: B";
    } elseif ($nilai > 60 && $nilai <= 70) {
        echo "Klasifikasi: C";
    } elseif ($nilai > 50 && $nilai <= 60) {
        echo "Klasifikasi: D";
    } else {
        echo "Klasifikasi: Tidak Lulus";
    }
}
?>
</body>
</html>