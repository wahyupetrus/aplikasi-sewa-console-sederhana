<?php

$id = $_GET['id'];

include('koneksi.php');

$foto = $row['foto'] ;
	if(file_exists('images/'.$foto))
	{
		unlink('images/'.$foto) ;
	}


$delete=mysqli_query($koneksi, "delete from pelanggan where id='$id'");

if ($delete){
    $status="berhasil";
}else{
    $status="gagal";
}

header("location:index.php?status=".$status);
?>