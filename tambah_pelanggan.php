<div>
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Data</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>Modal body text goes here.</p>
  
    <form action="simpan_pelanggan.php" method="post" enctype="multipart/form-data">
        <div class="mb-3">
            <td>Foto</td>
            <td><input name="foto" type="file" placeholder="Foto Profil" class="form-control"></td>
        </div>
        <div class="mb-3">
            <td>Nama</td>
            <td><input name="nama" type="text" placeholder="Nama Lengkap" class="form-control"></td>
        </div>
        <div class="mb-3">
            <td>Nomor HP</td>
            <td><input name="nomor_hp" type="number" placeholder="Nomor HP" class="form-control"></td>
        </div>
        <div class="mb-3">
            <td>Alamat</td>
            <td><input name="alamat" type="text" placeholder="Alamat" class="form-control"></td>
        </div>
        <div class="mb-3">
            <td>Tanggal Pinjam</td>
            <td><input name="tanggal_pinjam" type="date" class="form-control"></td>
        </div>
        <div class="mb-3">
            <td>Tanggal Kembali</td>
            <td><input name="tanggal_kembali" type="date" class="form-control"></td>
        </div>
        <div class="mb-3">
            <td>Jenis Console</td>
            <td>
              <select name="id_console" class="form-control">
                <?php
                $console = mysqli_query($koneksi,"select * from console");
                while($csl = mysqli_fetch_array($console)){
                  echo "<option value='".$csl['id_console']."'>".$csl['nama_console']."</option>";
                }
                ?>
              </select>
            </td>
        </div>
        <div class="mb-3">
            <td>Tarif</td>
            <td><input name="tarif" type="text" placeholder="Tarif" id="dengan-rupiah" class="form-control"/></td>
        </div>
        <div class="mb-3">
            <td>Petugas</td>
            <td>
                <select name="id_petugas" class="form-control">
                <?php
                $petugas = mysqli_query($koneksi,"select * from petugas where username='".$_SESSION['username']."'");
                while($pgs = mysqli_fetch_array($petugas)){
                echo "<option value='".$pgs['id_petugas']."'>".$pgs['nama_petugas']."</option>";
                }
                ?>
                </select>
            </td>
        </div>
  <tr>
    <td>Sudah Kembali</td>
    <td>
      <select name="sudah_kembali" class="form-control">
        <option value="0">Belum</option>
        <option value="1">Ya</option>
      </select>
    </td>
  </tr>
    </table>
    <form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-success">Save changes</button>
      </div>
    </div>
  </div>
</div>

</div>