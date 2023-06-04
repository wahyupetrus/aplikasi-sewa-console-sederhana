<?php

$foto = $_FILES['foto']['name'];
$file_tmp = $_FILES['foto']['tmp_name'] ;
$nama                = $_POST['nama'];
$nomor_hp            = $_POST['nomor_hp'];
$alamat              = $_POST['alamat'];
$tanggal_pinjam      = $_POST['tanggal_pinjam'];
$tanggal_kembali     = $_POST['tanggal_kembali'];
$id_console          = $_POST['id_console'];
$tarif               = $_POST['tarif'];
$id_petugas          = $_POST['id_petugas'];
$sudah_kembali       = $_POST['sudah_kembali'];
move_uploaded_file($file_tmp, 'images/'.$foto) ;


include ('koneksi.php');

$query = "INSERT INTO pelanggan (foto,nama,nomor_hp,alamat,tanggal_pinjam,tanggal_kembali,id_console,tarif,id_petugas,sudah_kembali)
VALUES('$foto','$nama','$nomor_hp','$alamat','$tanggal_pinjam','$tanggal_kembali','$id_console','$tarif','$id_petugas','$sudah_kembali')";

$insert = mysqli_query ($koneksi,$query);

if ($insert){
    $status="berhasil";
}else{
    $status="gagal";
}
header("location:index.php?status=".$status);
?>