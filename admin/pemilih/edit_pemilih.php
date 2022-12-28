<?php

    if(isset($_GET['kode'])){
        $sql_cek = "SELECT * FROM tb_pengguna WHERE id_pengguna='".$_GET['kode']."'";
        $query_cek = mysqli_query($koneksi, $sql_cek);
        $data_cek = mysqli_fetch_array($query_cek,MYSQLI_BOTH);
    }
?>

<div class="card card-success">
	<div class="card-header">
		<h3 class="card-title">
			<i class="fa fa-edit"></i> Ubah Data</h3>
	</div>
	<form action="" method="post" enctype="multipart/form-data">
		<div class="card-body">

			<input type='hidden' class="form-control" name="id_pengguna" value="<?php echo $data_cek['id_pengguna']; ?>"
			 readonly/>
			

            <div class="form-group row">
				<label class="col-sm-2 col-form-label">NIK: </label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="nik" name="nik" value="<?php echo $data_cek['nik']; ?>" maxlength= "16"/>
				</div>
			</div>

            <div class="form-group row">
				<label class="col-sm-2 col-form-label">Alamat: </label>
				<div class="col-sm-6">
                    <textarea name="alamat" id="alamat" class="form-control" rows="4" cols="50"><?php echo $data_cek['alamat']; ?></textarea>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Nama Lengkap: </label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="nama_pengguna" name="nama_pengguna" value="<?php echo $data_cek['nama_pengguna']; ?>"
					/>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Username: </label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="username" name="username" value="<?php echo $data_cek['username']; ?>"
					/>
				</div>
							
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Password: </label>
				<div class="col-sm-6">
					<input type="password" class="form-control" id="pass" name="password" value="<?php echo $data_cek['password']; ?>"
					/>
					<input id="mybutton" onclick="change()" type="checkbox" class="form-checkbox"> Lihat Password
				</div>
			</div>
			

		</div>
		<div class="card-footer">
			<input type="submit" name="Ubah" value="Simpan" class="btn btn-success">
			<a href="?page=data-pemilih" title="Kembali" class="btn btn-secondary">Batal</a>
		</div>
	</form>
</div>



<?php

if (isset ($_POST['Ubah'])){

    // $query = "select * from tb_pengguna where nik='" . $_POST['nik'] . "'";
	// $row = mysqli_query($koneksi, $query);
	// $jumlah = mysqli_num_rows($row);

	// $query2="select * from tb_pengguna where username='" . $_POST['username'] . "'";
	// $row2=mysqli_query($koneksi, $query2);
	// $jumlah2=mysqli_num_rows($row2);

	// if ($jumlah > 0) {
	// 	$err = 'NIK Sudah Terdaftar!';
	// }
	// elseif($jumlah2 > 0){
	// 	$err = 'Username Sudah Terdaftar!';
	// }
	// else{
        $sql_ubah = "UPDATE tb_pengguna SET
            nik='".$_POST['nik']."',
            alamat='".$_POST['alamat']."',
            nama_pengguna='". $_POST['nama_pengguna']."',
            username='". $_POST['username']."',
            password='". $_POST['password']."'
            WHERE id_pengguna='". $_POST['id_pengguna']."'";
        $query_ubah = mysqli_query($koneksi, $sql_ubah);
        mysqli_close($koneksi);

		if ($query_ubah) {
			echo "<script>
		  Swal.fire({title: 'Ubah Data Berhasil',text: '',icon: 'success',confirmButtonText: 'OK'
		  }).then((result) => {if (result.value)
			{window.location = 'index.php?page=data-pemilih';
			}
		  })</script>";
		  }else{
		  echo "<script>
		  Swal.fire({title: 'Ubah Data Gagal',text: '',icon: 'error',confirmButtonText: 'OK'
		  }).then((result) => {if (result.value)
			{window.location = 'index.php?page=data-pemilih';
			}
		  })</script>";
		}

    // }
}
?>

<script type="text/javascript">
//Menampilkan Pass
    function change()
    {
    var x = document.getElementById('pass').type;

    if (x == 'password')
    {
        document.getElementById('pass').type = 'text';
        document.getElementById('mybutton').innerHTML;
    }
    else
    {
        document.getElementById('pass').type = 'password';
        document.getElementById('mybutton').innerHTML;

    }
	}
//end Menampilkan Pass

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