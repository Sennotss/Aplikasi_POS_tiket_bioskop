<?php
include 'koneksi.php';
$q1 = mysqli_query($conn, "SELECT COUNT(*) as jml_film FROM film");
$q2 = mysqli_query($conn, "SELECT COUNT(*) as jml_kasir FROM kasir");
$q3 = mysqli_query($conn, "SELECT COUNT(*) as jml_studio FROM studio");

$d1 = mysqli_fetch_array($q1);
$d2 = mysqli_fetch_array($q2);
$d3 = mysqli_fetch_array($q3);

$jml_film= $d1['jml_film'];
$jml_kasir= $d2['jml_kasir'];
$jml_studio= $d3['jml_studio'];

?>