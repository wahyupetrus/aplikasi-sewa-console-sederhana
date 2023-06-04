<?php include 'header.php';

$id_petugas = $_GET['id_petugas'];
$query = mysqli_query($koneksi, "select * from petugas where id_petugas='$id_petugas'");
$petugas = mysqli_fetch_array($query);

?>
<div class="container" style="margin-top: 50px;">
    <h4 style="color:white;">Update Data Petugas</h4>
    <form action="update_petugas.php" method="post">
    <table class="table table-borderless">
        <tr>
            <td>Nama Petugas</td>
            <td>
            <input name="nama_petugas" type="text" value="<?php echo $petugas['nama_petugas'] ?>" placeholder="Nama Petugas" class="form-control"></td>
        </tr>
        <tr>
        <td><input type="hidden" name="id_petugas" value=<?php echo $_GET['id_petugas'];?>></td>
            <td><button type="submit" class="btn btn-success"><i class="fa-regular fa-floppy-disk"></i> Simpan Data</button>
                <a href="petugas.php" class="btn btn-primary"><i class="fa-solid fa-circle-arrow-left"></i> Kembali</a>
            </td>
        </tr>
    </table>
    </form>
</div>
<?php include 'footer.php'; ?>