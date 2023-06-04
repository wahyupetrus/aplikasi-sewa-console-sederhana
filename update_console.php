<?php

$id_console     =   $_POST['id_console'];
$nama_console   =   $_POST['nama_console'];

include ('koneksi.php');

$query = "UPDATE console SET nama_console='$nama_console' WHERE id_console='$id_console'";
$update = mysqli_query($koneksi,$query);

header("location:console.php");
?>