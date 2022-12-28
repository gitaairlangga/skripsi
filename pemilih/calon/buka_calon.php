<?php

if (isset($_GET['kode'])) {
	$id = $_GET['id'];
	$sql_cek = "SELECT * FROM tb_calon WHERE id_calon='" . $_GET['kode'] . "'";
	$query_cek = mysqli_query($koneksi, $sql_cek);
	$data_cek = mysqli_fetch_array($query_cek, MYSQLI_BOTH);

	$kode = $_GET['kode'];
}
?>

<div class="card card-info">
	<div class="card-header">
		<h3 class="card-title">
			<i class="fa fa-table"></i> Data Kandidat
		</h3>
	</div>
	<!-- /.card-header -->
	<div class="card-body">
		<div class="table-responsive">
			<div>
				<a href="<?php echo $_SESSION['URL']; ?>" class="btn btn-secondary btn-sm">
					< Kembali</a>
			</div>
			<br>
			<body onload="getLocation();">
			<form metod="GET">
			<table class="myForm table table-bordered table-striped">
				<thead>
					<tr>
						<th>
							<center>Kandidat Pilihan Anda</center>
						</th>
					</tr>
				</thead>
				<tbody>

					<?php
					// $id = $_GET['id'];
					$query = "select a.*, b.no_urut from tb_calon a 
					join tb_votekandidat b on a.id_calon=b.id_calon
					where b.flag_id<>9 and daftarvote_id=" . $id. " and a.id_calon=" . $kode;
					$sql = $koneksi->query($query);
					while ($data = $sql->fetch_assoc()) {
					?>
						<tr>
							<td align="center">
								<input  type="hidden" id="id_calon" value="<?php echo $data['id_calon']; ?>">
								<input  type="hidden" id="id_daftarvote" value="<?php echo $id; ?>">
								<h1 id="nomor_urut">
									<?php echo $data['no_urut']; ?>
								</h1>
								<br>
								<img id="foto_calon" src="foto/<?php echo $data['foto_calon']; ?>" width="200px" />
								<br>
								<h2 id="nama_calon">
									<?php echo $data['nama_calon']; ?>
								</h2>
								<br>
								<div class="text-center">
									<input type="hidden"class="form-control" id="latitude" name="latitude">
								</div>

								<div class="text-center">
									<input type="hidden" class="form-control" id="longitude" name="longitude">
									
								</div>
								<br>
								
								<a href="" id="btn-tetapkan-pilihan" class="btn btn-primary">
									<i class="fa fa-edit"></i> Tetapkan Pilihan
								</a>
								
							</td>
						</tr>
						

					<?php
					
					}
					?>
				</tbody>
				</tfoot>
			</table>
			</form>
			
			</body>
			
		</div>
	</div>
	<!-- /.card-body -->
								
<script type="text/javascript">

//Menampilkan Lokasi Lalu ditampung
	function getLocation(){
		if(navigator.geolocation){
			navigator.geolocation.getCurrentPosition(showPosition,showError);
		}
	}

	function showPosition(position){
		document.querySelector('.myForm input[name = "latitude"]').value=position.coords.latitude;
		document.querySelector('.myForm input[name = "longitude"]').value=position.coords.longitude;

		// tampung variabel
		let id_calon = document.getElementById('id_calon').value;
		let id_daftarvote = document.getElementById('id_daftarvote').value;
		let nomor_urut = document.getElementById('nomor_urut').innerText;
		let foto_calon = document.getElementById('foto_calon').getAttribute('src');
		let nama_calon = document.getElementById('nama_calon').innerText;
		let latitude = document.querySelector('.myForm input[name = "latitude"]').value=position.coords.latitude;
		let longitude = document.querySelector('.myForm input[name = "longitude"]').value=position.coords.longitude;

		// atur href dengan data yang sudah ditampung
		document.getElementById('btn-tetapkan-pilihan').setAttribute("href", "?page=PsSQBpL&id=" + id_daftarvote + "&kode=" + id_calon + "&nomor_urut=" + nomor_urut + "&foto_calon=" + foto_calon + "&nama_calon=" + nama_calon + "&latitude=" + latitude + "&longitude=" + longitude);

	}

	function showError(error){
		switch(error.code){
			case error.PERMISSION_DENIED:
				alert("You Must Allow The Request For Geolocation To Fill Out The Form");
				location.reload();
				break;
		}
	}
//end Menampilkan Lokasi Lalu ditampung

</script>