<?php 
require 'functions.php';

// Ketika tombol di klik
if(isset($_POST["tambah"])) {
    // Jalankan fungsi tambah
    if(isset($_POST["tambah"])) {
  
        // cek apakah data berhasil ditambahkan atau tidak
        if(tambah($_POST) > 0) {
            echo "
                <script>
                    alert('Data Berhasil Ditambahkan!');
                    document.location.href = 'index.php';
                </script>
            ";
        } else {
            echo "
            <script>
                alert('Data Gagal Ditambahkan!');
                document.location.href = 'index.php';
            </script>
        ";
        }
    
    }
}

// Form pilihan
$nama = "";
$email = "";
$alamat = "";
$program  = "";
$gambar   = "";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- CSS -->
    <link rel="stylesheet" href="css/style.css" />

</head>
<!-- Navbar -->

<ul class="nav nav-pills container">
    <li class="nav-item">
        <a class="nav-link" aria-current="page" href="index.php">Data Siswa</a>
    </li>
    <li class="nav-item">
        <a class="nav-link active" href="#">Tambah Data Siswa</a>
    </li>
</ul>

<!-- Akhir dari Navbar -->

<div class="container">
    <h1>Tambah Data Siswa</h1>

    <div class="row mt-3">
        <div class="col-5">
            <form action="" method="POST" autocomplete="off" enctype="multipart/form-data">
                <!-- Nama -->
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama : </label>
                    <input type="text" class="form-control" id="nama" name="nama" required>
                </div>
                <!-- Email -->
                <div class="mb-3">
                    <label for="email" class="form-label">Email :</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <!-- Alamat -->
                <div class="mb-3">
                    <label for="alamat" class="form-label">Alamat : </label>
                    <input type="text" class="form-control" id="alamat" name="alamat" required>
                </div>
                <!-- Program -->
                <div class="mb-3">
                    <label for="email" class="form-label">Program : </label>
                    <select class="form-control" name="program" id="program" required>
                        <option value="">- Pilih Program -</option>
                        <option value="3 bulan" <?php if($program == "3 bulan") echo "selected"?>>3 Bulan</option>
                        <option value="6 bulan" <?php if($program == "6 bulan") echo "selected"?>>6 Bulan</option>
                        <option value="12 bulan" <?php if($program == "12 bulan") echo "selected"?>>12 Bulan
                        </option>
                    </select>
                </div>
                <!-- Gambar -->
                <div class="mb-3">
                    <label for="gambar" class="form-label">Gambar : </label>
                    <input type="file" class="form-control" id="gambar" name="gambar">
                </div>

                <!-- Tombol -->
                <button type="submit" name="tambah" class="btn btn-primary">Tambah Data Siswa</button>
            </form>


        </div>
    </div>

</div>

<body>

</body>

</html>