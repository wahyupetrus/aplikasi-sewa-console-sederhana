<?php

$id                  = $_POST['id'];
$nama                = $_POST['nama'];
$nomor_hp            = $_POST['nomor_hp'];
$alamat              = $_POST['alamat'];
$tanggal_pinjam      = $_POST['tanggal_pinjam'];
$tanggal_kembali     = $_POST['tanggal_kembali'];
$tarif               = $_POST['tarif'];
$id_console          = $_POST['id_console'];
$id_petugas          = $_POST['id_petugas'];
$sudah_kembali       = $_POST['sudah_kembali'];

include ('koneksi.php');

$query = "UPDATE pelanggan SET nama='$nama',nomor_hp='$nomor_hp',alamat='$alamat',tanggal_pinjam='$tanggal_pinjam',
tanggal_kembali='$tanggal_kembali',tarif='$tarif',id_console='$id_console',id_petugas='$id_petugas',sudah_kembali='$sudah_kembali'
WHERE id='$id'";

$update = mysqli_query ($koneksi,$query);

if ($update){
    $status="berhasil";
}else{
    $status="gagal";
}
header("location:index.php?status=".$status);
?>