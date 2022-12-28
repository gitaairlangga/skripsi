<?php

	if (isset($_GET['kode'])) {
		$kode = $_GET['kode'];
	} else {
		$kode = 0;
	}
?>

<div class="card card-info">
	<div class="card-header">
		<h3 class="card-title">
			<i class="fa fa-table"></i> Kotak Suara
		</h3>
	</div>
	
	<p>
	<div class="card card-info">
		<div class="card-header">
			<h3 class="card-title">
				<i class="fa fa-fa-vote-yea"></i> Daftar Vote
			</h3>
		</div>
		<select name="daftar_vote" id="daftar_vote" class="form-control" onchange="DaftarVote(this.value)">
			<option value="0">- Pilih -</option>
			<?php
			// include_once dirname(__FILE__) . '/../../inc/koneksi.php';
			$sql1 = "select * from tb_daftarvote where flag_id=1";
			$row = $koneksi->query($sql1);
			//echo $kode;
			while ($data = $row->fetch_assoc()) {
				if ($kode != $data['daftarvote_id']) {
					$selected = "";
				} else {
					$selected = "selected";
				}
				echo '<option value="' . $data['daftarvote_id'] . '" ' . $selected . '>' . $data['nama'] . '</option>';
			}
			$no = 1;
			?>
		</select>
	</div>
	</p>
	<script>
		function DaftarVote(value) {
			var url = '?page=data-kotak&kode=' + value;
			window.location = url;
		}
	</script>

	<!-- /.card-header -->
	<div class="card-body">
		<div class="table-responsive">
			<table id="data_kotak" class="table table-bordered table-striped">
				<thead>
					<tr>
						<th><center>No</center></th>
						<th><center>Nama Pemilih</center></th>
						<th><center>Username</center></th>
						<th><center>Waktu Memilih</center></th>
						<th><center>Lokasi Pemilihan</center></th>

					</tr>
				</thead>
				<tbody>

				<?php
					$no = 1;
					$sql2 = "select `a`.`id_vote` AS `id_vote`,
					`a`.`daftarvote_id` AS `daftarvote_id`,
					`a`.`id_calon` AS `id_calon`,
					`a`.`id_pemilih` AS `id_pemilih`,
					`a`.`date` AS `date`,
					`a`.`latitude_akhir` AS `latitude_akhir`,
					`a`.`longitude_akhir` AS `longitude_akhir`,
					`b`.`nama_calon` AS `nama_calon`,
					`b`.`foto_calon` AS `foto_calon`,
					`b`.`pengalaman` AS `pengalaman`,
					`c`.`nama_pengguna` AS `nama_pemilih`, 
					c.username 
					from `tb_vote` `a` join `tb_calon` `b` on `a`.`id_calon` = `b`.`id_calon`
					join `tb_pengguna` `c` on `a`.`id_pemilih` = `c`.`id_pengguna` 
					where a.daftarvote_id=" .  $kode . " order by date desc, nama_pemilih";
					if($result=$koneksi->query($sql2)){
						while ($data = $result->fetch_assoc()) {	
					?>
						<tr>
							<td align="center">
								<?php echo $no++; ?>
							</td>
							<td align="center">
								<?php echo $data['nama_pemilih']; ?>
							</td>
							<td align="center">
								<?php echo $data['username']; ?>
							</td>
							<td align="center">
								<?php echo $data['date']; ?>
							</td>
							<td style="width:450px; height:450px;">
								<iframe src='https://maps.google.com/maps?q=<?php echo $data["latitude_akhir"];?>,<?php echo $data["longitude_akhir"];?>&hl=es;z=14&output=embed' style="width:100%; height:100%;"></iframe>
								
							</td>
							<!-- <td>
								<?php echo $data['latitude_akhir'];?>,
								<?php echo $data['longitude_akhir'];?>
							</td> -->

						</tr>
		
						<?php
						}
					}
					?>
					
				</tbody>
				</tfoot>
			</table>
		</div>
	</div>
	<!-- /.card-body -->
	