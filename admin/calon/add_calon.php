<div class="card card-primary">
	<div class="card-header">
		<h3 class="card-title">
			<i class="fa fa-edit"></i> Tambah Data
		</h3>
	</div>
	<form action="" method="post" enctype="multipart/form-data">
		<div class="card-body">

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Nama Lengkap Kandidat: </label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="nama_calon" name="nama_calon" placeholder="Nama Calon" required/>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Pendidikan Terakhir: </label>
				<div class="col-sm-6">
					<select name="pendidikan" id="pendidikan" class="form-control" required>
						<option value="">- Pilih -</option>
						<option value="S1">S1</option>
						<option value="S2">S2</option>
						<option value="S3">S3</option>
						<option value="SMA/SMK">SMA/SMK</option>
						<option value="SMP">SMP</option>
					</select>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Foto Kandidat: </label>
				<div class="col-sm-6">
					<input type="file" id="foto_calon" name="foto_calon">
					<p class="help-block">
						<font color="red">*Format Gambar .jpeg/.jpg/.png</font>
					</p>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Pengalaman: </label>
				<div class="col-sm-6">
					<textarea class="form-control" rows="5" id="pengalaman" name="pengalaman" placeholder="Pengalaman Sebelumnya" required></textarea>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Visi dan Misi: </label>
				<div class="col-sm-6">
					<textarea class="form-control" rows="5" id="visi_misi" name="visi_misi" placeholder="Visi dan Misi" required></textarea>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Program Kerja: </label>
				<div class="col-sm-6">
					<textarea class="form-control" rows="5" id="program_kerja" name="program_kerja" placeholder="Program Kerja" required></textarea>
				</div>
			</div>

		</div>
		<div class="card-footer">
			<input type="submit" name="Simpan" value="Simpan" class="btn btn-info">
			<a href="?page=data-calon" title="Kembali" class="btn btn-secondary">Batal</a>
		</div>
	</form>
</div>

<?php

$sumber = @$_FILES['foto_calon']['tmp_name'];
$target = 'foto/';
$nama_file = @$_FILES['foto_calon']['name'];
$pindah = move_uploaded_file($sumber, $target . $nama_file);

if (isset($_POST['Simpan'])) {

	if (!empty($sumber)) {
		//$sql_simpan = "INSERT INTO tb_calon (id_calon, nama_calon, foto_calon, keterangan) VALUES (
		// '" . $_POST['id_calon'] . "',
		$sql_simpan = "INSERT INTO tb_calon (nama_calon, pendidikan, foto_calon, pengalaman, visi_misi, program_kerja, status) VALUES (
        '" . $_POST['nama_calon'] . "',
        '" . $_POST['pendidikan'] . "',
        '" . $nama_file . "',
        '" . $_POST['pengalaman'] . "',
        '" . $_POST['visi_misi'] . "',
        '" . $_POST['program_kerja'] . "',
		'1')";
		$query_simpan = mysqli_query($koneksi, $sql_simpan);
		mysqli_close($koneksi);

		if ($query_simpan) {
			echo "<script>
      		Swal.fire({title: 'Tambah Data Berhasil',text: '',icon: 'success',confirmButtonText: 'OK'
      		}).then((result) => {if (result.value){
		  	window.location = 'index.php?page=data-calon';
        	}})</script>";
		} else {
			echo "<script>
      		Swal.fire({title: 'Tambah Data Gagal',text: '',icon: 'error',confirmButtonText: 'OK'
      		}).then((result) => {if (result.value){
          	window.location = 'index.php?page=add-calon';
          	}})</script>";
		}
	} elseif (empty($sumber)) {
		echo "<script>
		Swal.fire({title: 'Gagal, Foto Wajib Diisi',text: '',icon: 'error',confirmButtonText: 'OK'
		}).then((result) => {
		if (result.value) {
			window.location = 'index.php?page=add-calon';
		}
		})</script>";
	}else {
		echo "<script>
		  Swal.fire({title: 'Tambah Data Gagal',text: '',icon: 'error',confirmButtonText: 'OK'
		  }).then((result) => {if (result.value){
		  window.location = 'index.php?page=add-calon';
		  }})</script>";
	}
}
