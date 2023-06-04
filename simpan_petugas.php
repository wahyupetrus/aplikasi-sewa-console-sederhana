<?php

$id_petugas     = $_POST['id_petugas'];
$nama_petugas   = $_POST['nama_petugas'];

include ('koneksi.php');

$query = "INSERT INTO petugas (id_petugas,nama_petugas)
VALUES('$id_petugas','$nama_petugas')";

$insert = mysqli_query ($koneksi,$query);

if ($insert){
    $status="berhasil";
}else{
    $status="gagal";
}
header("location:petugas.php?status=".$status);
?>