<?php 
    include 'function.php';

    $divisiList = ['Product Design', 'IT Development', 'Human Resource', 'Finance', 'Marketing', 'Data Science', 'Customer Support', 'Management', 'Security', 'Administration'];
    $karyawanList = [];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Manajemen Karyawan</title>
    <link rel="stylesheet" href="style-baru.css">
</head>
<body>
    <header>
        <h1>PT. Unicorn Bercahaya</h1>
        <p>Sistem Manajemen Keuangan</p>
    </header>

    <main>
        <?php 
        foreach($divisiList as $namaDivisi) {
            $karyawanList = array_merge($karyawanList, ambilKaryawan($namaDivisi));
        }
        ?>

        <div class="title">
            <h2>Daftar Karyawan</h2>
            <a href="insert.php" class="btn">Tambah Data</a>
        </div>
        <table>
            <tr>
                <th>No</th>
                <th>Aksi</th>
                <th>Foto</th>
                <th>Nama</th>
                <th>Jabatan</th>
                <th>Gaji</th>
                <th>Status</th>
                <th>Divisi</th>
            </tr>
            <?php
                $i = 1;
                foreach($karyawanList as $karyawan) : 
                ?>
            <tr>
                <td><?= $i++; ?></td>
                <td> 
                    <a href="#" class="">Ubah</a>
                    <a href="#" class="">Hapus</a>
                </td>
                <td>
                    <img src="gambar/<?= htmlspecialchars($karyawan['gambar']);?>" alt="<?= $karyawan['nama']; ?>" width="100px" height="100px" style="border-radius: 10px">
                </td>
                <td><?= $karyawan['nama'] ;?></td>
                <td><?= $karyawan['jabatan'] ;?></td>
                <td><?= $karyawan['gaji'] ;?></td>
                <td><?= $karyawan['status'] ;?></td>
                <td><?= $karyawan['divisi'] ;?></td>
            </tr>
            <?php endforeach; ?>
        </table>
    </main>
    
    <footer>
        <p>&copy 2025 All Right Reserved. PT. Unicorn Bercahaya</p>
    </footer>
</body>
</html>