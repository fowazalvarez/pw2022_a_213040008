<?php
require '../Therapist/functions.php';



if(hapus($_GET["id"]) > 0) {
    echo "
    <script>
        alert('Data Berhasil Dihapus!');
        document.location.href = '../Therapist/therapist.php';
    </script>
";
}else {
    echo "
    <script>
        alert('Data Gagal Dihapus!');
        document.location.href = '../Therapist/therapist.php';
    </script>
";
}
?>