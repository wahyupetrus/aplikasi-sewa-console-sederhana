<?php include 'header.php';

$id_console = $_GET['id_console'];
$query = mysqli_query($koneksi, "select * from console where id_console='$id_console'");
$console = mysqli_fetch_array($query);

?>
<div class="container" style="margin-top: 50px;">
    <h4 style="color:white;">Update Data Console</h4>
    <form action="update_console.php" method="post">
    <table class="table table-borderless">
        <tr>
            <td>Nama Console</td>
            <td>
            <input name="nama_console" type="text" value="<?php echo $console['nama_console'] ?>" placeholder="Nama Console" class="form-control"></td>
        </tr>
        <tr>
        <td><input type="hidden" name="id_console" value=<?php echo $_GET['id_console'];?>></td>
            <td><button type="submit" class="btn btn-success"><i class="fa-regular fa-floppy-disk"></i> Simpan Data</button>
                <a href="console.php" class="btn btn-primary"><i class="fa-solid fa-circle-arrow-left"></i> Kembali</a>
            </td>
        </tr>
    </table>
    </form>
</div>
<?php include 'footer.php'; ?>