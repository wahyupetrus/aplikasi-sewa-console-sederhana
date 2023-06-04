<?php 
	include "koneksi.php" ;
    $id = $_POST['id'];
	$foto = $_FILES['foto']['name'];
	$file_tmp = $_FILES['foto']['tmp_name'] ;
	move_uploaded_file($file_tmp, 'images/'.$foto) ;
	$query = "UPDATE pelanggan SET 
								    foto = '$foto' WHERE id='$id'
	";
mysqli_query($koneksi, $query); 
header('location:index.php');
?>