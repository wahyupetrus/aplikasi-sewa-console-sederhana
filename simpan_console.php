<?php

$id_console     = $_POST['id_console'];
$nama_console   = $_POST['nama_console'];

 
include ('koneksi.php');


$query = "INSERT INTO console (id_console,nama_console)
VALUES('$id_console','$nama_console')";

$insert = mysqli_query ($koneksi,$query);

if ($insert){
    $status="berhasil";
}else{
    $status="gagal";
}

header("location:console.php?status=".$status);
?>