<?php
include 'header.php';
?>

    <div class ="container fntt" style="margin-top: 50px;">
    <table class="table table-striped">
        <thead class="table-dark">
          <tr>
            <th width="20">NO</th>
            <th>Nama Petugas</th>
            <th>Username</th>
            <th width="150">Action</th>
          </tr>
        </thead>
        <tbody>
        <?php
        $nomor = 1;
        $petugas = mysqli_query($koneksi,"select * from petugas");
        while($row=mysqli_fetch_array($petugas)){
        ?>
          <tr>
            <th><?php echo $nomor;?></td>
            <td><?php echo $row['nama_petugas']?></td>
            <td><?php echo $row['username']?></td>
            <td>
                <a href="edit_petugas.php?id_petugas=<?php echo $row['id_petugas'];?>" class="btn btn-warning btn-sm"><i class="fa-solid fa-user-pen"></i></a>
                <a href="delete_petugas.php?id_petugas=<?php echo $row['id_petugas'];?>" onclick="return confirm('Yakin Mau di Hapus?')" class="btn btn-danger btn-sm"><i class="fa-solid fa-trash"></i> </a>
            </td>
          </tr>
        <?php
        $nomor++;
        } ?>
        </tbody>
      </table>
      <a href="tambah_petugas.php" class="btn btn-warning btn-sm"><i class="fa-solid fa-user-gear"></i> Tambah Petugas</a>
      </div>
<?php include 'footer.php'; ?>
