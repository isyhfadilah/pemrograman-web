<?php 
    $nama = "Aisyah Nur Fadilah";
    $usia = 20;

    function tampilNama(){
        global $nama;
        global $usia;
        echo $nama . " " . $usia . " tahun.";
        echo "<br> Sukses mengakses variabel global di dalam fungsi";
    }

    tampilNama();
    
?>