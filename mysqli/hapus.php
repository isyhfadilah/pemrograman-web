<?php 
    include 'function.php';
    $message = '';
    $success = false;
    if(isset($_GET['id_karyawan'])) {
        $id = $_GET['id_karyawan'];
        if(hapusKaryawan($id)) {
            $message = 'Data karyawan berhasil dihapus!';
            $success = true;
        } else {
            $message = 'Gagal menghapus data karyawan. Silakan coba lagi.';
        }
    } else {
        $message = 'ID karyawan tidak ditemukan.';
    }
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hapus Data Karyawan</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>body { font-family: 'Inter', sans-serif; }</style>
</head>
<body class="bg-gray-50 flex items-center justify-center min-h-screen">
    <div class="fixed inset-0 flex items-center justify-center z-50 bg-black bg-opacity-40">
        <div class="bg-white rounded-xl shadow-xl p-8 max-w-sm w-full border border-gray-200 text-center">
            <svg class="mx-auto mb-4 h-12 w-12 <?= $success ? 'text-green-500' : 'text-red-500' ?>" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <?php if($success): ?>
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                <?php else: ?>
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                <?php endif; ?>
            </svg>
            <h2 class="text-lg font-semibold mb-2 <?= $success ? 'text-green-700' : 'text-red-700' ?>"><?php echo $message; ?></h2>
            <p class="text-gray-500 text-sm mb-6">Anda akan diarahkan kembali ke halaman utama.</p>
            <a href="index.php" class="inline-block px-5 py-2 rounded-lg bg-indigo-600 text-white font-medium shadow hover:bg-indigo-700 transition">Kembali ke Beranda</a>
        </div>
    </div>
    <script>
        setTimeout(function() {
            window.location.href = 'index.php';
        }, 2000);
    </script>
</body>
</html>