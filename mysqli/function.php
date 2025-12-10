<?php

function koneksiDB() {
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "karyawan";
    $port = 8080;

    $conn = mysqli_connect($host, $user, $pass, $db, $port);

    if(!$conn) {
        die("Koneksi gagal: " . mysqli_connect_error());
    } 

    return $conn;
}

function ambilKaryawan($divisi) {
    $conn = koneksiDB();
    $query = "SELECT * FROM karyawan WHERE divisi = '$divisi'";
    $result = mysqli_query($conn, $query);

    $data = [];
    while($item = mysqli_fetch_assoc($result)) {
        $data[] = $item;
    }

    mysqli_close($conn);
    return $data;
}


?>