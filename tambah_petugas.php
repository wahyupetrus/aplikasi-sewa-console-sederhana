<?php include 'header.php'; ?>
<div class="container" style="margin-top: 50px;">
    <h4 style="color:white;">Tambah Petugas</h4>
    <form action="simpan_petugas.php" method="post">
    <table class="table table-borderless">
        <tr>
            <td>Nama Petugas</td>
            <td><input name="nama_petugas" type="text" placeholder="Nama Petugas" class="form-control"></td>
        </tr>
        <tr>
            <td></td>
            <td><button type="submit" class="btn btn-success"><i class="fa-regular fa-floppy-disk"></i> Simpan Data</button>
                <a href="petugas.php" class="btn btn-primary"><i class="fa-solid fa-circle-arrow-left"></i> Kembali</a>
            </td>
        </tr>
    </table>
    </form>
</div>
<?php include 'footer.php'; ?>