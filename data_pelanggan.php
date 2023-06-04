<?php
include 'header.php';
?>

    <div class ="container" style="margin-top: 50px;">
    <div class="scrollit fntt">
    <table class="table table-striped">
        <thead class="table-dark">
          <tr>
            <th>NO</th>
            <th>Foto</th>
            <th>Nama</th>
            <th>Nomor Hp</th>
            <th>Alamat</th>
            <th>Tanggal Pinjam</th>
            <th>Tanggal Kembali</th>
            <th>Jenis Console</th>
            <th>Tarif</th>
            <th>Petugas</th>
            <th>Sudah Kembali</th>
            <th width="120">Action</th>
          </tr>
        </thead>
        <tbody>
        <?php
        $nomor = 1;
        $pelanggan = mysqli_query($koneksi,"select p.*,c.nama_console,n.nama_petugas
        from pelanggan as p 
        join console as c on p.id_console=c.id_console
        join petugas as n on p.id_petugas=n.id_petugas
        where sudah_kembali='1';");
        while($row=mysqli_fetch_array($pelanggan)){
        ?>
          <tr>
            <th><?php echo $nomor;?></td>
            <td>
            <a href="edit_foto.php?id=<?php echo $row['id'];?>">  
            <img src="images/<?= $row['foto'] ?>" style="width: 40px;height:40px;object-fit: cover;">
            </a></td>
            <td><?php echo $row['nama']?></td>
            <td><?php echo $row['nomor_hp']?></td>
            <td><?php echo $row['alamat']?></td>
            <td><?php echo $row['tanggal_pinjam']?></td>
            <td><?php echo $row['tanggal_kembali']?></td>
            <td><?php echo $row['nama_console']?></td>
            <td><?php echo $row['tarif']?></td>
            <td><?php echo $row['nama_petugas']?></td>
            <td><?php echo $row['sudah_kembali']==0?'Belum':'Ya'?></td>
            <td>
                <a href="edit_pelanggan.php?id=<?php echo $row['id'];?>" class="btn btn-warning btn-sm"><i class="fa-solid fa-pen"></i></a>
                <a href="delete_pelanggan.php?id=<?php echo $row['id'];?>" onclick="return confirm('Yakin Mau di Hapus?')" class="btn btn-danger btn-sm"><i class="fa-solid fa-trash"></i> </a>
            </td>
          </tr>
        <?php
        $nomor++;
        } ?>
        </tbody>
      </table>
      </div>
    </div>
<?php include 'footer.php'; ?>
