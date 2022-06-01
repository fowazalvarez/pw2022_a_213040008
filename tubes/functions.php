<?php
// Koneksi ke Database
$koneksi = mysqli_connect("localhost", "root", "", "pw2022_a_213040008");
if(!$koneksi){ 
//Mengecek Koneksi
  die("Tidak bisa Terkoneksi");
}
$nama     = "";
$email    = "";
$program  = "";
$alamat   = "";
$gambar   = "";
$sukses   = "";
$error    = "";

if(isset($_POST['simpan'])){
    $nama       = $_POST['nama'];
    $email      = $_POST['email'];
    $program    = $_POST['program'];
    $alamat     = $_POST['alamat'];
    $gambar     = $_POST['gambar'];
  
    if($nama && $email && $program && $alamat && $gambar) {
      $sql1       = "insert into siswa(nama,email,program,alamat,gambar) values ('$nama','$email','$program','$alamat','$gambar')";
      $result     = mysqli_query($koneksi,$sql1);
      if($result){
        $sukses   = "Berhasil Memasukkan Data Baru";
      }else{
        $error    = "Gagal Memasukkan Data";
      }
    }else{
      $error = "Silahkan Masukan Semua Data";
    }
  }

?>