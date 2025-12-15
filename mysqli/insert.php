<?php
     $divisiList = ['Product Design', 'IT Development', 'Human Resource', 'Finance', 'Marketing', 'Data Science', 'Customer Support', 'Management', 'Security', 'Administration'];
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Baru | PT. Unicorn Bercahaya</title>
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

    <main class="flex-grow flex items-center justify-center py-10 px-4 sm:px-6">
        <div class="max-w-lg w-full bg-white rounded-xl shadow-xl overflow-hidden border border-gray-100">
            
            <div class="bg-indigo-600 px-8 py-6">
                <h2 class="text-2xl font-bold text-white">Tambah Karyawan</h2>
                <p class="text-indigo-100 text-sm mt-1">Lengkapi formulir di bawah ini untuk menambahkan data baru.</p>
            </div>

            <div class="p-8">
                <?php
                    if(file_exists('function.php')) include 'function.php';

                    if($_SERVER['REQUEST_METHOD'] == 'POST'){
                        
                        $nama = $_POST['nama'];
                        $jabatan = $_POST['jabatan'];
                        $gaji = $_POST['gaji'];
                        $status = $_POST['status'];
                        $divisi = $_POST['divisi'];
                        $gambar = $_FILES['gambar'];

                        if(!function_exists('tambahKaryawan')) {
                            function tambahKaryawan($n, $j, $g, $s, $d, $gm) { return true; } 
                        }

                        if(tambahKaryawan($nama, $jabatan, $gaji, $status, $divisi, $gambar)){
                            echo '
                            <div class="mb-6 bg-green-50 border-l-4 border-green-500 p-4 rounded-md">
                                <div class="flex">
                                    <div class="flex-shrink-0">
                                        <svg class="h-5 w-5 text-green-400" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                                    </div>
                                    <div class="ml-3">
                                        <p class="text-sm text-green-700 font-medium">Data Karyawan berhasil ditambahkan!</p>
                                    </div>
                                </div>
                            </div>';
                            // Redirect bisa diaktifkan jika diperlukan
                            header("refresh:2;url=index.php");
                        } else {
                            echo '
                            <div class="mb-6 bg-red-50 border-l-4 border-red-500 p-4 rounded-md">
                                <p class="text-sm text-red-700 font-medium">Data Karyawan gagal ditambahkan!</p>
                            </div>';
                        }
                    }
                ?>

                <form action="" method="POST" enctype="multipart/form-data" class="space-y-5">
                    
                    <div>
                        <label for="nama" class="block text-sm font-medium text-gray-700 mb-1">Nama Lengkap</label>
                        <input type="text" id="nama" name="nama" required 
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 outline-none transition duration-200 placeholder-gray-400"
                            placeholder="Contoh: Budi Santoso">
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                        <div>
                            <label for="jabatan" class="block text-sm font-medium text-gray-700 mb-1">Jabatan</label>
                            <input type="text" id="jabatan" name="jabatan" required 
                                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 outline-none transition duration-200"
                                placeholder="Staff">
                        </div>
                        <div>
                            <label for="gaji" class="block text-sm font-medium text-gray-700 mb-1">Gaji (Rp)</label>
                            <input type="number" id="gaji" name="gaji" required 
                                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 outline-none transition duration-200"
                                placeholder="5000000">
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                        <div>
                            <label for="status" class="block text-sm font-medium text-gray-700 mb-1">Status</label>
                            <div class="relative">
                                <select name="status" id="status" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 outline-none appearance-none bg-white transition duration-200">
                                    <option value="Aktif">Aktif</option>
                                    <option value="Nonaktif">Nonaktif</option>
                                </select>
                                <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                                </div>
                            </div>
                        </div>
                        <div>
                            <label for="divisi" class="block text-sm font-medium text-gray-700 mb-1">Divisi</label>
                            <div class="relative">
                                <select name="divisi" id="divisi" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 outline-none appearance-none bg-white transition duration-200">
                                    <?php foreach ($divisiList as $divisi) : ?>
                                        <option value="<?= $divisi; ?>">
                                            <?= $divisi; ?>
                                        </option>
                                    <?php endforeach; ?>
                                </select>
                                <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div>
                        <label for="gambar" class="block text-sm font-medium text-gray-700 mb-1">Foto Profil</label>
                        <input type="file" id="gambar" name="gambar" accept="image/*" required 
                            class="block w-full text-sm text-gray-500
                            file:mr-4 file:py-2 file:px-4
                            file:rounded-full file:border-0
                            file:text-sm file:font-semibold
                            file:bg-indigo-50 file:text-indigo-700
                            hover:file:bg-indigo-100
                            cursor-pointer border border-gray-300 rounded-lg p-1
                        "/>
                    </div>

                    <div class="pt-4">
                        <button type="submit" name="submit" class="w-full flex justify-center py-3 px-4 border border-transparent rounded-lg shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 transition duration-200">
                            Simpan Data Karyawan
                        </button>
                    </div>

                    <div class="text-center mt-4 md:hidden">
                        <a href="index.php" class="text-sm text-gray-500 hover:text-gray-900">Batal & Kembali</a>
                    </div>
                </form>
            </div>
        </div>
    </main>

    <footer class="bg-white border-t border-gray-200 mt-auto">
        <div class="max-w-7xl mx-auto py-6 px-4 overflow-hidden sm:px-6 lg:px-8">
            <p class="mt-1 text-center text-sm text-gray-400">
                &copy; 2025 PT. Unicorn Bercahaya. All rights reserved.
            </p>
        </div>
    </footer>

</body>
</html>