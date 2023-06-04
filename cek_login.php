<?php

$usernamepg = $_POST['username'];
$passwordpg = md5($_POST['password']);

include('koneksi.php');
 
$petugas = mysqli_query($koneksi,"select * from petugas where username='$usernamepg' and password='$passwordpg'");

$check = mysqli_num_rows($petugas);

if($check>0){
    session_start();

    $penggunaRow = mysqli_fetch_array($petugas);

    $_SESSION['username']   = $penggunaRow['username'];
    $_SESSION['nama_petugas']       = $penggunaRow['nama_petugas'];
    header("location:index.php");
}else{
    header("location:login.php");
}
?>