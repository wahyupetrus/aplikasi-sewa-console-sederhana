<?php
 
$id = $_GET['id'];

include('koneksi.php');

$sdh=mysqli_query($koneksi, "UPDATE pelanggan SET sudah_kembali='1' where id='$id'");

if ($sdh){
    $status="berhasil";
}else{
    $status="gagal";
}

header("location:index.php?status=".$status);
?>