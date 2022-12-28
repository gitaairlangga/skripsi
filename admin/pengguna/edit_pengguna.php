<?php

if (isset($_GET['kode'])) {
    $sql_cek = "SELECT * FROM tb_pengguna WHERE id_pengguna='" . $_GET['kode'] . "'";
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

            <input type='hidden' class="form-control" name="id_pengguna" value="<?php echo $data_cek['id_pengguna']; ?>" readonly >

            <div class="form-group row">
                <label class="col-sm-2 col-form-label">NIK: </label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="nik" name="nik" value="<?php echo $data_cek['nik']; ?>" readonly >
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Alamat: </label>
                <div class="col-sm-6">
                    <textarea name="alamat" id="alamat" class="form-control" rows="4" cols="50" readonly><?php echo $data_cek['alamat']; ?></textarea>
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Nama Lengkap: </label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="nama_pengguna" name="nama_pengguna" value="<?php echo $data_cek['nama_pengguna']; ?>" readonly >
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Username: </label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="username" name="username" value="<?php echo $data_cek['username']; ?>" readonly >
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Password: </label>
                <div class="col-sm-6">
                    <input type="password" class="form-control" id="password" name="password" value="<?php echo $data_cek['password']; ?>" readonly>
                    <input id="mybutton" onclick="change()" type="checkbox" class="form-checkbox"> Lihat Password
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Level: </label>
                <div class="col-sm-4">
                    <select name="level" id="level" class="form-control">
                        <option value="">-- Pilih Level --</option>
                        <?php
                        //mengecek data yg dipilih sebelumnya
                        if ($data_cek['level'] == "Administrator") echo "<option value='Administrator' selected>Administrator</option>";
                        else echo "<option value='Administrator'>Administrator</option>";

                        if ($data_cek['level'] == "Petugas") echo "<option value='Petugas' selected>Petugas</option>";
                        else echo "<option value='Petugas'>Petugas</option>";

                        if ($data_cek['level'] == "Pemilih") echo "<option value='Pemilih' selected>Pemilih</option>";
                        else echo "<option value='Pemilih'>Pemilih</option>";
                        ?>
                    </select>
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Status: </label>
                <div class="col-sm-6">
                    <label class="col-sm-3"><input type="radio"  id="status" name="status" value="Aktif" <?php if ($data_cek['status']=='1') echo "checked";?>>Aktif</label>
                    <label class="col-sm-3"><input type="radio"  id="status" name="status" value="Inaktif"<?php if ($data_cek['status']=='0') echo "checked";?>>Inaktif</label>
                </div>
            </div>

        </div>
        <div class="card-footer">
            <input type="submit" name="Ubah" value="Simpan" class="btn btn-success">
            <a href="?page=data-pengguna" title="Kembali" class="btn btn-secondary">Batal</a>
        </div>
    </form>
</div>



<?php

if (isset($_POST['Ubah'])) {

    if($_POST['level']=='Pemilih'){
		$jenis='PST';
	}elseif($_POST['level']=='Panitia'){
		$jenis='PAN';
	}else{
		$jenis='PAN';
	}

    if($_POST['status']=='Aktif'){
        $stts='1';
    }else{
        $stts='0';
    }

    $sql_ubah = "UPDATE tb_pengguna SET
        nama_pengguna='". $_POST['nama_pengguna'] . "',
        username='". $_POST['username'] . "',
        password='". $_POST['password'] . "',
        level='". $_POST['level'] . "',
        status='". $stts . "',
        jenis='" . $jenis. "'
        WHERE id_pengguna='". $_POST['id_pengguna'] . "'";
    $query_ubah = mysqli_query($koneksi, $sql_ubah);
    mysqli_close($koneksi);
    

    if ($query_ubah) {
        echo "<script>
      Swal.fire({title: 'Ubah Data Berhasil',text: '',icon: 'success',confirmButtonText: 'OK'
      }).then((result) => {if (result.value)
        {window.location = 'index.php?page=data-pengguna';
        }
      })</script>";
    } else {
        echo "<script>
      Swal.fire({title: 'Ubah Data Gagal',text: '',icon: 'error',confirmButtonText: 'OK'
      }).then((result) => {if (result.value)
        {window.location = 'index.php?page=data-pengguna';
        }
      })</script>";
    }
}
?>

<script type="text/javascript">
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
</script>