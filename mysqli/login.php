<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | PT. Nusa Technology</title>
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
            <a href="index.php" class="text-sm font-medium text-gray-500 hover:text-indigo-600 transition">
                &larr; Beranda
            </a>
        </div>
    </header>

    <main class="flex-grow flex items-center justify-center py-12 px-4">
        <div class="max-w-md w-full">
            <div class="text-center mb-8">
                <h2 class="text-3xl font-extrabold text-gray-900 tracking-tight">Selamat Datang</h2>
                <p class="mt-2 text-sm text-gray-500">Silakan masuk untuk mengelola data karyawan</p>
            </div>

            <div class="bg-white shadow-xl rounded-2xl border border-gray-100 overflow-hidden">
                <form action="proses_login.php" method="POST" class="p-8 space-y-6">
                    
                    <div>
                        <label for="username" class="block text-sm font-semibold text-gray-700">Username / Email</label>
                        <input type="text" name="username" id="username" required 
                            class="mt-1 block w-full px-4 py-3 rounded-xl border-gray-200 bg-gray-50 text-gray-900 focus:ring-indigo-500 focus:border-indigo-500 transition border"
                            placeholder="Masukkan username anda">
                    </div>

                    <div>
                        <div class="flex items-center justify-between">
                            <label for="password" class="block text-sm font-semibold text-gray-700">Password</label>
                            <a href="#" class="text-xs font-medium text-indigo-600 hover:text-indigo-500">Lupa password?</a>
                        </div>
                        <input type="password" name="password" id="password" required 
                            class="mt-1 block w-full px-4 py-3 rounded-xl border-gray-200 bg-gray-50 text-gray-900 focus:ring-indigo-500 focus:border-indigo-500 transition border"
                            placeholder="••••••••">
                    </div>

                    <div class="flex items-center">
                        <input id="remember_me" name="remember_me" type="checkbox" 
                            class="h-4 w-4 text-indigo-600 focus:ring-indigo-500 border-gray-300 rounded">
                        <label for="remember_me" class="ml-2 block text-sm text-gray-600">Ingat saya di perangkat ini</label>
                    </div>

                    <div class="pt-2">
                        <button type="submit" 
                            class="w-full flex justify-center py-3 px-4 border border-transparent text-sm font-bold rounded-xl text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 transition duration-200 shadow-lg shadow-indigo-100">
                            Masuk Ke Sistem
                        </button>
                    </div>

                    <div class="text-center pt-2">
                        <p class="text-sm text-gray-600">
                            Belum memiliki akun? 
                            <a href="register.php" class="font-bold text-indigo-600 hover:text-indigo-500 transition-colors duration-200 ml-1">
                                Daftar di sini
                            </a>
                        </p>
                    </div>

                </form>
            </div>
            
            <p class="mt-8 text-center text-xs text-gray-400">
                Gunakan akun administrator resmi untuk mengakses fitur penuh.
            </p>
        </div>
    </main>

    <footer class="bg-white border-t border-gray-200 mt-auto">
        <div class="max-w-7xl mx-auto py-6 px-4">
            <p class="text-center text-sm text-gray-400">
                &copy; 2025 PT. Nusa Technology. All rights reserved.
            </p>
        </div>
    </footer>

</body>
</html>