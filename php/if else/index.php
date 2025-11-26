<?php
    $data_sensor_kecepatan = 80;
    $data_sensor_ketinggian = 30;

    if($data_sensor_kecepatan >= 65 && $data_sensor_ketinggian < 20) {
        echo "Kecepatan tinggi dan ketinggian rendah: Aktifkan mode darurat!";
    } elseif($data_sensor_kecepatan < 65 && $data_sensor_ketinggian >= 20) {
        echo "Kecepatan normal dan ketinggian tinggi: Pertahankan mode jelajah.";
    } elseif($data_sensor_kecepatan >= 65 && $data_sensor_ketinggian >= 20) {
        echo "Kecepatan tinggi dan ketinggian tinggi: Kurangi kecepatan dan turunkan ketinggian.";
    } else {
        echo "Kecepatan normal dan ketinggian normal: Teruskan penerbangan.";
    }
?>