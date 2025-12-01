<?php
    $person = [
        "nama" => "Aisyah Nur Fadilah",
        "umur" => 20,
        "pekerjaan" => "UI/UX Designer",
        "kota" => "Bandung"
    ];

    $person["no hp"] = "08123456789";
    $person["hobi"] = "Baca";

    foreach($person as $key => $value) {
        echo ucfirst($key) . ": " . $value . "<br>";
    }

    echo "<br><br>";
    $person["hobi"] = "Nyanyi";

    foreach($person as $key => $value) {
        echo ucfirst($key) . ": " . $value . "<br>";
    }

    echo "<br><br>";
    unset($person["kota"]);

    foreach($person as $key => $value) {
        echo ucfirst($key) . ": " . $value . "<br>";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Asosiatif</title>
</head>
<body>
    <br>
    <p>Namanya adalah <?php echo $person["nama"]; ?></p>
</body>
</html>