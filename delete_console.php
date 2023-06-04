<?php

$id_console = $_GET['id_console'];

include('koneksi.php');


$delete=mysqli_query($koneksi, "delete from console where id_console='$id_console'");

if ($delete){
    $status="berhasil";
}else{
    $status="gagal";
}

header("location:console.php?status=".$status);
?>