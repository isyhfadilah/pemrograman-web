<?php
    $buah = ["Mangga", "Pisang", "Jeruk", "Apel", "Anggur"];
    $sayur = array("Wortel", "Bayam", "Kangkung", "Sawi", "Brokoli");

    foreach($buah as $item) {
        echo "Saya suka buah: " . $item . "<br>";
    }
    
    echo "<br>";

    foreach($sayur as $item) {
        echo "Saya suka sayur: " . $item . "<br>";
    }

    $kumpulanBuah = ["Mangga", "Pisang", "Jeruk", "Apel", "Anggur"];
    $kumpulanBuah[] = "Nanas"; // Menambahkan elemen baru ke array

    echo "<br><strong>Daftar buah beserta indeksnya:</strong><br>";
    foreach($kumpulanBuah as $angka_buah => $buah) {
        echo "Buah $buah ada di indeks ke-" . ($angka_buah + 1) . "<br>";
    }
?>