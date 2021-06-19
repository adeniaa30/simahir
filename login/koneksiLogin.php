<?php
session_start();

$server = "localhost";
$user = "root";
$pass = "";
$database = "simahir";

$koneksi = mysqli_connect($server, $user, $pass, $database)or die(mysqli_error($koneksi));


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
                       alert('login berhasil!'); </script>";

                          header("Location: ../afterLogin/afterLogin.php");
                           exit;

        }
	}
}
?>
