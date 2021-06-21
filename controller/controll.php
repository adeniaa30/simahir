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
        }else if( $username === 'admin'){
          //set session
          $_SESSION["login"] = true;
			    $_SESSION["username"] = $username;

			    //cek remember me

         if( isset($_POST['remember']) ) {
           setcookie('login', 'true', time() + 60);
                    }

          echo "<script>
             alert('Login Berhasil !');
             document.location='../admin/admin.php';
              </script>";

        }else{
          $_SESSION["login"] = true;
			    $_SESSION["username"] = $username;

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
      $username = $_SESSION["username"];
      $email = $_POST["email"];
      $namaLengkap = $_POST["namaLengkap"];
      $no_wa = $_POST["no_wa"];
      $alamat = $_POST["alamat"];
      $pilPaket = $_POST["pilPaket"];
      $hari = $_POST["hari"];
      $jam = $_POST["jam"];
      $metodeBayar = $_POST["metodeBayar"];
      $catatan = $_POST["catatan"];

			$simpan = mysqli_query($koneksi, "INSERT INTO pendaftaran (username, email, nama, no_wa, alamat, paket, hari, jam, metode, catatan)
										  VALUES ('$username','$email', '$namaLengkap', '$no_wa', '$alamat', '$pilPaket', '$hari', '$jam', '$metodeBayar', '$catatan')
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

// BUTTON SIMPAN Admin
if(isset($_GET['hal']))
{
  //Pengujian jika edit Data
  if($_GET['hal'] == "edit")
  {
    //Tampilkan Data yang akan diedit
    $tampil = mysqli_query($koneksi, "SELECT * FROM pendaftaran WHERE email = '$_GET[email]' ");
    $data = mysqli_fetch_array($tampil);
    if($data)
    {
      //Jika data ditemukan, maka data ditampung ke dalam variabel
      $vuser = $data['username'];
      $vemail = $data['email'];
      $vname = $data['nama'];
      $vnoWA = $data['no_wa'];
      $valamat = $data['alamat'];
      $vpaket = $data['paket'];
      $vhari = $data['hari'];
      $vjam = $data['jam'];
      $vbayar = $data['metode'];
      $vcatatan = $data['catatan'];
      $vcat_admin = $data['catatan_admin'];
    }
  }
  else if ($_GET['hal'] == "hapus")
  {
    //Persiapan hapus data
    $hapus = mysqli_query($koneksi, "DELETE FROM pendaftaran WHERE email = '$_GET[email]' ");
    if($hapus){
      echo "<script>
          alert('Hapus Data Suksess!!');
          document.location='../admin/admin.php';
           </script>";
    }
  }
}

//edit dan simpan
if(isset($_POST['simpan2']))
{
  //Pengujian Apakah data akan diedit atau disimpan baru
  if($_GET['hal'] == "edit")
  {
    $email = $_POST["email"];
    $namaLengkap = $_POST["namaLengkap"];
    $no_wa = $_POST["no_wa"];
    $alamat = $_POST["alamat"];
    $pilPaket = $_POST["pilPaket"];
    $hari = $_POST["hari"];
    $jam = $_POST["jam"];
    $metodeBayar = $_POST["metodeBayar"];
    $catatan = $_POST["catatan"];
    $keterangan = $_POST["keterangan"];
    //Data akan di edit
    $edit = mysqli_query($koneksi, "UPDATE pendaftaran set
                      email = '$email',
                      nama = '$namaLengkap',
                      no_wa = '$no_wa',
                      alamat = '$alamat',
                      paket = '$pilPaket',
                      hari = '$hari',
                      jam = '$jam',
                      metode = '$metodeBayar',
                      catatan = '$catatan',
                      catatan_admin = '$keterangan'
                     WHERE email = '$_GET[email]'
                     ");
    if($edit) //jika edit sukses
    {
      echo "<script>
          alert('Edit data suksess!');
          document.location='../admin/admin.php';
           </script>";
    }
    else
    {
      echo "<script>
          alert('Edit data GAGAL!!');
          document.location='../admin/admin.php';
           </script>";
    }
  }

}

?>
