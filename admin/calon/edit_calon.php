<?php

if (isset($_GET['kode'])) {
	$sql_cek = "SELECT * FROM tb_calon WHERE id_calon='" . $_GET['kode'] . "'";
	$query_cek = mysqli_query($koneksi, $sql_cek);
	$data_cek = mysqli_fetch_array($query_cek, MYSQLI_BOTH);
}
?>

<div class="card card-success">
	<div class="card-header">
		<h3 class="card-title">
			<i class="fa fa-edit"></i> Ubah Data
		</h3>
	</div>
	<form action="" method="post" enctype="multipart/form-data">
		<div class="card-body">

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Nama Lengkap Kandidat: </label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="nama_calon" name="nama_calon" value="<?php echo $data_cek['nama_calon']; ?>" />
				</div>
			</div>

			<div class="form-group row">
                <label class="col-sm-2 col-form-label">Pendidikan Terakhir: </label>
                <div class="col-sm-6">
                    <select name="pendidikan" id="pendidikan" class="form-control">
                        <option value="">-- Pilih Level --</option>
                        <?php
                        //mengecek data yg dipilih sebelumnya
                        if ($data_cek['pendidikan'] == "S1") echo "<option value='S1' selected>S1</option>";
                        else echo "<option value='S1'>S1</option>";

						if ($data_cek['pendidikan'] == "S2") echo "<option value='S2' selected>S2</option>";
                        else echo "<option value='S2'>S2</option>";

						if ($data_cek['pendidikan'] == "S3") echo "<option value='S3' selected>S3</option>";
                        else echo "<option value='S3'>S3</option>";

						if ($data_cek['pendidikan'] == "SMA/SMK") echo "<option value='SMA/SMK' selected>SMA/SMK</option>";
                        else echo "<option value='SMA/SMK'>SMA/SMK</option>";

						if ($data_cek['pendidikan'] == "SMP") echo "<option value='SMP' selected>SMP</option>";
                        else echo "<option value='SMP'>SMP</option>";

                        
                        ?>
                    </select>
                </div>
            </div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Foto Kandidat: </label>
				<div class="col-sm-6">
					<img src="foto/<?php echo $data_cek['foto_calon']; ?>" width="150px" />
					<br><br>
					<input type="file" id="foto_calon" name="foto_calon">
					<p class="help-block">
						<font color="red">*Format Gambar .jpeg/.jpg/.png</font>
					</p>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Pengalaman: </label>
				<div class="col-sm-6">
					<textarea class="form-control" rows="5" id="pengalaman" name="pengalaman"><?php echo $data_cek['pengalaman']; ?></textarea>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Visi dan Misi: </label>
				<div class="col-sm-6">
					<textarea class="form-control" rows="5" id="visi_misi" name="visi_misi"><?php echo $data_cek['visi_misi']; ?></textarea>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Program Kerja: </label>
				<div class="col-sm-6">
					<textarea class="form-control" rows="5" id="program_kerja" name="program_kerja"><?php echo $data_cek['program_kerja']; ?></textarea>
				</div>
			</div>

			<div class="form-group row">
                <label class="col-sm-2 col-form-label">Status: </label>
                <div class="col-sm-6">
                    <label class="col-sm-3"><input type="radio"  id="status" name="status" value="Aktif" <?php if ($data_cek['status']=='1') echo "checked";?>>Aktif</label>
                    <label class="col-sm-3"><input type="radio"  id="status" name="status" value="Inaktif"<?php if ($data_cek['status']=='0') echo "checked";?> readonly>Inaktif</label>
                </div>
            </div>

		</div>
		<div class="card-footer">
			<input type="submit" name="Ubah" value="Simpan" class="btn btn-success">
			<a href="?page=data-calon" title="Kembali" class="btn btn-secondary">Batal</a>
		</div>
	</form>
</div>


<?php

$sumber = @$_FILES['foto_calon']['tmp_name'];
$target = 'foto/';
$nama_file = @$_FILES['foto_calon']['name'];
$pindah = move_uploaded_file($sumber, $target . $nama_file);

if (isset($_POST['Ubah'])) {

	if($_POST['status']=='Aktif'){
        $stts='1';
    }else{
        $stts='0';
    }

	if (!empty($sumber)) {
		$foto = $data_cek['foto_calon'];
		if (file_exists("foto/$foto")) {
			unlink("foto/$foto");
		}

		$sql_ubah = "UPDATE tb_calon SET
            nama_calon='" . $_POST['nama_calon'] . "',
            pendidikan='" . $_POST['pendidikan'] . "',
            foto_calon='" . $nama_file . "',
            pengalaman='" . $_POST['pengalaman'] . "',
            visi_misi='" . $_POST['visi_misi'] . "',
            program_kerja='" . $_POST['program_kerja'] . "',
            status='" . $stts . "'
            WHERE id_calon=" . $_GET['kode'];
		$query_ubah = mysqli_query($koneksi, $sql_ubah);
	} elseif (empty($sumber)) {
		$sql_ubah = "UPDATE tb_calon SET
            nama_calon='" . $_POST['nama_calon'] . "',
            pendidikan='" . $_POST['pendidikan'] . "',
            pengalaman='" . $_POST['pengalaman'] . "',
            visi_misi='" . $_POST['visi_misi'] . "',
            program_kerja='" . $_POST['program_kerja'] . "',
            status='" . $stts . "'
            WHERE id_calon=" . $_GET['kode'];
		$query_ubah = mysqli_query($koneksi, $sql_ubah);
	}

	if ($query_ubah) {
		echo "<script>
        Swal.fire({title: 'Ubah Data Berhasil',text: '',icon: 'success',confirmButtonText: 'OK'
        }).then((result) => {
            if (result.value) {
                window.location = 'index.php?page=data-calon';
            }
        })</script>";
	} else {
		echo "<script>
        Swal.fire({title: 'Ubah Data Gagal',text: '',icon: 'error',confirmButtonText: 'OK'
        }).then((result) => {
            if (result.value) {
                window.location = 'index.php?page=data-calon';
            }
        })</script>";
	}
}
