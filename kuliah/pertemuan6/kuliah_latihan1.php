<?php
// Array Associative
// Array yang indexnya berupa string yang ber-asosiasi dengan nilainya

$mahasiswa = 
[[
    "nama"      => "Fowaz", 
    "npm"       => "213040008", 
    "email"     => "fowaz@gmail.com", 
    "Jurusan"   => "Teknik Informatika"],
 [
    "nama"      => "Amran", 
    "npm"       => "213040008", 
    "email"     => "amran@gmail.com", 
    "Jurusan"   => "Teknik Informatika"], 
 [
    "nama"      => "Alfarez", 
    "npm"       => "213040028", 
    "email"     => "alfarez@gmail.com", 
    "Jurusan"   => "Teknik Informatika"],
 [   
    "nama"      => "Amran Alfarez", 
    "npm"       => "213040008", 
    "email"     => "amranalfarez@gmail.com", 
    "Jurusan"   => "Teknik Informatika"]];
    
    // var_dump($mahasiswa[2]["email"]);
?>



    <?php foreach($mahasiswa as $mhs) {?>
        <ul>
            <li>Nama : <?php echo $mhs["nama"] ?></li>
            <li>NPM : <?php echo $mhs["npm"] ?></li>
            <li>Email : <?php echo $mhs["email"] ?></li>
            <li>Jurusan : <?php echo $mhs["Jurusan"] ?></li>
        </ul>
    <?php  }  ?>
