<?php
include 'koneksi.php';
$id = $_GET['id'];
$query = mysqli_query($koneksi, "select * from pelanggan where id='$id'");
$user = mysqli_fetch_array($query);

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Profile</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="./css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="./css/bootstrap-icons.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
  <style>
img {
  border-radius: 50%;
}

</style>
</head>
<body>
<div align="center">
<div class="row col-lg-6 border rounded mt-5 p-2 shadow-lg">

<div class="container" style="margin-top: 20px;">
    <form action="update_foto.php" method="post" enctype="multipart/form-data">
    <table class="table">
    <div class="col-md-4 text-center"><br>
							<img src="images/<?php echo $user['foto'] ; ?>" style="width: 180px;height:180px;object-fit: cover;">
						<div><br>
        <tr>
        <td></td>
            <td><input name="foto" type="file" value="<?php echo $user['foto'] ?>" class="form-control"></td>
        </tr>
        <tr>
            <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
            <td><button type="submit" class="btn btn-success">Simpan</button>
                <a href="index.php" class="btn btn-primary">Kembali</a>
            </td>
        </tr>
    </form>
</div>