<?php
require 'functions.php';

$siswa = query("SELECT * FROM siswa");

// Query siswa Ketika tombol cari diklik
if(isset($_GET["cari"])) {
  $keyword = $_GET["keyword"];
  $query = "SELECT * FROM siswa WHERE
              nama LIKE '%$keyword%' OR
              email LIKE '%$keyword%' OR
              alamat LIKE '%$keyword%' OR
              program LIKE '%$keyword%'";
  $siswa = query($query);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- CSS -->
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" />


</head>

<body>
    <!-- Navbar -->
    <ul class="nav nav-pills container">
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Data Siswa</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="tambah.php">Tambah Data Siswa</a>
        </li>
    </ul>
    <!-- Akhir dari Navbar -->

    <div class="container">
        <h1>Daftar Siswa Archery</h1>

    </div>

    <!-- Searching Tab -->
    <div class="row mt-4 mx-auto">
        <div class="col-8">
            <form action="" method="get">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" name="keyword" id="keyword" autocomplete="off"
                        placeholder="Masukkan Keyword pencarian. . ." autofocus>
                    <button class="btn btn-primary" type="submit" id="cari" name="cari">Cari !</button>
                </div>
            </form>
        </div>
    </div>
    <!-- Akhir dari Searching Tab -->

    <table class="table container">
        <thead>
            <tr>
                <th>No.</th>
                <th>Gambar</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Alamat</th>
                <th>Program</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1; ?>
            <?php foreach($siswa as $swa) {?>
            <tr class="align-middle">
                <th scope="row"><?php echo $no++; ?></th>

                <td>
                    <img src="img/<?= $swa["gambar"]?>" width="50" class="rounded-circle">
                </td>
                <td><?= $swa["nama"] ?></td>
                <td><?= $swa["email"] ?></td>
                <td><?= $swa["alamat"] ?></td>
                <td><?= $swa["program"] ?></td>
                <td>
                    <a href="edit.php?id=<?= $swa["id"]; ?>" class="btn badge bg-warning">Edit</a>
                    <a href="delete.php?id=<?= $swa["id"]; ?>" class="btn badge bg-danger"
                        onclick="return confirm('Menghapus Data?');">Delete</a>
                </td>
            </tr>
            <?php  }  ?>
        </tbody>
    </table>
    </div>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>