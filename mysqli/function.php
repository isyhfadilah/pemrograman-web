<?php

function koneksiDB() {
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "karyawan";
    $port = 8080;

    $conn = mysqli_connect($host, $user, $pass, $db);

    if(!$conn) {
        die("Koneksi gagal: " . mysqli_connect_error());
    } 

    return $conn;
}

function ambilKaryawan($divisi) {
    $conn = koneksiDB();
    $query = "SELECT * FROM karyawan WHERE divisi = '$divisi'";
    $result = mysqli_query($conn, $query);

    $data = [];
    while($item = mysqli_fetch_assoc($result)) {
        $data[] = $item;
    }

    mysqli_close($conn);
    return $data;
}

function ambilKaryawanById($id) {
    $conn = koneksiDB();
    $query = "SELECT * FROM karyawan WHERE id_karyawan = '$id'";
    $result = mysqli_query($conn, $query);

    $data = mysqli_fetch_assoc($result);
    mysqli_close($conn);
    return $data;
}

function tambahKaryawan($nama, $jabatan, $gaji, $status, $divisi, $gambar) {
    $conn = koneksiDB();

    $nama = htmlspecialchars($nama);
    $jabatan = htmlspecialchars($jabatan);
    $gaji = htmlspecialchars($gaji);
    $status = htmlspecialchars($status);
    $divisi = htmlspecialchars($divisi);

    $gambar = uploadGambar();
    if(!$gambar) {
        return false;
    }
    
    $query = "INSERT INTO karyawan (nama, jabatan, gaji, status, divisi, gambar) 
              VALUES ('$nama', '$jabatan', '$gaji', '$status', '$divisi', '$gambar')";

    if(mysqli_query($conn, $query)) {
        mysqli_close($conn);
        return true;
    } else {
        mysqli_close($conn);
        return false;
    }
}

function uploadGambar() {
    $namaFile = $_FILES['gambar']['name'];
    $ukuranFile = $_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];
    $tmpName = $_FILES['gambar']['tmp_name'];

   if($error === 4) {
    echo "<script>
            alert('Pilih gambar terlebih dahulu!');
          </script>";
    return false;
   }

   $eksistensiGambarValid = ['jpg', 'jpeg', 'png'];
   $eksistensiGambar = explode('.', $namaFile);
   $eksistensiGambar = strtolower(end($eksistensiGambar));

   if(!in_array($eksistensiGambar, $eksistensiGambarValid)) {
    echo "<script>
            alert('Yang Anda upload bukan gambar!');
          </script>";
    return false;
   }   

   if($ukuranFile > 2000000) {
    echo "<script>
            alert('Ukuran gambar terlalu besar! Maksimal 2MB.');
          </script>";
    return false;
   }

    $namaFileBaru = uniqid();
    $namaFileBaru .= '.' . $eksistensiGambar;
    move_uploaded_file($tmpName, 'gambar/' . $namaFileBaru);
    return $namaFileBaru;
}


function updateKaryawan($id, $nama, $jabatan, $gaji, $status, $divisi, $gambar) {
    $conn = koneksiDB();

    $nama = htmlspecialchars($nama);
    $jabatan = htmlspecialchars($jabatan);
    $gaji = htmlspecialchars($gaji);
    $status = htmlspecialchars($status);
    $divisi = htmlspecialchars($divisi);

    if($gambar['error'] === 4) {
        $karyawanLama = ambilKaryawanById($id);
        $namaGambar = $karyawanLama['gambar'];
    } else {
        $namaGambar = uploadGambar();
        if(!$namaGambar) {
            return false;
        }

        $karyawanLama = ambilKaryawanById($id);
        if(file_exists('gambar/' . $karyawanLama['gambar'])) {
            unlink('gambar/' . $karyawanLama['gambar']);
        }
    }

    $query = "UPDATE karyawan SET 
                nama = '$nama',
                jabatan = '$jabatan',
                gaji = '$gaji',
                status = '$status',
                divisi = '$divisi',
                gambar = '$namaGambar'
              WHERE id_karyawan = '$id'";

    if(mysqli_query($conn, $query)) {
        mysqli_close($conn);
        return true;
    } else {
        mysqli_close($conn);
        return false;
    }
}

function hapusKaryawan($id) {
    $conn = koneksiDB();

    $karyawan = ambilKaryawanById($id);
    if($karyawan && file_exists('gambar/' . $karyawan['gambar'])) {
        unlink('gambar/' . $karyawan['gambar']);
    }

    $query = "DELETE FROM karyawan WHERE id_karyawan = '$id'";

    if(mysqli_query($conn, $query)) {
        mysqli_close($conn);
        return true;
    } else {
        mysqli_close($conn);
        return false;
    }
}

function register($data) {
    $conn = koneksiDB();

    $username = strtolower(stripslashes($data['username']));
    $email = strtolower(stripslashes($data['email']));
    $password = $data['password'];
    $password_confirm = $data['confirm_password'];

    if($password != $password_confirm) {
        echo "<script>
                alert('Konfirmasi password tidak sesuai');
            </script>";
        return false;
    }

    $result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username' OR email = '$email'");
    if(mysqli_fetch_assoc($result)) {
        echo "<script>
                alert('Username atau Email sudah terdaftar!');
            </script>";
        return false;
    }

    $password = password_hash($password, PASSWORD_DEFAULT);

    $query = "INSERT INTO user (username, email, password) VALUES ('$username', '$email', '$password')";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);

}

?>
