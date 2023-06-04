<?php
include 'header.php';
?>

    <div class ="container" style="margin-top: 30px;">
    <div class="scrollit fntt">
    <table class="table table-striped">
        <thead class="table-dark">
          <tr>
            <th width="20">NO</th>
            <th>Nama Console</th>
            <th width="200">Action</th>
          </tr>
        </thead>
        <tbody>
        <?php
        $nomor = 1;
        $console = mysqli_query($koneksi,"select * from console");
        while($row=mysqli_fetch_array($console)){
        ?>
          <tr>
            <th><?php echo $nomor;?></td>
            <td><?php echo $row['nama_console']?></td>
            <td>
                <a href="edit_console.php?id_console=<?php echo $row['id_console'];?>" class="btn btn-warning btn-sm"><i class="fa-solid fa-pen"></i></a>
                <a href="delete_console.php?id_console=<?php echo $row['id_console'];?>" onclick="return confirm('Yakin Mau di Hapus?')" class="btn btn-danger btn-sm"><i class="fa-solid fa-trash"></i> </a>
            </td>
          </tr>
        <?php
        $nomor++;
        } ?>
        </tbody>
      </table>
      </div>
      <a href="tambah_console.php" class="btn btn-warning btn-sm"><i class="fa-solid fa-gamepad"></i> Tambah Console</a>
<?php include 'footer.php'; ?>
