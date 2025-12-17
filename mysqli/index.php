<?php 
    if(file_exists('function.php')) {
        include 'function.php';
    }

    $divisiList = ['Product Design', 'IT Development', 'Human Resource', 'Finance', 'Marketing', 'Data Science', 'Customer Support', 'Management', 'Security', 'Administration'];
    $karyawanList = [];
?>

<!DOCTYPE html>
<html lang="id">    
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Karyawan | PT. Unicorn Bercahaya</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Inter', sans-serif; }
    </style>
</head>
<body class="bg-gray-50 text-gray-800 min-h-screen flex flex-col">

    <header class="bg-white shadow-sm sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-16 flex items-center justify-between">
            <div class="flex items-center gap-2">
                <div class="w-8 h-8 bg-indigo-600 rounded-lg flex items-center justify-center">
                    <span class="text-white font-bold text-lg">N</span>
                </div>
                <div>
                    <h1 class="text-xl font-bold text-gray-900 tracking-tight">PT. Nusa Technology</h1>
                    <p class="text-xs text-gray-500 font-medium">Sistem Manajemen Karyawan</p>
                </div>
            </div>
            <a href="index.php" class="text-sm font-medium text-indigo-600 hover:text-indigo-500 transition">
                &larr; Kembali
            </a>
        </div>
    </header>

    <main class="flex-grow max-w-7xl w-full mx-auto py-10 px-4 sm:px-6 lg:px-8">
        
        <?php 
        foreach($divisiList as $namaDivisi) {
            $karyawanList = array_merge($karyawanList, ambilKaryawan($namaDivisi));
        }
        ?>

        <div class="sm:flex sm:items-center sm:justify-between mb-6">
            <div>
                <h2 class="text-2xl font-bold text-gray-900">Daftar Karyawan</h2>
                <p class="mt-1 text-sm text-gray-500">Total data karyawan dari seluruh divisi.</p>
            </div>
            <div class="mt-4 sm:mt-0">
                <a href="insert.php" class="inline-flex items-center justify-center px-4 py-2 border border-transparent rounded-lg shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 transition duration-200">
                    <svg class="-ml-1 mr-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd" />
                    </svg>
                    Tambah Data Baru
                </a>
            </div>
        </div>

        <div class="bg-white shadow-lg rounded-xl overflow-hidden border border-gray-200">
            <div class="overflow-x-auto">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                        <tr>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">No</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Karyawan</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Jabatan & Divisi</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Gaji</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                            <th scope="col" class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        <?php
                        $i = 1;
                        if (empty($karyawanList)) {
                            echo '<tr><td colspan="6" class="px-6 py-10 text-center text-gray-500">Belum ada data karyawan.</td></tr>';
                        } else {
                            foreach($karyawanList as $karyawan) : 
                                // Logic warna badge status
                                $statusClass = ($karyawan['status'] == 'Aktif') 
                                    ? 'bg-green-100 text-green-800' 
                                    : 'bg-red-100 text-red-800';
                        ?>
                        <tr class="hover:bg-gray-50 transition duration-150">
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                <?= $i++; ?>
                            </td>
                            
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex items-center">
                                    <div class="flex-shrink-0 h-10 w-10">
                                        <img class="h-10 w-10 rounded-full object-cover border border-gray-200" 
                                             src="gambar/<?= htmlspecialchars($karyawan['gambar'] ?? 'default.jpg'); ?>" 
                                             alt="<?= htmlspecialchars($karyawan['nama']); ?>"
                                             onerror="this.src='https://ui-avatars.com/api/?name=<?= urlencode($karyawan['nama']) ?>&background=random'">
                                    </div>
                                    <div class="ml-4">
                                        <div class="text-sm font-medium text-gray-900"><?= htmlspecialchars($karyawan['nama']); ?></div>
                                        <div class="text-sm text-gray-500">ID: #<?= rand(1000,9999); // Dummy ID ?></div>
                                    </div>
                                </div>
                            </td>

                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-900"><?= htmlspecialchars($karyawan['jabatan']); ?></div>
                                <div class="text-sm text-gray-500"><?= htmlspecialchars($karyawan['divisi']); ?></div>
                            </td>

                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600 font-medium">
                                <?= htmlspecialchars($karyawan['gaji']); ?>
                            </td>

                            <td class="px-6 py-4 whitespace-nowrap">
                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full <?= $statusClass ?>">
                                    <?= htmlspecialchars($karyawan['status']); ?>
                                </span>
                            </td>

                            <td class="px-6 py-4 whitespace-nowrap text-center text-sm font-medium">
                                <a href="update.php?id_karyawan=<?= htmlspecialchars($karyawan['id_karyawan']); ?>" class="text-indigo-600 hover:text-indigo-900 mr-3 transition">Ubah</a>
                                <a href="hapus.php?id_karyawan=<?= htmlspecialchars($karyawan['id_karyawan']); ?>" class="text-red-600 hover:text-red-900 transition">Hapus</a>
                            </td>
                        </tr>
                        <?php endforeach; 
                        } ?>
                    </tbody>
                </table>
            </div>
            <div class="bg-gray-50 px-4 py-3 border-t border-gray-200 sm:px-6">
                <div class="text-xs text-gray-500 text-center sm:text-left">
                    Menampilkan data karyawan terbaru
                </div>
            </div>
        </div>

    </main>

    <footer class="bg-white border-t border-gray-200 mt-auto">
        <div class="max-w-7xl mx-auto py-6 px-4 overflow-hidden sm:px-6 lg:px-8">
            <p class="text-center text-sm text-gray-400">
                &copy; 2025 PT. Unicorn Bercahaya. All rights reserved.
            </p>
        </div>
    </footer>

</body>
</html>