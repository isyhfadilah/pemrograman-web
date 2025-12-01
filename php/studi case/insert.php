<?php
    $nama = $_GET["nama"];
    $umur = $_GET["umur"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert</title>
</head>
<body>
    <p>Nama: <?php echo $nama . "<br>"; ?></p>
    <p>Umur: <?php echo $umur . "<br>"; ?></p>
</body>
</html>