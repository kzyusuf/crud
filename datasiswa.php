<?php
require "init.php";
require "index.php";
$data_siswa= $siswa->getdata();
if(isset($_POST['cari'])){
    $data_siswa=$siswa->cari($_POST['keyword']);
}
?>
<section class="konten">
<h1 class="tengah">DATA SISWA</h1>
<br>
    <button type="submit"><a class="btn btn-sm btn-warning" href="tambahsiswa.php">tambah siswa </a></button>
</br>
    <br>
      <form action="" method="post">
        <input class="form-control form-control-sm"  type="text" name="keyword" id="keyword">
        <input type="submit"  name="cari" value="cari">
</form>
</br>
    <table  style="width:100%" class="table">
       
        <tr>
            <th>NIS</th>
            <th>Nama Siswa</th>
            <th>Alamat</th>
            <th>Jurusan</th>
            <th>Aksi</th>
       </tr>
        <?php foreach ($data_siswa as $row) :
        ?>
        <tr>
            <td><?= $row['NIS'];?></td>
            <td><?= $row['nama'];?></td>
            <td><?= $row['alamat'];?></td>
            <td><?= $row['jurusan']; ?></td>
            <td>
                <a  class="btn btn-sm btn-warning" href="updatesiswa.php?id=<?= $row["id"];?>">ubah</a> 
                <a  class="btn btn-sm btn-danger" href="hapussiswa.php?id=<?= $row["id"];?>" onclick="return confirm('yakin hapus?');">hapus</a>
      </td>
      </tr>
      <?php
      endforeach;?>
</table>                  
    </section>