<?php

require '../Coach/functions.php';
session_start();

if( !isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}

// Pagination
// Konfirgurasi
$jumlahDataPerHalaman = 10;
$jumlahDAta = count(query("SELECT * FROM coach"));
$jumlahHalaman = ceil($jumlahDAta / $jumlahDataPerHalaman);
$halamanAktif = ( isset ($_GET["halaman"]) ) ? $_GET["halaman"] : 1;
$awalData = ($jumlahDataPerHalaman * $halamanAktif) - $jumlahDataPerHalaman;


$coach = query("SELECT * FROM coach LIMIT $awalData, $jumlahDataPerHalaman");

// Query siswa Ketika tombol cari diklik
if(isset($_GET["cari"])) {
  $keyword = $_GET["keyword"];
  $query = "SELECT * FROM coach WHERE
              nama LIKE '%$keyword%' OR
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
    <nav class="navbar navbar-expand-xl navbar-dar bg-dark">
        <div class="container-fluid">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0" style="padding-left: 95px;">
                    <li class="nav-item">
                        <a class="nav-link text-white" aria-current="page" href="../index.php">Daftar Siswa</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="coach.php">Daftar Coach</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="therapist.php">Daftar Therapist</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="../logout.php">Log Out</a>
                    </li>

                </ul>

                <form action="" class="d-flex" role="search" style="padding-right: 50px;">
                    <input class="form-control me-2 w-auto p-1 border border-light" type="text" name="keyword"
                        id="keyword" autocomplete="off" placeholder="Ketik disini..." aria-label="Search" autofocus>
                    <button class="btn btn-outline-light" type="submit" id="tombol-cari" name="cari">Cari !</button>
                </form>
            </div>
        </div>
    </nav>
    <!-- Akhir dari Navbar -->

    <div class="container">
        <h1>Daftar Coach Archery</h1>
        <h5><a class="text-dark" href="../Coach/tambahCoach.php">Tambah Data Coach</a></h5>

        <br><br>



        <!-- Navigasi -->

        <?php // if( $halamanAktif > 1 ) : ?>
        <!-- <a href="?halaman=<? // $halamanAktif - 1; ?>">&laquo;</a> -->
        <?php // endif; ?>

        <?php for($i = 1; $i <= $jumlahHalaman; $i++) : ?>
        <?php if( $i == $halamanAktif) : ?>
        <a href="?halaman=<?= $i; ?>" style="font-weight: bold; color: black;"><?= $i; ?></a>
        <?php else: ?>
        <a href="?halaman=<?= $i; ?>"><?= $i; ?></a>
        <?php endif; ?>
        <?php endfor; ?>

        <?php // if( $halamanAktif < $jumlahHalaman ) : ?>
        <!-- <a href="?halaman=<? // $halamanAktif + 1; ?>">&raquo;</a> -->
        <?php // endif; ?>

        <!-- Akhir dari Navigasi -->

    </div>
    <div id="container">
        <table class="table container">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Gambar</th>
                    <th>Nama</th>
                    <th>Program Melatih</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1; ?>
                <?php foreach($coach as $coh) {?>
                <tr class="align-middle">
                    <th scope="row"><?php echo $no++; ?></th>

                    <td>
                        <img src="../Coach/img/<?= $coh["gambar"]?>" width="50" height="50" class="rounded-circle">
                    </td>
                    <td><?= $coh["nama"] ?></td>
                    <td><?= $coh["program"] ?></td>
                    <td>
                        <a href="../Coach/editCoach.php?id=<?= $coh["id"]; ?>" class="btn badge bg-warning">Edit</a>
                        <a href="../Coach/deleteCoach.php?id=<?= $coh["id"]; ?>" class="btn badge bg-danger"
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
    <script src="js/script.js"></script>
</body>

</html>