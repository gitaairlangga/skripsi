<?php

if (isset($_GET['kode'])) {
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
			<table class="table table-bordered table-striped">
				<thead>
					<tr>
						
						<th><center>Foto Kandidat</center></th>
                        <th><center>Nama Kandidat</center></th>
                        <th><center>Pendidikan Terakhir</center></th>
                        <th><center>Pengalaman</center></th>
                        <th><center>Visi dan Misi</center></th>
                        <th><center>Program Kerja</center></th>
					</tr>
				</thead>
				<tbody>

					<?php
					$no = 1;
					$sql = $koneksi->query("select * from tb_calon where id_calon=$kode");
					while ($data = $sql->fetch_assoc()) {
					?>

						<tr>
							<td hidden>
								<?php echo $data['id_calon']; ?>
							</td>
							<td align="center">
                                <img src="foto/<?php echo $data['foto_calon']; ?>" width="150px" />
                            </td>
                            <td align="center">
                                <?php echo $data['nama_calon']; ?>
                            </td>
                            <td align="center">
                                <?php echo $data['pendidikan']; ?>
                            </td>
                            <td align="justify" style="white-space:pre-line">
                                <?php echo $data['pengalaman'] ?>
                            </td>
                            <td align="justify" style="white-space:pre-line">
                                <?php echo $data['visi_misi'] ?>
                            </td>
                            <td align="justify" style="white-space:pre-line">
                                <?php echo $data['program_kerja'] ?>
                            </td>
						</tr>

					<?php
					}
					?>
				</tbody>
				</tfoot>
			</table>
		</div>
	</div>
	<!-- /.card-body -->