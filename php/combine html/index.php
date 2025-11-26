<?php
    $nama = "Aisyah Nur Fadilah";
    $umur = 20;
    $program_studi = "Informatika";
    $ipk = 4.00;
    $lulus = true;

    if ($ipk >= 3.8) {
        $predikat = "Cumlaude";
    } else {
        $predikat = "Baik";
    }

    function sapa($nama) {
        return "Hola, nama saya adalah $nama";
    }

    echo "<h1>" . sapa($nama) . "</h1>";

    // echo "<h1>Hola, nama saya adalah $nama</h1>";

    // echo "Hola, nama saya adalah $nama, umur saya saat ini $umur tahun. Saya merupakan salah satu mahasiswa $program_studi di SATU University dengan ipk $ipk.";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Variable PHP</title>

    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section class="about">
        <h2>Hola, Satutizen!</h2>

        <div class="information">
            <p>Nama: <?php echo $nama; ?></p>
            <p>Umur: <?php echo $umur; ?> tahun</p>
            <p>Program Studi: <?php echo $program_studi; ?></p>
            <p>IPK: <?php echo $ipk; ?></p>
            <p>Kelulusan: <?php echo $lulus ? "Sudah Lulus" : "Belum Lulus"; ?></p>
            <p>Predikat: <?php echo $predikat; ?></p>
        </div>
    </section>
    
</body>
</html>

