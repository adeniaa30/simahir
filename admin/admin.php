<?php include '../controller/controll.php';
if( isset($_SESSION["login"]) === false ) {
	header("Location: admin.php");
	exit;
};
 ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Mahir Mengemudi</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="Construction Company Website Template" name="keywords">
        <meta content="Construction Company Website Template" name="description">

        <!-- Favicon -->
        <link href="img/favicon.ico" rel="icon">

        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

        <!-- CSS Libraries -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="../lib/flaticon/font/flaticon.css" rel="stylesheet">
        <link href="../lib/animate/animate.min.css" rel="stylesheet">
        <link href="../lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
        <link href="../lib/lightbox/css/lightbox.min.css" rel="stylesheet">
        <link href="../lib/slick/slick.css" rel="stylesheet">
        <link href="../lib/slick/slick-theme.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="../css/style.css" rel="stylesheet">
        <style>
				/* .isi:hover{
                background-color: violet;
            } */
            table{
                width: 100%;
                border-collapse: collapse;
                margin: auto;
                border-radius: 15px;
                background: rgba(0, 0, 0, 0.5);
                box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
                margin-bottom: 20px;
            }
            th {
                background-color: cadetblue;
								text-align: center;
            }
            td{
                text-align: center;
            }
            th, td{
                padding: 15px;
                font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
                color: white;
            }
            caption{
                margin-bottom: 20px;
                font-family: Goudy Old Style;
                font-size: 30px;
                color: black;
            }
            #cont{
                position: relative;
                width: 100%;
                /* background-image: linear-gradient(to bottom right, aquamarine, pink, violet); */
            }
						.btn{
							border-radius: 15px;
							border-color: black;
							width: auto;
						}
						.btn:hover{
							background-color: rgba(0, 0, 0, 0.5);
						}
				</style>
    </head>

    <body>
        <div class="wrapper">
            <!-- Top Bar Start -->
            <div class="top-bar">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col-lg-4 col-md-12">
                            <div class="logo">
                                <a href="index.html">
                                    <h1>MAHIR</h1>
                                    <!-- <img src="img/logo.jpg" alt="Logo"> -->
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-7 d-none d-lg-block">
                            <div class="row">
                                <div class="col-4">
                                    <div class="top-bar-item">
                                        <div class="top-bar-icon">
                                            <i class="flaticon-calendar"></i>
                                        </div>
                                        <div class="top-bar-text">
                                            <h3>Opening Hour</h3>
                                            <p>Everyday, 8:00 - 20:00</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="top-bar-item">
                                        <div class="top-bar-icon">
                                            <i class="flaticon-call"></i>
                                        </div>
                                        <div class="top-bar-text">
                                            <h3>Call Us</h3>
                                            <p>081 2177 12345</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="top-bar-item">
                                        <div class="top-bar-icon">
                                            <i class="flaticon-send-mail"></i>
                                        </div>
                                        <div class="top-bar-text">
                                            <h3>Email Us</h3>
                                            <p>mahirmengemudi@gmail.com</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Top Bar End -->

            <!-- Nav Bar Start -->
            <div class="nav-bar">
                <div class="container-fluid">
                    <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
                        <a href="#" class="navbar-brand">MENU</a>
                        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                            <div class="navbar-nav mr-auto">
                                <a href="#paket" class="nav-item nav-link">Siswa</a>
                                <!-- <a href="#about" class="nav-item nav-link">Jadwal</a>
                                <a href="#fact" class="nav-item nav-link">fact</a>
                                <a href="#team" class="nav-item nav-link">Team</a>
                                <a href="#tips" class="nav-item nav-link">Tips</a>
                                <a href="paket.php" class="nav-item nav-link">Package</a>
                                <a href="#contact" class="nav-item nav-link">Contact</a> -->
                            </div>
                            <div class="ml-auto">
                                <a class="btn" href="registrasi/registrasi.php">Hai, <?php echo $_SESSION["username"]; ?> </a>
                                <a class="btn" href="../signout.php">Logout</a>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
            <!-- Nav Bar End -->

            <div id="paket" class="contact wow fadeInUp">
                <div class="container">
                    <div class="section-header text-center">
                        <p>List</p>
                        <h2>Pendaftar</h2>
                    </div>
										<div id="cont">
										    <table>
										        <thead>
										            <tr>
																		<th>ID</th>
																		<th>Username</th>
										                <th>Email</th>
										                <th>Nama</th>
										                <th>No WA</th>
										                <th>Alamat</th>
										                <th>Paket</th>
																		<th>Hari</th>
																		<th>Jam</th>
																		<th>Metode Bayar</th>
																		<th>Catatan Siswa</th>
																		<th>Catatan Admin</th>
																		<th>Aksi</th>
										            </tr>
										            <?php
										            $id = 1;
										            $tampilkan = mysqli_query($koneksi, "SELECT * from pendaftaran");
										            while($data = mysqli_fetch_array($tampilkan)) :
										            ?>
										            <tr class="isi">
										                <td><?=$id++;?></td>
																		<td><?=$data['username']?></td>
										                <td><?=$data['email']?></td>
																		<td><?=$data['nama']?></td>
										                <td><?=$data['no_wa']?></td>
										                <td><?=$data['alamat']?></td>
										                <td><?=$data['paket']?></td>
																		<td><?=$data['hari']?></td>
																		<td><?=$data['jam']?></td>
																		<td><?=$data['metode']?></td>
																		<td><?=$data['catatan']?></td>
																		<td><?=$data['catatan_admin']?></td>
																		<td>
														    			<a href="admin.php?hal=edit&email=<?=$data['email']?>" class="btn btn-warning"> Edit </a>
														    			<a href="admin.php?hal=hapus&email=<?=$data['email']?>"
														    			   onclick="return confirm('Apakah yakin ingin menghapus data ini?')" class="btn btn-danger"> Hapus </a>
														    		</td>
																		<!-- <td>  <select name="keterangan" class="form-control" value="" >
																				<option value="">Keterangan</option>
																				<option value="LUNAS">LUNAS</option>
																				<option value="BELUM LUNAS">BELUM LUNAS</option>
																		</select></td> -->
										            </tr>
										            <?php endwhile; ?>

										        </thead>
										    </table>
										</div>

                </div>
            </div>
            <!-- Contact End -->

			<div id="contact" class="contact wow fadeInUp">
					<div class="container">
						<div class="section-header text-center">
								<p>Form Edit</p>
								<h2>Admin</h2>
						</div>
						<div>
							<form action="" method="POST">
								<div class="form-group row">
										<label class="col-sm-2 col-form-label">Username</label>
										<div class="col-sm-10">
												<input type="text" class="form-control" value="<?=@$vuser?>"
												placeholder="Username" readonly>
										</div>
								</div>
								<div class="form-group row">
										<label class="col-sm-2 col-form-label">Email</label>
										<div class="col-sm-10">
												<input type="text" name="email" class="form-control" value="<?=@$vemail?>"
												placeholder="Email" readonly>
										</div>
								</div>
								<div class="form-group row">
										<label class="col-sm-2 col-form-label">Nama Lengkap</label>
										<div class="col-sm-10">
												<input type="text" name="namaLengkap" class="form-control" value="<?=@$vname?>"
												placeholder="Nama Lengkap" readonly>
										</div>
								</div>
								<div class="form-group row">
										<label class="col-sm-2 col-form-label">Nomor WA</label>
										<div class="col-sm-10">
												<input type="text" name="no_wa" class="form-control" value="<?=@$vnoWA?>"
												placeholder="Nomor WA" readonly>
										</div>
								</div>
								<div class="form-group row">
										<label class="col-sm-2 col-form-label">Alamat</label>
										<div class="col-sm-10">
												<input type="text" name="alamat" class="form-control" value="<?=@$valamat?>"
												placeholder="Alamat" readonly>
										</div>
								</div>
								<div class="form-group row">
										<label class="col-sm-2 col-form-label">Paket</label>
										<div class="col-sm-10">
												<input type="text" name="pilPaket" class="form-control" value="<?=@$vpaket?>"
												placeholder="Paket" >
										</div>
								</div>
								<div class="form-group row">
										<label class="col-sm-2 col-form-label">Hari</label>
										<div class="col-sm-10">
												<input type="text" name="hari" class="form-control" value="<?=@$vhari?>"
												placeholder="Hari" >
										</div>
								</div>
								<div class="form-group row">
										<label class="col-sm-2 col-form-label">Jam</label>
										<div class="col-sm-10">
												<input type="text" name="jam" class="form-control" value="<?=@$vjam?>"
												placeholder="Jam">
										</div>
								</div>
								<div class="form-group row">
										<label class="col-sm-2 col-form-label">Metode Pembayaran</label>
										<div class="col-sm-10">
												<input type="text" name="metodeBayar" class="form-control" value="<?=@$vbayar?>"
												placeholder="Metode Pembayaran" readonly>
										</div>
								</div>
								<div class="form-group row">
										<label class="col-sm-2 col-form-label">Catatan Siswa</label>
										<div class="col-sm-10">
												<input type="text" name="catatan" class="form-control" value="<?=@$vcatatan?>"
												placeholder="Catatan Siswa" readonly>
										</div>
								</div>
								<div class="form-group row">
									<label class="col-sm-2 col-form-label">Catatan Admin</label>
									<div class="col-sm-10">
										<select name="keterangan" class="form-control" >
												<option value="<?=@$vcat_admin?>" ><?=@$vcat_admin?></option>
												<option value="LUNAS">LUNAS</option>
												<option value="BELUM LUNAS">BELUM LUNAS</option>
										</select>
									</div>
								</div>
								<div>
									<br>
										<button class="btn" type="submit" name="simpan2" id="sendMessageButton">Submit</button>
								</div>
							</form>
						</div>
						
					</div>
				</div>


            <!-- Footer Start -->
            <div class="footer wow fadeIn" data-wow-delay="0.3s">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-lg-3">
                            <div class="footer-contact">
                                <h2>Office Contact</h2>
                                <p><i class="fa fa-map-marker-alt"></i>Jl. Suromulang Timur IV No. 18</p>
                                <p><i class="fa fa-phone-alt"></i>081 2177 12345</p>
                                <p><i class="fa fa-envelope"></i>mahirmengemudi@gmail.com</p>
                                <div class="footer-social">
                                    <a href=""><i class="fab fa-twitter"></i></a>
                                    <a href=""><i class="fab fa-facebook-f"></i></a>
                                    <a href=""><i class="fab fa-youtube"></i></a>
                                    <a href=""><i class="fab fa-instagram"></i></a>
                                    <a href=""><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="col-md-6 col-lg-3">
                            <div class="footer-link">
                                <h2>Services Areas</h2>
                                <a href="">Building Construction</a>
                                <a href="">House Renovation</a>
                                <a href="">Architecture Design</a>
                                <a href="">Interior Design</a>
                                <a href="">Painting</a>
                            </div>
                        </div> -->
                        <div class="col-md-6 col-lg-3">
                            <div class="footer-link">
                                <h2>Useful Pages</h2>
                                <a href="">Home</a>
                                <a href="">About</a>
                                <a href="">Fact</a>
                                <a href="">Team</a>
                                <a href="">Contact</a>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="newsletter">
                                <h2>Subscribe</h2>
                                <p>
                                    Tinggalkan email anda di sini untuk mendapatkan informasi menarik !
                                </p>
                                <div class="form">
                                    <input class="form-control" placeholder="Email here">
                                    <button class="btn">Submit</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container footer-menu">
                    <div class="f-menu">
                        <a href="">Terms of use</a>
                        <a href="">Privacy policy</a>
                        <a href="">Cookies</a>
                        <a href="">Help</a>
                        <a href="">FQAs</a>
                    </div>
                </div>
                <div class="container copyright">
                    <div class="row">
                        <div class="col-md-6">
                            <p>&copy; <a href="#">mahirmengemudi</a>, All Right Reserved.</p>
                        </div>
                        <!-- <div class="col-md-6">
                            <p>Designed By <a href="https://htmlcodex.com">HTML Codex</a></p>
                        </div> -->
                    </div>
                </div>
            </div>
            <!-- Footer End -->

            <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
        </div>

        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="../lib/easing/easing.min.js"></script>
        <script src="../lib/wow/wow.min.js"></script>
        <script src="../lib/owlcarousel/owl.carousel.min.js"></script>
        <script src="../lib/isotope/isotope.pkgd.min.js"></script>
        <script src="../lib/lightbox/js/lightbox.min.js"></script>
        <script src="../lib/waypoints/waypoints.min.js"></script>
        <script src="../lib/counterup/counterup.min.js"></script>
        <script src="../lib/slick/slick.min.js"></script>


        <!-- Template Javascript -->
        <script src="../js/main.js"></script>
    </body>
</html>
