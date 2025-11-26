<?php
    $teks = "Teknik Informatika";

    echo "Panjang teks: " . strlen($teks) . "<br>"; // Menghitung panjang string
    echo "Teks setelah diubah menjadi huruf besar: " . strtoupper($teks) . "<br>"; // Mengubah ke huruf besar
    echo "Teks setelah diubah menjadi huruf kecil: " . strtolower($teks) . "<br>"; // Mengubah ke huruf kecil
    echo "Teks setelah diganti: " . str_replace("Informatika", "Komputer", $teks) . "<br>"; // Mengganti substring
    echo "Posisi kata 'Informatika' dalam teks: " . strpos($teks, "Informatika") . "<br>"; // Mencari posisi substring
    echo "Teks setelah dipotong: " . substr($teks, 7, 10) . "<br>"; // Memotong string
    echo "Teks setelah dihapus spasi di awal dan akhir: '" . trim($teks) . "'<br>"; // Menghapus spasi di awal dan akhir string

    $nama = "Admin";
    $id_admin = 12345;
    
    function berhasil($namaUser, $idUser) {
        echo "Halo $namaUser, ID Anda adalah $idUser. <br>";
        echo "Fungsi berhasil dijalankan!";
    }
    
    echo "<br>";
    echo "Contoh penggunaan fungsi yg dibuat sendiri: <br>";
   berhasil($nama, $id_admin);
?>