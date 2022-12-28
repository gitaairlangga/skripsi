<?php
include "inc/koneksi.php";
session_start();
if (isset($_SESSION["ses_username"]) != '') {
	header("location: index.php");
}
?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Sign In MyPoll</title>
	<link rel="icon" href="dist/img/gitacorp.png">
	<!-- Tell the browser to be responsive to screen width -->
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Font Awesome -->
	<link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
	<!-- Ionicons -->
	<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
	<!-- icheck bootstrap -->
	<!-- <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css"> -->
	<!-- Theme style -->
	<link rel="stylesheet" href="dist/css/adminlte.min.css">
	<!-- Google Font: Source Sans Pro -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<style>
a:link, a:visited {
  color: white;
  text-align: center;
  text-decoration: none;
}

.button-rounded {
    border-radius: 20px;
    background-color: #81C689;
    /* padding: 26px 25px 22px; */
    margin-top: 20px;
    box-shadow: 0 2px 6px 0 rgba(129, 198, 137, 0.6), 0 2px 10px 0 rgba(129, 198, 137, 0.42);
}
</style>


<body class="hold-transition login-page">

	<div class="login-box">
		<div class="login-logo">
			<br>
			<img src="dist/img/gitacorp.png" width="45" height="45" alt="" loading="lazy"><b>MyPoll</b>
		</div>
		<!-- /.login-logo -->
		<div class="card">
			<div class="card-body login-card-body">
				<p class="login-box-msg">Sign in</p>

				<form action="" method="post">
					<div class="input-group mb-3">
						<input type="text" class="form-control" name="username" placeholder="Username" required>
						<div class="input-group-append">
							<div class="input-group-text">
								<span class="fas fa-user" title="Ketik Username Anda"></span>
							</div>
						</div>
					</div>
					<div class="input-group mb-3">
						<input type="password" id="pass" class="form-control" name="password" placeholder="Password" required>
						<div class="input-group-append">
							<div class="input-group-text">
							<span id="mybutton" onclick="change()" class="fas fa-lock" title="Lihat Password"></span>
							</div>
						</div>
					</div>
					<div class="input-group mb-3">
						<div class="col-12">
							<button type="submit" class="btn button-rounded btn-block" name="btnLogin" title="Masuk Sistem">
								<b>Log in</b>
							</button>
						</div>
					</div>
				</form>
					<div class="input-group mb-2">
						<div class="col-12">
							<button class="btn button-rounded btn-block" name="btnRegistrasi" title="Registrasi">
							<a href="add_pengguna.php" class="nav-link">
								<b>Registrasi</b>
							</a>
							</button>
						</div>
					</div>
				<div class="input-group mb-2">
					<div class="col-12">
						<!-- <a href="home.php" style="font-size:20px; color:red;">te</a> -->
						<div class="container">
    						<div class="wrapper-icon">
      							<a href="home.php" style="font-size:15px; color:blue; text-decoration: underline;"><<< kembali</a></label>
    						</div>
  						</div>
					</div>
					
				</div>
			</div>
		</div>
	</div>
	<!-- /.login-box -->

	<!-- jQuery -->
	<script src="plugins/jquery/jquery.min.js"></script>
	<!-- Bootstrap 4 -->
	<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
	<!-- AdminLTE App -->
	<script src="dist/js/adminlte.min.js"></script>
	<!-- Alert -->
	<script src="plugins/alert.js"></script>

</body>

</html>
<!-- <?php
	// if (isset($_GET['page'])) {
	// 	$hal = $_GET['page'];

	// 	switch ($hal) {
	// 		//admin
	// 		case 'add-pengguna':
	// 		include "admin/pengguna/add_pengguna.php";
	// 		break;
							
	// 	}
	// } else {
	// 	// Auto Halaman Home Pengguna
	// 	if ($data_level == "Administrator") {
		// 		include "home/admin.php";
		// 	} elseif ($data_level == "Pemilih") {
		// 		include "home/pemilih.php";
		// 	}
	// }
?> -->
<script type="text/javascript">
    function change() {
        var x = document.getElementById('pass').type;

        if (x == 'password') {
            document.getElementById('pass').type = 'text';
            document.getElementById('mybutton').innerHTML;
        } else {
            document.getElementById('pass').type = 'password';
            document.getElementById('mybutton').innerHTML;
        }
    }
</script>
<?php
if (isset($_POST['btnLogin'])) {
	//anti inject sql
	$username = mysqli_real_escape_string($koneksi, $_POST['username']);
	$password = mysqli_real_escape_string($koneksi, $_POST['password']);

	//query login
	$sql_login = "SELECT * FROM tb_pengguna WHERE BINARY username='$username' AND password='$password'";
	$query_login = mysqli_query($koneksi, $sql_login);
	$data_login = mysqli_fetch_array($query_login, MYSQLI_BOTH);
	$jumlah_login = mysqli_num_rows($query_login);


	if ($jumlah_login == 1) {

		$_SESSION["ses_id"] = $data_login["id_pengguna"];
		$_SESSION["ses_nama"] = $data_login["nama_pengguna"];
		$_SESSION["ses_username"] = $data_login["username"];
		$_SESSION["ses_password"] = $data_login["password"];
		$_SESSION["ses_latitude"] = $data_login["latitude"];
		$_SESSION["ses_longitude"] = $data_login["longitude"];
		$_SESSION["ses_level"] = $data_login["level"];
		$_SESSION["ses_status"] = $data_login["status"];
		$_SESSION["ses_jenis"] = $data_login["jenis"];

		echo "<script>
			Swal.fire({title: 'Login Berhasil',text: '',icon: 'success',confirmButtonText: 'OK'
			}).then((result) => {if (result.value)
				{window.location = 'index.php';}
			})</script>";
	} else {
		echo "<script>
			Swal.fire({title: 'Login Gagal',text: '',icon: 'error',confirmButtonText: 'OK'
			}).then((result) => {if (result.value)
				{window.location = 'login';}
			})</script>";
	}
}
?>
