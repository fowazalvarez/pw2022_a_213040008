<?php 
session_start();

if( !isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}

require '../Coach/functions.php';

    // Mengambil Data di URL
    $id = $_GET["id"];

    // Query data Siswa berdasarkan ID
    $coh = query("SELECT * FROM coach WHERE id = $id")[0];    


    // Apakah data berhasil diubah atau tidak
if(isset($_POST["ubah"])) {
        if(ubah($_POST) > 0) {
            echo "
                <script>
                    alert('data berhasil diubah!');
                    document.location.href = '../Coach/coach.php';
                </script>
            ";
        } else {
            echo "
            <script>
                alert('data gagal diubah!');
                document.location.href = '../Coach/coach.php';
            </script>
        ";
        }
    
    }


// Form pilihan
$nama = "";
$program  = "";
$gambar   = "";


?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Edit Data Siswa</title>
</head>

<body>

    <!-- Navbar -->
    <ul class="nav nav-pills container">
        <li class="nav-item">
            <a class="nav-link" aria-current="page" href="../Coach/coach.php">Data Coach</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" href="#">Mengedit Data Coach</a>
        </li>
    </ul>

    <!-- Akhir dari Navbar -->

    <div class="container">
        <h1>Form Edit Data Coach</h1>

        <div class="row mt-3">
            <div class="col-5">
                <form action="" method="POST" autocomplete="off">
                    <input type="hidden" name="id" value="<?= $coh["id"];  ?>">
                    <!-- Nama -->
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama : </label>
                        <input type="text" class="form-control" id="nama" name="nama" required
                            value="<?= $coh["nama"]; ?>">
                    </div>
                    <!-- Program -->
                    <div class="mb-3">
                        <label for="email" class="form-label" required>Program : </label>
                        <select class="form-control" name="program" id="program" value="<?= $coh["gambar"]; ?>">
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
                        <input type="file" class="form-control" id="gambar" name="gambar"
                            value="<?= $coh["gambar"]; ?>">
                    </div>

                    <button type="submit" name="ubah" class="btn btn-primary">Ubah Data Coach</button>
                </form>


            </div>
        </div>

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