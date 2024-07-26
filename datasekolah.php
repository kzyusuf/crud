<?php
require "init.php";
require "index.php";
$data_sekolah= $sekolah->getdata();
if(isset($_POST['cari'])){
    $data_sekolah=$sekolah->cari($_POST['keyword']);
}
?>
<section class="konten">
<h1 class="tengah">DATA SEKOLAH</h1>
<br>
    <button type="submit"><a class="btn btn-sm btn-warning" href="tambahsekolah.php">tambah sekolah </a></button>
</br>
    <br>
      <form action="" method="post">
        <input class="form-control form-control-sm"  type="text" name="keyword" id="keyword">
        <input type="submit"  name="cari" value="cari">
</form>
</br>
    <table  style="width:100%" class="table">
       
        <tr>
            <th>id</th>
            <th>kode_kab_kota</th>
            <th>nama_kab_kota</th>
            <th>kategori_sekolah</th>
            <th>jumlah_sekolah</th>
            <th>satuan</th>
            <th>tahun_ajaran</th>
            <th>aksi</th>
       </tr>
        <?php foreach ($data_sekolah as $row) :
        ?>
        <tr>
            <td><?= $row['id'];?></td>
            <td><?= $row['kode_kabupaten_kota'];?></td>
            <td><?= $row['nama_kabupaten_kota'];?></td>
            <td><?= $row['kategori_sekolah']; ?></td>
            <td><?= $row['jumlah_sekolah']; ?></td>
            <td><?= $row['satuan'];?></td>
            <td><?= $row['tahun_ajaran']; ?></td>
            <td>
                <a  class="btn btn-sm btn-warning" href="updatesekolah.php?id=<?= $row["id"];?>">ubah</a> 
                <a  class="btn btn-sm btn-danger" href="hapussekolah.php?id=<?= $row["id"];?>" onclick="return confirm('yakin hapus?');">hapus</a>
      </td>
      </tr>
      <?php
      endforeach;?>
</table>                  
    </section>