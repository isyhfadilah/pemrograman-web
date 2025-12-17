<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi User | PT. Nusa Technology</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Inter', sans-serif; }
    </style>
</head>
<body class="bg-gray-50 text-gray-800 min-h-screen flex flex-col">
    <?php
        include 'function.php';

        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            if(register($_POST) > 0) {
                echo "<script>
                        alert('Registrasi berhasil! Silakan login');
                        windows.location.href = 'login.php';    
                    </script>";
            } else {
                echo "<script>
                        alert('Registrasi tidak berhasil! Username atau email sudah terdaftar.');
                    </script>";

            }
        }
    
    ?>


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
            <a href="login.php" class="text-sm font-medium text-indigo-600 hover:text-indigo-500 transition">
                Sudah punya akun? Login
            </a>
        </div>
    </header>

    <main class="flex-grow flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
        <div class="max-w-md w-full space-y-8">
            <div class="text-center">
                <h2 class="text-3xl font-extrabold text-gray-900 tracking-tight">Buat Akun Baru</h2>
                <p class="mt-2 text-sm text-gray-500">
                    Daftarkan akun administrator untuk mengelola data karyawan.
                </p>
            </div>

            <div class="bg-white shadow-xl rounded-2xl border border-gray-100 overflow-hidden">
                <form action="" method="POST" class="p-8 space-y-6">
                    
                    <div>
                        <label for="username" class="block text-sm font-semibold text-gray-700">Username</label>
                        <div class="mt-1 relative">
                            <input type="text" name="username" id="username" required 
                                class="block w-full px-4 py-3 rounded-xl border-gray-200 bg-gray-50 text-gray-900 focus:ring-indigo-500 focus:border-indigo-500 transition border"
                                placeholder="pilih_username">
                        </div>
                    </div>

                    <div>
                        <label for="email" class="block text-sm font-semibold text-gray-700">Email Address</label>
                        <div class="mt-1 relative">
                            <input type="email" name="email" id="email" required 
                                class="block w-full px-4 py-3 rounded-xl border-gray-200 bg-gray-50 text-gray-900 focus:ring-indigo-500 focus:border-indigo-500 transition border"
                                placeholder="nama@perusahaan.com">
                        </div>
                    </div>

                    <div>
                        <label for="password" class="block text-sm font-semibold text-gray-700">Password</label>
                        <div class="mt-1 relative">
                            <input type="password" name="password" id="password" required 
                                class="block w-full px-4 py-3 rounded-xl border-gray-200 bg-gray-50 text-gray-900 focus:ring-indigo-500 focus:border-indigo-500 transition border"
                                placeholder="••••••••">
                        </div>
                        <p class="mt-2 text-xs text-gray-400">Minimal 8 karakter dengan kombinasi angka dan huruf.</p>
                    </div>

                    <div>
                        <label for="confirm_password" class="block text-sm font-semibold text-gray-700">Confirm Password</label>
                        <div class="mt-1 relative">
                            <input type="password" name="confirm_password" id="confirm_password" required 
                                class="block w-full px-4 py-3 rounded-xl border-gray-200 bg-gray-50 text-gray-900 focus:ring-indigo-500 focus:border-indigo-500 transition border"
                                placeholder="••••••••">
                        </div>
                        <p class="mt-2 text-xs text-gray-400">Minimal 8 karakter dengan kombinasi angka dan huruf.</p>
                    </div>

                    <div class="pt-2">
                        <button type="submit" 
                            class="w-full flex justify-center py-3 px-4 border border-transparent text-sm font-bold rounded-xl text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 transition duration-200 shadow-lg shadow-indigo-100">
                            Daftar Sekarang
                        </button>
                    </div>

                    <div class="text-center">
                        <p class="text-sm text-gray-600">
                            Sudah memiliki akun? 
                            <a href="login.php" class="font-bold text-indigo-600 hover:text-indigo-500 transition-colors duration-200 ml-1">
                                Masuk di sini
                            </a>
                        </p>
                    </div>

                    <div class="text-center pt-2">
                        <p class="text-xs text-gray-400">
                            Dengan mendaftar, Anda menyetujui Ketentuan Layanan dan Kebijakan Privasi PT. Nusa Technology.
                        </p>
                    </div>
                </form>
            </div>
        </div>
    </main>

    <footer class="bg-white border-t border-gray-200 mt-auto">
        <div class="max-w-7xl mx-auto py-6 px-4 overflow-hidden sm:px-6 lg:px-8">
            <p class="text-center text-sm text-gray-400">
                &copy; 2025 PT. Nusa Technology. All rights reserved.
            </p>
        </div>
    </footer>

</body>
</html>