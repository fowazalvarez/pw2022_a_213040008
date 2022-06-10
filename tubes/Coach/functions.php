<?php 

// Koneksi ke Database
function koneksi() {
    $conn = mysqli_connect("localhost", "root", "", "pw2022_a_213040008") or die('koneksi gagal !');

    return $conn;
}

// Query
function query($query) {
    $conn = koneksi();
    $result = mysqli_query($conn, $query)or die(mysqli_error($conn));


    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
 } 
 return $rows;
}

// Tambah Data Siswa
function tambah($data) {
    $conn = koneksi();
    
    // cek apkaah user tidak memilih gambar
    if(($_FILES["gambar"]["error"]) === 4) {
        // Beri gambar default
        $gambar = 'noimg.jpg';
    }else {
        // lakukan fungsi upload
        $gambar = upload();
        // cek jika upload gagal
        if (!$gambar) {
            return false;
        }
    }

    $nama = htmlspecialchars($data["nama"]);
    $email = htmlspecialchars($data["email"]);
    $alamat = htmlspecialchars($data["alamat"]);
    $program = htmlspecialchars($data["program"]);
    // $gambar = htmlspecialchars($data["gambar"]);

    $query = "INSERT INTO siswa 
                VALUES
                (null, '$nama', '$email', '$alamat', '$program', '$gambar')";

    mysqli_query($conn, $query) or die (mysqli_error($conn));

    return mysqli_affected_rows($conn);
}


// Hapus Data Siswa
function hapus($id) {
    $conn = koneksi();

    // Query berdasarkan id
    $swa = query("SELECT * FROM siswa WHERE id = $id")[0];
    // Cek jika gambar default
    if($swa["gambar"] !== 'noimg.jpg') {
    // Hapus Gambar
    unlink('img/' . $swa["gambar"]);
    }

    mysqli_query($conn, "DELETE FROM siswa WHERE id = $id") or die(mysqli_error($conn));

    return  mysqli_affected_rows($conn);
}

// Update Data Siswa
function ubah($data) {
    $conn = koneksi();

    $id = $data["id"];
    $nama = htmlspecialchars($data["nama"]);
    $email = htmlspecialchars($data["email"]);
    $alamat = htmlspecialchars($data["alamat"]);
    $program = htmlspecialchars($data["program"]);
    $gambar = htmlspecialchars($data["gambar"]);

    $query = "UPDATE siswa SET
                nama = '$nama',
                email = '$email',
                alamat = '$alamat',
                program = '$program',
                gambar = '$gambar'
                WHERE id = $id
    
    ";

    mysqli_query($conn, $query) or die (mysqli_error($conn));

    return mysqli_affected_rows($conn);
}


// Upload Gambar

function upload() {

// Siapkan gambar
$filename = $_FILES["gambar"]["name"];
$filetmpname = $_FILES["gambar"]["tmp_name"];
$filesize = $_FILES["gambar"]["size"];
$filetype = pathinfo($filename, PATHINFO_EXTENSION);
$allowedtype = ['jpg', 'jpeg', 'png'];

// cek apakah file bukan gambar 
if(!in_array($filetype, $allowedtype)) {
    echo "<script>
          alert('File tidak sesuai');
         </script>";
    return false;
}
// cek jika gambar terlalu besar
if($filesize > 1000000) {
    echo "<script>
    alert('Size terlalu besar');
   </script>";
return false;
}
// PROSES UPLOAD GAMBAR
$newfilename = uniqid() . $filename;

move_uploaded_file($filetmpname, 'img/' . $newfilename);
return $newfilename; 


}

// Registrasi
function registrasi($data) {
    $conn = koneksi();

    $username = strtolower(stripslashes($data["username"]));
    $password = mysqli_real_escape_string($conn, $data["password"]);
    $password2 = mysqli_real_escape_string($conn, $data["password2"]);

//Cek username apakah sudah ada atau belum
$query = "SELECT username FROM users WHERE username = '$username';";

  $result = mysqli_query($conn, $query);

if(mysqli_fetch_assoc($result)) {
    echo "<script>
        alert('Username Sudah Terdaftar!')
        </script>";
        return false;
}

// Cek Konfirmasi Password
if($password !== $password2) {
    echo "<script>
            alert('Password Tidak Sesuai!');
        </script>";
        return false;
    }

//Enkripsi Password
$password = password_hash($password, PASSWORD_DEFAULT);

//Tambahkan User Baru
mysqli_query($conn, "INSERT INTO users VALUES('', '$username', '$password')");
    return mysqli_affected_rows($conn);

}

?>