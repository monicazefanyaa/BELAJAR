<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operator Percabangan</title>
    <?php
    // Mengambil input dari user
    $nama = readline("Monica Zefanya: ");
    $nilai = readline("95: ");
    
    // Klasifikasi nilai
    if ($nilai > 80) {
        $kelas = "A";
    } elseif ($nilai >= 70 && $nilai <= 79) {
        $kelas = "B";
    } elseif ($nilai >= 60 && $nilai <= 69) {
        $kelas = "C";
    } elseif ($nilai >= 50 && $nilai <= 59) {
        $kelas = "D";
    } else {
        $kelas = "Tidak Lulus";
    }
    
    // Menampilkan hasil
    echo "Nama: $nama\n";
    echo "Nilai: $nilai\n";
    echo "Kelas: $kelas\n";
    ?>
    
    
</head>
<body>
</body>
</html>