<?php

function registrasi($data) {
    global $koneksi;
    $username = strtolower(stripslashes($data["username"]));
    $email = strtolower(stripslashes($data["email"]));
    $password = mysqli_real_escape_string($koneksi, $data["password"]);
    $password2 = mysqli_real_escape_string($koneksi, $data["password2"]);


    //cek username sdh ada atau belum
    $result = mysqli_query($koneksi, "SELECT username FROM registrasi WHERE username = '$username'");
    if(mysqli_fetch_assoc($result)) {
        echo "<script>
        alert('username sudah terdaftar');
        </script>";
        return false;
    }

    //cek konfirmais password
    if($password !== $password2) {
        echo "<script>
        alert('konfirmasi password tidak sesuai');
        </script>";
        return false;
    }
    //enkripsi password
    // $password = password_hash($password, PASSWORD_DEFAULT);

    //tambahkan ke database
    mysqli_query($koneksi, "INSERT INTO registrasi VALUES('$username', '$email', '$password')");

    return mysqli_affected_rows($koneksi);
}

?>
