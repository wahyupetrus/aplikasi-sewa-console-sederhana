<?php

$id_petugas = $_GET['id_petugas'];

include('koneksi.php');


$delete=mysqli_query($koneksi, "delete from petugas where id_petugas='$id_petugas'");

if ($delete){
    $status="berhasil";
}else{
    $status="gagal";
}

header("location:petugas.php?status=".$status);
?>