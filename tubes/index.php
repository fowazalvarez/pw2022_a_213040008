<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "pw2022_a_213040008";

$koneksi = mysqli_connect($host,$user,$pass,$db);
if(!$koneksi){ //Mengecek Koneksi}
  die("Tidak bisa Terkoneksi");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Data Siswa Archery</title>

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
     integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <!-- CSS -->
  <link rel="stylesheet" href="css/style.css" />

</head>
<body>
  <div class="mx-auto">

  <!-- Memasukan Data -->
  <div class="card">
  <div class="card-header">
    Create / Edit Data
  </div>
  <div class="card-body">
   <form action="" method="POST">
     <!-- nis -->
   <div class="mb-3">
  <label for="nis" class="form-label">NIS</label>
  <input type="text" class="form-control-plaintext" id="nis" name="nis" value="<?php echo $nis ?>">
</div>
    <!-- nama -->
  <div class="mb-3">
  <label for="nama" class="form-label">Nama</label>
  <input type="text" class="form-control-plaintext" id="nama" name="nama" value="<?php echo $nama ?>">
</div>
    <!-- alamat -->
  <div class="mb-3">
  <label for="alamat" class="form-label">Alamat</label>
  <input type="text" class="form-control-plaintext" id="alamat" name="alamat" value="<?php echo $alamat ?>">
</div>
    <!-- Program -->
  <div class="mb-3">
  <label for="program" class="form-label">Program</label>
  <select class="form-control" name="" id="program">
    <option value="">- Pilih Program -</option>
    <option value="3bulan" <?php if($program == "3bulan") echo "selected"?>>3 Bulan</option>
    <option value="6bulan" <?php if($program == "6bulan") echo "selected"?>>6 Bulan</option>
  </select>
</div>

   </form>
  </div>
</div>

<!-- Mengeluarkan Data -->
<div class="card">
  <div class="card-header text-white bg-secondary">
    Data Siswa
  </div>
  <div class="card-body">
   <form action="" Method="POST">


   </form>
  </div>
</div>

  </div>
  
</body>
</html>