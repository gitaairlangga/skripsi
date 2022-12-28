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
	<title>Registrasi</title>
	<link rel="icon" href="dist/img/gitacorp.png">
	<!-- Tell the browser to be responsive to screen width -->
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Font Awesome -->
	<link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
	<!-- Ionicons -->
	<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
	<!-- icheck bootstrap -->
	<link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
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

</style>


<body onload="getLocation();" class="hold-transition login-page">

	<div class="login-box">
		<div class="login-logo">
			<br>
			<b>MyPoll</b>
		</div>
		<!-- /.regis-logo -->
		<form class="myForm" action="" method="post">
		<div class="card">
			<div class="card-body login-card-body">
				<p class="login-box-msg">Registrasi</p>

					<div class="form-group row ">
						<label class="col-sm-8 col-form-label">NIK: </label>
							<div class="col-sm-12">
								<input type="text" class="form-control" id="nik" name="nik" placeholder="Nomor Induk Keluarga" minlength="1" maxlength= "16"  required>
							</div>
					</div>

					<div class="form-group row ">
						<label class="col-sm-8 col-form-label">Alamat: </label>
							<div class="col-sm-12">
								<textarea name="alamat" id="alamat" class="form-control" rows="4" cols="50" placeholder="Alamat Tempat Tinggal" required></textarea>
								<!-- <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat" required> -->
							</div>
					</div>

					<div class="form-group row ">
						<label class="col-sm-8 col-form-label">Nama Lengkap: </label>
							<div class="col-sm-12">
								<input type="text" class="form-control" id="nama_pengguna" name="nama_pengguna" placeholder="Nama Lengkap"  required>
							</div>
							<br><br>

							<div class="col-sm-12">
								<input type="hidden" class="form-control" id="latitude" name="latitude">
							</div>
							
							<div class="col-sm-12">
								<input type="hidden" class="form-control" id="longitude" name="longitude">
							</div>
					</div>
					<div class="form-group row">
						<label class="col-sm-8 col-form-label">Username: </label>
							<div class="col-sm-12">
								<input type="text" class="form-control" id="username" name="username" placeholder="Username" required>
							</div>
					</div>
					<div class="form-group row">
						<label class="col-sm-8 col-form-label">Password: </label>
							<div class="col-sm-12">
								<input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
								<div class="col-sm-8 col-form-label">
									<input id="mybutton" onclick="change()" type="checkbox" class="form-checkbox"> Lihat Password
								</div>
							</div>
					</div>
					<div class="form-group row">
						<label class="col-sm-3 col-form-label">Level: </label>
						<div class="col-sm-5">
							<select name="level" id="level" class="form-control" required>
								<option value="">- Pilih -</option>
								<option value="Pemilih">Pemilih</option>
								<option value="Petugas">Petugas</option>
							</select>
						</div>

					</div>
					
			</div>
			<div class="card-footer">
				<input type="submit" name="Simpan" value="Simpan" class="btn btn-info">
				<a href="home.php" title="Kembali" class="btn btn-secondary">Batal</a>
			</div>
		</div>
		</form>
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
<script type="text/javascript">

//Menampilkan Pass
    function change() {
        var x = document.getElementById('password').type;

        if (x == 'password') {
            document.getElementById('password').type = 'text';
            document.getElementById('mybutton').innerHTML;
        } else {
            document.getElementById('password').type = 'password';
            document.getElementById('mybutton').innerHTML;
        }
    }
//end Menampilkan Pass

//Menampilkan Letak Posisi
	function getLocation(){
		if(navigator.geolocation){
			navigator.geolocation.getCurrentPosition(showPosition,showError);
		}
	}

	function showPosition(position){
		document.querySelector('.myForm input[name = "latitude"]').value=position.coords.latitude;
		document.querySelector('.myForm input[name = "longitude"]').value=position.coords.longitude;
	}

	function showError(error){
		switch(error.code){
			case error.PERMISSION_DENIED:
				alert("You Must Allow The Request For Geolocation To Fill Out The Form");
				location.reload();
				break;
		}
	}
//end Menampilakn Letak Posisi

//Menginput Teks Berupa Angka
	function setInputFilter(textbox, inputFilter, errMsg) {
  	["input", "keydown", "keyup", "mousedown", "mouseup", "select", "contextmenu", "drop", "focusout"].forEach(function(event) {
    textbox.addEventListener(event, function(e) {
      if (inputFilter(this.value)) {
        // Accepted value
        if (["keydown","mousedown","focusout"].indexOf(e.type) >= 0){
          this.classList.remove("input-error");
          this.setCustomValidity("");
        }
        this.oldValue = this.value;
        this.oldSelectionStart = this.selectionStart;
        this.oldSelectionEnd = this.selectionEnd;
      } else if (this.hasOwnProperty("oldValue")) {
        // Rejected value - restore the previous one
        this.classList.add("input-error");
        this.setCustomValidity(errMsg);
        this.reportValidity();
        this.value = this.oldValue;
        this.setSelectionRange(this.oldSelectionStart, this.oldSelectionEnd);
      } else {
        // Rejected value - nothing to restore
        this.value = "";
      }
    });
  	});
	}

	setInputFilter(document.getElementById("nik"), function(value) {
 	return /^-?\d*$/.test(value); }, "Harap isi dengan angka");
//end Menginput Teks Berupa Angka

</script>	

<?php

if (isset($_POST['Simpan'])) {
	
	//cek username
	if($_POST['level']=='Pemilih'){
		$jenis='PST';
	}elseif($_POST['level']=='Petugas'){
		$jenis='PAN';
	}else{
		$jenis='PAN';
	}



	$query = "select * from tb_pengguna where nik='" . $_POST['nik'] . "'";
	$row = mysqli_query($koneksi, $query);
	$jumlah = mysqli_num_rows($row);

	$query2="select * from tb_pengguna where username='" . $_POST['username'] . "'";
	$row2=mysqli_query($koneksi, $query2);
	$jumlah2=mysqli_num_rows($row2);

	if ($jumlah > 0) {
		$err = 'NIK Sudah Terdaftar!';
	}
	elseif($jumlah2 > 0){
		$err = 'Username Sudah Terdaftar!';
	}
	else{
		$sql_simpan = "INSERT INTO tb_pengguna (nik,alamat,nama_pengguna,username,password,latitude,longitude,level,status,jenis) VALUES (
			'" . $_POST['nik'] . "',
			'" . $_POST['alamat'] . "',
			'" . $_POST['nama_pengguna'] . "',
			'" . $_POST['username'] . "',
			'" . $_POST['password'] . "',
			'" . $_POST['latitude'] . "',
			'" . $_POST['longitude'] . "',
			'" . $_POST['level'] . "',
			'1',
			'". $jenis. "')";
		$query_simpan = mysqli_query($koneksi, $sql_simpan);
	}
	//mulai proses simpan data

	if ($query_simpan) {
		echo "<script>
      Swal.fire({title: 'Tambah Data Berhasil',text: '',icon: 'success',confirmButtonText: 'OK'
      }).then((result) => {if (result.value){
          window.location = 'login';
          }
      })</script>";
	} else {
		echo "<script>
      Swal.fire({title: 'Tambah Data Gagal " . $err . "',text: '',icon: 'error',confirmButtonText: 'OK'
      }).then((result) => {if (result.value){
          window.location = 'add_pengguna.php?page=add-pengguna';
          }
      })</script>";
	}
	mysqli_close($koneksi);
}
     //selesai proses simpan data
