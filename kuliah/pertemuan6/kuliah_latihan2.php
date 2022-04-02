<?php
$mahasiswa = 
[[
    "gambar"    => "fowaz.jpg",
    "nama"      => "Fowaz", 
    "npm"       => "11111111", 
    "email"     => "fowaz@gmail.com", 
    "jurusan"   => "Teknik Informatika"],
 [
    "gambar"    => "fowaz1.jpg",
    "nama"      => "Amran", 
    "npm"       => "2222222222", 
    "email"     => "amran@gmail.com", 
    "jurusan"   => "Teknik Informatika"], 
 [
    "gambar"   => "fowaz2.jpg",
    "nama"      => "Alfarez", 
    "npm"       => "333333333", 
    "email"     => "Alfarez@gmail.com", 
    "jurusan"   => "Teknik Informatika"],
 [   
    "gambar"    => "fowaz3.jpg",
    "nama"      => "Fowaz Amran", 
    "npm"       => "444444444", 
    "email"     => "FowazAmran@gmail.com", 
    "jurusan"   => "Teknik Informatika"],
 [   
    "gambar"    => "fowaz4.jpg",
    "nama"      => "Amran Alfarez", 
    "npm"       => "55555555", 
    "email"     => "AmranAlfarez@gmail.com", 
    "jurusan"   => "Teknik Informatika"],
 [   
    "gambar"    => "amran.jpg",
    "nama"      => "Fowaz Alfarez", 
    "npm"       => "66666666", 
    "email"     => "FowazAlfarez@gmail.com", 
    "jurusan"   => "Teknik Informatika"],
 [   
    "gambar"    => "amran1.jpg",
    "nama"      => "Alfarez Amran", 
    "npm"       => "777777777", 
    "email"     => "AlfarezAmran@gmail.com", 
    "jurusan"   => "Teknik Informatika"],
 [   
    "gambar"    => "amran2.jpg",
    "nama"      => "Alfarez Fowaz", 
    "npm"       => "88888888", 
    "email"     => "AlfarezFowaz@gmail.com", 
    "jurusan"   => "Teknik Informatika"],
 [   
    "gambar"    => "amran3.jpg",
    "nama"      => "Alfarez Jr.", 
    "npm"       => "9999999", 
    "email"     => "Alfarezjr@gmail.com", 
    "jurusan"   => "Teknik Informatika"],
 [   
    "gambar"    => "amran4.jpg",
    "nama"      => "Amran Jr.", 
    "npm"       => "10101010", 
    "email"     => "Amranjr@gmail.com", 
    "jurusan"   => "Teknik Informatika"]];
    
    // var_dump($mahasiswa[2]["email"]);
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Data Mahasiswa</title>
  </head>
  <body>

      <div class="container">
        <h1>Daftar Mahasiswa</h1>
        <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Gambar</th>
      <th scope="col">Nama</th>
      <th scope="col">NPM</th>
      <th scope="col">Email</th>
      <th scope="col">Jurusan</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
  <?php $no = 1; ?>
  <?php foreach($mahasiswa as $mhs) {?>
    <tr 
    class="align-middle">
      <th scope="row"><?php echo $no++; ?></th>
     
      <td>
            <img src="img/<?php echo $mhs["gambar"]?>"
            width="50" 
            class="rounded-circle">
      </td>
      <td><?php echo $mhs["nama"] ?></td>
      <td><?php echo $mhs["npm"] ?></td>
      <td><?php echo $mhs["email"] ?></td>
      <td><?php echo $mhs["jurusan"] ?></td>
      <td>
          <a href="" class="btn badge bg-warning" >edit</a>
          <a href="" class="btn badge bg-danger" >delete</a>
      </td>
    </tr>
    <?php  }  ?>    
  </tbody>
</table>
      </div>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>