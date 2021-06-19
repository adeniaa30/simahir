<?php

session_start();

$server = "localhost";
$user = "root";
$pass = "";
$database = "simahir";

$koneksi = mysqli_connect($server, $user, $pass, $database)or die(mysqli_error($koneksi));

require('function.php');

if(isset($_POST["signup"])) {
    if(registrasi($_POST) > 0) {
        echo "<script>
        alert('user baru berhasil ditambahkan'); </script>";
        header('Location: ../index.php');
        exit;
    }else {
        echo mysqli_error($koneksi);
    }
}

//KONEKSI LOGIN
if(isset($_POST["login"])) {
    // include "../koneksi.php";
    $username = $_POST["username"];
    $password = $_POST["password"];
	// $_SESSION["username"] = $username;

    $result = mysqli_query($koneksi, "SELECT * FROM registrasi WHERE username='$username'");
    $hitung = mysqli_num_rows($result);

    if( $hitung === 1 ) {
        //prosedur seleksi password
        $fetch_pass = mysqli_fetch_assoc($result);
        $cek_pass = $fetch_pass['password'];
        if( $cek_pass !== $password) {
            echo "<script>
            alert('password salah!'); </script>";
        }else{
          //set session
          $_SESSION["login"] = true;
			    $_SESSION["username"] = $username;

			    //cek remember me

         if( isset($_POST['remember']) ) {
           setcookie('login', 'true', time() + 60);
                    }

                    echo "<script>
                       alert('Login Berhasil !');
                       document.location='../afterLogin.php';
                        </script>";

        }
	}
}

// KONEKSI Daftar
if(isset($_POST['daftar']))
	{
			//Data akan disimpan Baru
      $email = $_POST["email"];
      $namaLengkap = $_POST["namaLengkap"];
      $no_wa = $_POST["no_wa"];
      $alamat = $_POST["alamat"];
      $pilPaket = $_POST["pilPaket"];
      $hari = $_POST["hari"];
      $jam = $_POST["jam"];
      $metodeBayar = $_POST["metodeBayar"];
      $catatan = $_POST["catatan"];

			$simpan = mysqli_query($koneksi, "INSERT INTO pendaftaran (email, nama, no_wa, alamat, paket, hari, jam, metode, catatan)
										  VALUES ('$email', '$namaLengkap', '$no_wa', '$alamat', '$pilPaket', '$hari', '$jam', '$metodeBayar', '$catatan')
										 ");
			if($simpan) //jika simpan sukses
			{
				echo "<script>
						alert('Simpan data suksess!');
						document.location='daftar.php';
				     </script>";
			}
			else
			{
        header('Location: daftar.php');
				echo "<script>
						alert('Simpan data GAGAL!!');
						document.location='daftar.php';
				     </script>";
			}
		}


?>
