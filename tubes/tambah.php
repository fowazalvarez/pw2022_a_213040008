<?php
require 'functions.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Siswa</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- CSS -->
    <link rel="stylesheet" href="css/style.css" />
</head>

<body>
    <a href="index.php">Kembali ke Data Siswa</a>
    <br><br>

    <div class="mx-auto">

        <!-- Memasukan Data -->
        <div class="card">
            <div class="card-header">
                Tambah Data Siswa
            </div>
            <div class="card-body">
                <?php 
              if($error){
                ?>
                <div class="alert alert-danger" role="alert">
                    <?php echo $error ?>
                </div>
                <?php
                }
                ?>
                <?php 
              if($sukses){
                ?>
                <div class="alert alert-success" role="alert">
                    <?php echo $sukses ?>
                </div>
                <?php
                }
                ?>
                <form action="" method="POST">
                    <!-- nama -->
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama :</label>
                        <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $nama ?>">
                    </div>
                    <!-- email -->
                    <div class="mb-3">
                        <label for="email" class="form-label">Email :</label>
                        <input type="email" class="form-control" id="email" name="email" value="<?php echo $email ?>">
                    </div>
                    <!-- alamat -->
                    <div class="mb-3">
                        <label for="alamat" class="form-label">Alamat :</label>
                        <input type="text" class="form-control" id="alamat" name="alamat" value="<?php echo $alamat ?>">
                    </div>
                    <!-- Program -->
                    <div class="mb-3">
                        <label for="program" class="form-label">Program :</label>
                        <select class="form-control" name="program" id="program">
                            <option value="">- Pilih Program -</option>
                            <option value="3 bulan" <?php if($program == "3 bulan") echo "selected"?>>3 Bulan</option>
                            <option value="6 bulan" <?php if($program == "6 bulan") echo "selected"?>>6 Bulan</option>
                            <option value="12 bulan" <?php if($program == "12 bulan") echo "selected"?>>12 Bulan
                            </option>
                        </select>
                    </div>
                    <!-- gambar -->
                    <div class="mb-3">
                        <label for="gambar" class="form-label">Gambar :</label>
                        <input type="file" class="form-control" id="gambar" name="gambar" value="<?php echo $gambar ?>">
                    </div>
                    <!-- Button Submit -->
                    <div class="col-12">
                        <input type="submit" name="simpan" value="Simpan Data" class="btn btn-primary" />
                    </div>

                </form>
            </div>
        </div>

</body>

</html>