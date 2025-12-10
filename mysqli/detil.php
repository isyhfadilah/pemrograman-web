<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>PT. Unicorn Bercahaya</h1>
        <p>Sistem Manajemen Karyawan</p>
    </header>

    <main>
        <h2>Informasi Detil Karyawan</h2>
        <ul style="list-style: none; padding 0;">
            <li>
                <img src="gambar/<?php echo $_GET['gambar']; ?>" alt="gambar/<?php echo $_GET['gambar']; ?>" 
                width="150px" style="border-radius: 5px; margin-bottom: 4px";>
            </li>
            <li><strong>Nama:</strong> <?php echo $_GET['nama']; ?></li>
            <li><strong>Jabatan:</strong> <?php echo $_GET['jabatan']; ?></li>
            <li><strong>Gaji:</strong> Rp. <?php echo $_GET['gaji']; ?></li>
            <li><strong>Status:</strong> <?php echo $_GET['status']; ?></li>
            <li><strong>Divisi:</strong> <?php echo $_GET['divisi']; ?></li>
        </ul>

    </main>

    
    <footer>
        <p>2025 PT. Unicorn Bercahaya</p>
    </footer>
    
</body>
</html>