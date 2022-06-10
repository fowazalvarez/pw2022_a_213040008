<?php 
session_start();

require 'functions.php';
$conn = koneksi();

if(isset($_POST["login"])) {

    $username = $_POST["username"];
    $password = $_POST["password"];
    
    $result = mysqli_query($conn, "SELECT * FROM users WHERE username = '$username'");

    // Cek Username
    if(mysqli_num_rows($result) === 1) {

        // Cek Password
        $row = mysqli_fetch_assoc($result);
        if (password_verify($password, $row["password"])) {
            // Set Session
            $_SESSION["login"] = true;

            header("Location: index.php");
            exit;
        }
    }
    
    $error = true;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- CSS -->
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" />
</head>

<body>

    <form action="" method="post">

        <div id="contact" class="offset w-50 mx-auto mt-5 mb-5">
            <div class="post-heading text-center">
                <h3 class="display-4 font-weight-bold">Log In</h3>
                <hr class="w-50 mx-auto mb-5" />
                <?php if (isset($error)) ; ?>
                <p style="color: red; font-style: italic;">Username / Password Salah !</p>
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

                <button type="submit" class="btn mt-2 btn-primary" name="login">Login</button>
                <p class="login-register-text">Anda belum punya akun? <a href="registrasi.php">Register</a></p>
            </form>
        </div>

    </form>

</body>

</html>