<?php
require 'functions.php';

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
    <a href="tambah.php">Tambah Data Siswa</a>
    <br><br>

    <!-- Mengeluarkan Data -->
    <div class="card">
        <div class="card-header text-white bg-secondary">
            Data Siswa
        </div>
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Gambar</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Email</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Program</th>
                        <th scope="col">Aksi</th>
                    </tr>
                <tbody>
                    <?php 
                        $sql2       = "SELECT * FROM siswa order by id asc";
                        $result2    = mysqli_query($koneksi,$sql2);
                        $urut       = 1;
                        while($row  = mysqli_fetch_array($result2)){
                            $id         = $row['id'];
                            $gambar     = $row['gambar'];
                            $nama       = $row['nama'];
                            $email      = $row['email'];
                            $alamat     = $row['alamat'];
                            $program    = $row['program'];

                            ?>
                    <tr>
                        <th scope="row"><?php echo $urut++ ?></th>
                        <td><img src="img/<?php echo $gambar ?>" width="50"></td>
                        <td scope="row"><?php echo $nama ?></td>
                        <td scope="row"><?php echo $email ?></td>
                        <td scope="row"><?php echo $alamat ?></td>
                        <td scope="row"><?php echo $program ?></td>
                        <td scope="row">
                            <a href="index.php?op=edit&id=" <?php echo $id ?>"><button type="button"
                                    class="btn btn-warning">Edit</button></a>

                            <button type="button" class="btn btn-danger">Delete</button>
                        </td>
                    </tr>
                    <?php
                        }
                        ?>
                </tbody>
                </thead>
            </table>
        </div>
    </div>

    </div>

</body>

</html>