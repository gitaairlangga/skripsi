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
				<a href="?page=add-calon" class="btn btn-primary">
					<i class="fa fa-edit"></i> Tambah Data</a>
			</div>
			<br>
			<table id="example1" class="table table-bordered table-striped">
				<thead>
					<tr>
						<th><center>No</center></th>
						<th><center>Nama Kandidat</center></th>
						<th><center>Pendidikan Terakhir</center></th>
						<th><center>Foto Kandidat</center></th>
						<th><center>Pengalaman</center></th>
						<th><center>Visi dan Misi</center></th>
						<th><center>Program Kerja</center></th>
						<th><center>Status</center></th>
						<th><center>Aksi</center></th>
					</tr>
				</thead>
				<tbody>

					<?php
					$no = 1;
					$sql = $koneksi->query("select * from tb_calon order by nama_calon asc");
					while ($data = $sql->fetch_assoc()) {
					?>

						<tr>
							<td align="center">
								<?php echo $no++; ?>
							</td>
							<td align="center">
								<?php echo $data['nama_calon']; ?>
							</td>
							<td align="center">
								<?php echo $data['pendidikan']; ?>
							</td>
							<td align="center">
								<img src="foto/<?php echo $data['foto_calon']; ?>" width="150px" />
							</td>
							<td align="justify" style="white-space:pre-line">
								<?php echo $data['pengalaman']; ?>
							</td>
							<td align="justify" style="white-space:pre-line">
								<?php echo $data['visi_misi']; ?>
							</td>
							<td align="justify" style="white-space:pre-line">
								<?php echo $data['program_kerja']; ?>
							</td>
							<td align="center">
								<?php $stt = $data['status']  ?>
								<?php if ($stt == '1') { ?>
									<span class="badge badge-success">Aktif</span>
								<?php } elseif ($stt == '0') { ?>
									<span class="badge badge-danger">Inaktif</span>
							</td>
						<?php } ?>
						<td>
							<a href="?page=edit-calon&kode=<?php echo $data['id_calon']; ?>" title="Ubah" class="btn btn-success btn-sm">
								<i class="fa fa-edit"></i>
								
							</a>
							</br>
							</br>
							<a href="?page=del-calon&kode=<?php echo $data['id_calon']; ?>" onclick="return confirm('Apakah anda yakin hapus data ini ?')" title="Hapus" class="btn btn-danger btn-sm">
								<i class="fa fa-trash"></i>
							</a>
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
	<script>
		$(document).ready(function() {

			$('#example').DataTable({
				"dom": 'Bfrtip',
				"paging": true,
				"lengthChange": false,
				"searching": true,
				"ordering": true,
				"info": true,
				"autoWidth": false,
				"buttons": [
					'excelHtml5'

				]
			});

		});
	</script>