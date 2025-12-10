<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Baru | Sistem Manajemen Karyawan</title>
    <link rel="stylesheet" href="style-baru.css">
</head>
<body>
    <header>
        <h1>PT. Unicorn Bercahaya</h1>
        <p>Sistem Manajemen Keuangan</p>
    </header>

    <main>
        <h2>Tambah Data Karyawan</h2>
        <form action="" method="POST" encytype="multipart/form-data">
            <div>
                <label for="nama">Nama: </label>
                <input type="text" id="nama" name="nama" required>
            </div>
            <div>
                <label for="jabatan">Jabatan: </label>
                <input type="text" id="jabatan" name="jabatan" required>
            </div>
            <div>
                <label for="">Gaji: </label>
                <input type="text" id="gaji" name="gaji" required>
            </div>
            <div>
                <label for="status">Status: </label>
                <select name="status" id="status">
                    <option value="Aktif">Aktif</option>
                    <option value="Nonaktif">Nonaktif</option>
                </select>
            </div>
            <div>
                <label for="divisi">Dvisi: </label>
                <select name="divisi" id="divisi">
                    <option value="IT">IT</option>
                    <option value="HR">HR</option>
                    <option value="Finance">Finance</option>
                </select>
            </div>
            <div>
                <label for="gambar">Gambar: </label>
                <input type="file" id="gambar" name="gambar" accept="image/*" required>
            </div>
            <div>
                <button type="submit" value="Tambah Data" class="button">Submit Data</button>
            </div>
        </form>

        <div>
            <a href="index.php" class="button">Kembali ke beranda</a>
        </div>
    </main>

    <footer>
        <p>&copy 2025 All Right Reserved. PT. Unicorn Bercahaya</p>
    </footer>
</body>
</html>