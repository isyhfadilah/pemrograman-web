<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Login Sistem</h1>

    <form action="halaman_coba.php" method="POST">
        <ul style="list-style-type: none">
            <li>
                <label for="username">Username: </label>
                <input type="text" id="username" name="username" required>
            </li>
            <li>
                <label for="password">Password: </label>
                <input type="password" id="password" name="password" required>
            </li>
            <li>
                <button type="submit" name="submit">Kirim</button>
                <button type="reset" name="reset">Hapus Data</button>
            </li>
        </ul>
    </form>
    
</body>
</html>