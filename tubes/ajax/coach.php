<?php
require '../Coach/functions.php';
$conn = koneksi();

$keyword = $_GET["keyword"];

$query = "SELECT * FROM coach WHERE
    nama LIKE '%$keyword%' OR
    program LIKE '%$keyword%'";
    
$coach = query($query);

?>
<table class="table container">
    <thead>
        <tr>
            <th>No.</th>
            <th>Gambar</th>
            <th>Nama</th>
            <th>Program Melatih</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php $no = 1; ?>
        <?php foreach($coach as $coh) {?>
        <tr class="align-middle">
            <th scope="row"><?php echo $no++; ?></th>

            <td>
                <img src="../Coach/img/<?= $coh["gambar"]?>" width="50" height="50" class="rounded-circle">
            </td>
            <td><?= $coh["nama"] ?></td>
            <td><?= $coh["program"] ?></td>
            <td>
                <a href="../Coach/editCoach.php?id=<?= $coh["id"]; ?>" class="btn badge bg-warning">Edit</a>
                <a href="../Coach/deleteCoach.php?id=<?= $coh["id"]; ?>" class="btn badge bg-danger"
                    onclick="return confirm('Menghapus Data?');">Delete</a>
            </td>
        </tr>
        <?php  }  ?>
    </tbody>
</table>