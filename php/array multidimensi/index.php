<?php
    $kumpulan_pegawai = [
        [
            "nama" => "Aisyah Nur Fadilah",
            "umur" => 20,
            "pekerjaan" => "UI/UX Designer",
            "kota" => "Bandung"
        ],
        [
            "nama" => "Rafli Maulana",
            "umur" => 20,
            "pekerjaan" => "Front End Developer",
            "kota" => "Bandung"
        ],
        [
            "nama" => "Zam zam",
            "umur" => 20,
            "pekerjaan" => "UI/UX Designer",
            "kota" => "Jakarta"
        ]
    ];

    foreach ($kumpulan_pegawai as $pegawai) {
        echo "Nama: " . $pegawai["nama"] . "<br>";
        echo "Umur: " . $pegawai["umur"] . "<br>";
        echo "Pekerjaan: " . $pegawai["pekerjaan"] . "<br>";
        echo "Kota: " . $pegawai["kota"] . "<br>";
        echo "---------------------";
        echo "<br>";
    }
   
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Multidimensi</title>
</head>
<body>

</body>
</html>