<?php

$id_petugas     =   $_POST['id_petugas'];
$nama_petugas   =   $_POST['nama_petugas'];

include ('koneksi.php');

$query = "UPDATE petugas SET nama_petugas='$nama_petugas' WHERE id_petugas='$id_petugas'";
$update = mysqli_query($koneksi,$query);

header("location:petugas.php");
?>