<div class="card card-info">
	<div class="card-header">
		<h3 class="card-title">
			<i class="fa fa-table"></i> Data Pemilih
		</h3>
	</div>
	<!-- /.card-header -->
	<div class="card-body">
		<div class="table-responsive">
			<!-- <div>
				<a href="?page=add-pemilih" class="btn btn-primary">
					<i class="fa fa-edit"></i> Tambah Data</a>
			</div> -->
			<br>
			<table id="example1" class="table table-bordered table-striped">
				<thead>
					<tr>
						<th><center>No</center></th>
						<th><center>NIK</center></th>
						<th><center>Nama Pemilih</center></th>
						<th><center>Alamat</center></th>
						<th><center>Username</center></th>
						<th><center>Lokasi</center></th>
						<th><center>Status</center></th>
						<th><center>Aksi</center></th>
					</tr>
				</thead>
				<tbody>

					<?php
					$no = 1;
					$sql = $koneksi->query("select * from tb_pengguna where jenis='PST' "); //where jenis='PST'
					while ($data = $sql->fetch_assoc()) {
					?>

						<tr>
							<td align="center">
								<?php echo $no++; ?>
							</td>
							<td>
								<?php echo $data['nik']; ?>
							</td>
							<td align="center">
								<?php echo $data['nama_pengguna']; ?>
							</td>
							<td >
								<?php echo $data['alamat']; ?>
							</td>
							<td align="center">
								<?php echo $data['username']; ?>
							</td>
							<td style="width:330px; height:330px;">
								<iframe src='https://maps.google.com/maps?q=<?php echo $data["latitude"];?>,<?php echo $data["longitude"];?>&hl=es;z=14&output=embed' style="width:100%; height:100%;"></iframe>
								
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
								<a href="?page=edit-pemilih&kode=<?php echo $data['id_pengguna']; ?>" title="Ubah" class="btn btn-success btn-sm">
									<i class="fa fa-edit"></i>
								</a>
								<br><br>
								<a href="?page=del-pemilih&kode=<?php echo $data['id_pengguna']; ?>" onclick="return confirm('Hapus Data Ini ?')" title="Hapus" class="btn btn-danger btn-sm">
									<i class="fa fa-trash"></i>
									</>
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