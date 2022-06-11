<?php
require '../functions.php';
$conn = koneksi();
$keyword = $_GET["keyword"];

$query = "SELECT * FROM siswa WHERE
    nama LIKE '%$keyword%' OR
    email LIKE '%$keyword%' OR
    alamat LIKE '%$keyword%' OR
    program LIKE '%$keyword%'";
    
$siswa = query($query);

?>
<table class="table container">
    <thead>
        <tr>
            <th>No.</th>
            <th>Gambar</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Alamat</th>
            <th>Program</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php $no = 1; ?>
        <?php foreach($siswa as $swa) {?>
        <tr class="align-middle">
            <th scope="row"><?php echo $no++; ?></th>

            <td>
                <img src="img/<?= $swa["gambar"]?>" width="50" height="50" class="rounded-circle">
            </td>
            <td><?= $swa["nama"] ?></td>
            <td><?= $swa["email"] ?></td>
            <td><?= $swa["alamat"] ?></td>
            <td><?= $swa["program"] ?></td>
            <td>
                <a href="edit.php?id=<?= $swa["id"]; ?>" class="btn badge bg-warning">Edit</a>
                <a href="delete.php?id=<?= $swa["id"]; ?>" class="btn badge bg-danger"
                    onclick="return confirm('Menghapus Data?');">Delete</a>
            </td>
        </tr>
        <?php  }  ?>
    </tbody>
</table>