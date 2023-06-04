<?php include 'header.php';

$id = $_GET['id'];
$query = mysqli_query($koneksi, "select * from pelanggan where id='$id'");
$pelanggan = mysqli_fetch_array($query);

?>
<div class="container" style="margin-top: 50px;">
    <h4 style="color:white;">Update Data Pelanggan</h4>
    <div class="scrollit">
    <form action="update_pelanggan.php" method="post">
    <table class="table table-borderless">
        <tr>
            <td>Nama</td>
            <td><input name="nama" type="text" value="<?php echo $pelanggan['nama'] ?>" placeholder="Nama Lengkap" class="form-control"></td>
        </tr>
        <tr>
            <td>Nomor HP</td>
            <td><input name="nomor_hp" type="number" value="<?php echo $pelanggan['nomor_hp'] ?>" placeholder="Nomor HP" class="form-control"></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td><input name="alamat" type="alamat" value="<?php echo $pelanggan['alamat'] ?>" placeholder="Alamat" class="form-control">
            </td>
        </tr>
        <tr>
            <td>Tanggal Pinjam</td>
            <td>
              <input type="date" name="tanggal_pinjam" value="<?php echo $pelanggan['tanggal_pinjam'] ?>" class="form-control">
            </td>
        </tr>
        <tr>
            <td>Tanggal Kembali</td>
            <td>
              <input type="date" name="tanggal_kembali" value="<?php echo $pelanggan['tanggal_kembali'] ?>" class="form-control">
            </td>
        </tr>
        <tr>
            <td>Jenis Konsol</td>
            <td>
            <select name="id_console" class="form-control">
                <?php
                $console = mysqli_query($koneksi,"select * from console");
                while($csl = mysqli_fetch_array($console)){
                  echo "<option value='".$csl['id_console']."'";
                  echo $csl['id_console']==$pelanggan['id_console']?"selected":"";
                  echo ">".$csl['nama_console']."</option>";
                }
                ?>
            </select>
            </td>
        </tr>
        <tr>
            <td>Tarif</td>
            <td>
              <input type="text" name="tarif" id="dengan-rupiah" value="<?php echo $pelanggan['tarif'] ?>" placeholder="Tarif" class="form-control">
            </td>
        </tr>
        <tr>
            <td>Petugas</td>
            <td>
            <select name="id_petugas" class="form-control">
                <?php
                $petugas = mysqli_query($koneksi,"select * from petugas");
                while($pgs = mysqli_fetch_array($petugas)){
                  echo "<option value='".$pgs['id_petugas']."'";
                  echo $pgs['id_petugas']==$pelanggan['id_petugas']?"selected":"";
                  echo ">".$pgs['nama_petugas']."</option>";
                }
                ?>
            </select>
            </td>
        </tr>
        <tr>
            <td>Sudah Kembali</td>
            <td>
                  <select name="sudah_kembali" class="form-control">
                    <option value="0">Belum</option>
                    <option value="1">Ya</option>
                  </select>
            </td>
        </tr>
        <tr>
            <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
            <td><button type="submit" class="btn btn-success"><i class="fa-regular fa-floppy-disk"></i> Simpan Data</button>
                <a href="index.php" class="btn btn-primary"><i class="fa-solid fa-circle-arrow-left"></i> Kembali</a>
            </td>
        </tr>
    </table>
    </form>
</div>
<?php include 'footer.php'; ?>