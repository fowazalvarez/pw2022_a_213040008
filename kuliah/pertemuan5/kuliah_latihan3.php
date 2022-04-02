<?php
// STUDI KASUS ARRAY

$mahasiswa = [["Fowaz", "213040008", "fowaz@gmail.com", "Teknik Informatika"], 
["Amran", "213040008", "amran@gmail.com", "Teknik Informatika"], 
["Alfarez", "213040008", "alfarez@gmail.com", "Teknik informatika"]];


?>


<?php foreach($mahasiswa as $mhs) {?>
    <ul>
        <li><?php echo "Nama: $mhs[0]" ?></li>
        <li><?php echo "NPM: $mhs[1]" ?></li>
        <li><?php echo "Email: $mhs[2]" ?></li>
        <li><?php echo "Jurusan: $mhs[3]" ?></li>
    </ul>
<?php  }  ?>