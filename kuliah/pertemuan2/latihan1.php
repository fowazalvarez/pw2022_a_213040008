<?php
echo 10;
?>

<?php
// Pertemuan 2, membahas mengenai sintaks PHP
// Nilai: Integer, String, Boolean
echo 10;
echo "<hr>";

// Variable
// Wadah untuk menyimpan NILAI
// Namanya bebas, tidak boleh diawali angka
// Tidak boleh ada spasi

$nama = 'Fowaz';
echo $nama;
echo "<br>";

// Bisa ditimpa/Overwrite
$nama = 'Amran';
echo $nama;
echo "<hr>";

// Operator
// Aritmatik
// +, -, x, /, % (Modoulus/Modulo/Sisa Bagi)

echo 1 + 1; //kabataku
echo "<br>";
$alas = 10;
$tinggi = 20;
$luas_segi_tiga = ($alas * $tinggi)/2;
echo $luas_segi_tiga;

// String
// '',""
echo "Jum'at";
echo "<br>";
echo 'Fowaz : "Hello, semua"';
echo "<br>";

//Escaped Character
// \
echo 'Fowaz : "Jum\'at"';
echo "<br>";
echo "Fowaz : \"Jum'at'\"";
echo "<hr>";

// Interpolasi
// Mencetak isi Variabel
// Hanya bisa digunakan oleh ""
echo "Hallo nama saya $nama";
echo "<br>";
$price = 200;
echo $$price;
echo "<hr>";

// Concat
// Penggabung String
// .
$nama_depan = "Fowaz";
$nama_belakang = "Amran";
echo $nama_depan . " " . $nama_belakang;
echo "<hr>";

// Perbandingan
// <, >, =<, =>, ==, !=
echo 1 < 5;
echo "<br>";
echo 10 == "10";
echo "<hr>";

// Identitas/Strict Comparisson
// ===, !==
echo 10 === "10";
echo "<hr>";

// Increment/Decrement
// Penambahan/Pengurangan
// ++, --
$x = 10;
$x++;
echo $x;
echo "<br>";
$x = 10;
echo ++$x;
echo "<br>";
echo $x++;