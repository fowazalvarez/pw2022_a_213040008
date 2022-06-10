<?php
require 'functions.php';

if(isset($_POST["register"])) {

    if(registrasi ($_POST) > 0) {
        echo "<script>
                alert('User Baru Berhasil Ditambahkan!');
                </script>";
    }else {
        echo mysqli_error($conn);
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Regristrasi</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- CSS -->
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" />
</head>

<body>

    <form action="" method="POST">

        <div id="contact" class="offset w-50 mx-auto mt-5 mb-5">
            <div class="post-heading text-center">
                <h3 class="display-4 font-weight-bold">Registrasi</h3>
                <hr class="w-50 mx-auto mb-5" />
            </div>

            <form action="">
                <div class="form-group mb-3">
                    <label for="username">Username : </label>
                    <input type="text" class="form-control" name="username" id="username" autocomplete="off" />
                </div>
                <div class="form-group mb-3">
                    <label for="password">Password : </label>
                    <input type="password" class="form-control" name="password" id="password" />
                </div>
                <div class="form-group mb-3">
                    <label for="password2">Konfirmasi Password : </label>
                    <input type="password" class="form-control" name="password2" id="password2" />
                </div>

                <button type="submit" class="btn mt-2 btn-primary" name="register">Register!</button>
                <p class="login-register-text">Sudah punya akun? <a href="login.php">Sign In</a></p>
            </form>
        </div>


    </form>

</body>

</html>