<?php
session_start();

if(empty($_SESSION['username'])){
  header("location:login.php");
}

include 'koneksi.php';

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SEWA CONSOLE</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
<style>
body {
  background-image: url('./assets/bg.jpeg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 100%;
  overflow: hidden;
}

.center {
  margin-left: auto;
  margin-right: auto;
}

img {
  border-radius: 50%;
}

.scrollit {
    overflow-y:scroll;
    height:400px;
}

.fntt {
  font-size: 12px;
}

</style>
<nav class="navbar navbar-expand-lg bg-dark" data-bs-theme="dark">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
	<ul class="navbar-nav">
  <li class="nav-item dropdown">
          <button class="btn btn-dark dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
            SEWA
          </button>
          <ul class="dropdown-menu dropdown-menu-dark">
            <li><a class="dropdown-item" href="index.php">Sewa Console</a></li>
            <li><a class="dropdown-item" href="" data-bs-toggle="modal" data-bs-target="#exampleModal">Tambah Data</a></li>
          </ul>
        </li>
		<li class="nav-item">
			<a class="nav-link active" href="data_pelanggan.php"><i class="fa-solid fa-users"></i> Data Pelanggan</a>
		</li>
		<li class="nav-item">
			<a class="nav-link active" href="console.php"><i class="fa-solid fa-gamepad"></i> Console</a>
		</li>
		<li class="nav-item">
			<a class="nav-link active" href="petugas.php"><i class="fa-solid fa-user-gear"></i> Petugas</a>
		</li>
		</ul>
    </div>
    <ul class="navbar-nav justify-content-end">
      <li class="nav-item dropdown">
      <button type="button" class="btn btn-dark dropdown-toggle btn-sm" data-bs-toggle="dropdown" aria-expanded="false"><?php echo $_SESSION['nama_petugas'];?></button>
        <ul class="dropdown-menu dropdown-menu-dark">
          <li><a class="dropdown-item" href="logout.php">Logout</a></li>
        </ul>
    </ul>
  </div>
</nav>
