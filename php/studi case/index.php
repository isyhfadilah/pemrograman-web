<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Manajemen Karyawan</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>PT. Unicorn Bercahaya</h1>
        <p>Sistem Manajemen Keuangan</p>
    </header>

    <main>
        <?php 
            $perusahaan = [
                "Divisi IT" => [
                    [
                        "nama" => "Aisyah Nur Fadilah",
                        "jabatan" => "Lead UI/UX Designer",
                        "gaji" => 10000000000,
                        "status" => "Aktif",
                        "divisi" => "IT"
                    ],
                    [
                        "nama" => "Hermansyah",
                        "jabatan" => "Web Developer",
                        "gaji" => 2000000000,
                        "status" => "Aktif",
                        "divisi" => "IT"
                    ]
                ],
                "Divisi HR" => [
                    [
                        "nama" => "Anisa",
                        "jabatan" => "HR Manager",
                        "gaji" => 750000000,
                        "status" => "Aktif",
                        "divisi" => "HR"
                    ],
                    [
                        "nama" => "Sutiawan",
                        "jabatan" => "Recruitment",
                        "gaji" => 50000000,
                        "status" => "Aktif",
                        "divisi" => "HR"
                    ]
                ],
                "Divisi Finance" => [
                    [
                        "nama" => "Ahmad Superstar",
                        "jabatan" => "Finance Manager",
                        "gaji" => 10000000,
                        "status" => "Aktif",
                        "divisi" => "Finance"
                    ],
                    [
                        "nama" => "John Do",
                        "jabatan" => "Accountant",
                        "gaji" => 5000000,
                        "status" => "Aktif",
                        "divisi" => "Finance"
                    ]
                ]
            ];

            foreach($perusahaan as $divisi => $all_karyawan): ?>
                <h2><?php echo $divisi; ?></h2> 
                <table>
                    <tr>
                        <th>Nama</th>
                        <th>Jabatan</th>
                        <th>Gaji</th>
                        <th>Status</th>
                        <th>Divisi</th>
                    </tr>
                    <?php foreach($all_karyawan as $karyawan): ?>
                    <tr>
                        <td><?php echo $karyawan["nama"]; ?></td>
                        <td><?php echo $karyawan["jabatan"]; ?></td>
                        <td><?php echo number_format($karyawan["gaji"], 0, ",", "."); ?></td>
                        <td><?php echo $karyawan["status"] ?></td>
                        <td><?php echo $karyawan["divisi"] ?></td>
                    </tr>
                    <?php endforeach; ?>
                </table> 
            <?php endforeach; ?>  
    </main>
    
    <footer>
        <p>&copy 2025 All Right Reserved. PT. Unicorn Bercahaya</p>
    </footer>
</body>
</html>