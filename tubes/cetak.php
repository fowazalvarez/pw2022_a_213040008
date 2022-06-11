<?php

// Composer's auto-loading functionality
require "vendor/autoload.php";
require 'functions.php';
$siswa = query("SELECT * FROM siswa");

// reference the Dompdf namespace
use Dompdf\Dompdf;
use Dompdf\Options;

// instantiate and use the dompdf class
$dompdf = new Dompdf();

$options = new Options();
$options->set('isRemoteEnabled',true);      
$dompdf = new Dompdf( $options );


$html = '<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <!-- Bootstrap CSS -->
  <link
    rel="stylesheet"
    href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
    crossorigin="anonymous"
  />
  
  <!-- My CSS -->
  <link rel="stylesheet" href="http://localhost/pw2022_a_213040014/tubes/style/style.css">
  <title>Cloud Cinema</title>
</head>
<body>

<h2 class="film-title text-center kelas">Data Siswa</h2>
<table class="table">
<thead>
  <tr>
  <th>No.</th>
  <th>Gambar</th>
  <th>Nama</th>
  <th>Email</th>
  <th>Alamat</th>
  <th>Program</th>
  </tr>';

  $i = 1;
  foreach ($siswa as $swa) {
    $html .= '<tr>
      <td class="align-middle">' . $i++ . '</td>
      <td class="align-middle"><img src="http://localhost/pw2022_a_213040008/tubes/img/'. $swa["gambar_movie"] .'" 
      width="50"></td>
        <td class="align-middle">' . $swa["nama"] .'</td>
        <td class="align-middle">' . $swa["email"] .'</td>
        <td class="align-middle">' . $swa["alamat"] .'</td>
        <td class="align-middle">' . $swa["program"] .'</td>
</tr>';
}


$dompdf->loadHtml($html);

// (Optional) Setup the paper size and orientation
$dompdf->setPaper('A4', 'potrait');

// Render the HTML as PDF
$dompdf->render();

// Output the generated PDF to Browser
$dompdf->stream();
?>