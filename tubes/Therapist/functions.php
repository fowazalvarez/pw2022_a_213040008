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

// Tambah Data therapist
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
    $program = htmlspecialchars($data["program"]);
    // $gambar = htmlspecialchars($data["gambar"]);

    $query = "INSERT INTO therapist 
                VALUES
                (null, '$nama', '$program', '$gambar')";

    mysqli_query($conn, $query) or die (mysqli_error($conn));

    return mysqli_affected_rows($conn);
}


// Hapus Data therapist
function hapus($id) {
    $conn = koneksi();

    // Query berdasarkan id
    $trp = query("SELECT * FROM therapist WHERE id = $id")[0];
    // Cek jika gambar default
    if($trp["gambar"] !== 'noimg.jpg') {
    // Hapus Gambar
    unlink('../Therapist/img/' . $trp["gambar"]);
    }

    mysqli_query($conn, "DELETE FROM therapist WHERE id = $id") or die(mysqli_error($conn));

    return  mysqli_affected_rows($conn);
}

// Update Data therapist
function ubah($data) {
    $conn = koneksi();

    $id = $data["id"];
    $nama = htmlspecialchars($data["nama"]);
    $program = htmlspecialchars($data["program"]);
    $gambarLama = htmlspecialchars($data["gambarLama"]);

    // Cek apakah user pilih gambar baru atau tidak
    if($_FILES['gambar']['error'] === 4 ) {
        $gambar = $gambarLama;
    } else {
        $gambar = upload();
    }
  
    $query = "UPDATE therapist SET
                nama = '$nama',
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