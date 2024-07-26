<?php
require "init.php";
require "index.php";
$data_karyawan = $karyawan->getdata();
if(isset($_POST['cari'])){
    $data_karyawan = $karyawan->cari($_POST["keyword"]);
}
?>

<section class="konten">
<font color="green"><h1 class="tengah">员工数据</h1></font>
<br>
    <button type="submit"><a class="btn btn-sm btn-warning" href="tambahkaryawan.php">tambah karyawan</a></button>
</br>
    <br>
      <form action="" method="post">
       
        <input  class="form-control form-control-sm" type="text" name="keyword" id="keyword">
        <input type="submit" class="btn btn-sm btn-succes" name="cari" value="cari">

</form>
</br>
    <table id="karyawantable" style="width:100%" class="table ">
        
            <tr>
                <font color=""><th>nik</th>
                <th>nama</th>
                <th>alamat</th>
                <th>jabatan</th>
                <th>gaji</th>
                <th>jenis kelamin</th>
                <th>aksi</th>
</tr>
<?php
foreach ($data_karyawan as $row) :
        ?>
        <tr>
            <td><?= $row['nik'];?></td>
            <td><?= $row['nama'];?></td>
            <td><?= $row['alamat'];?></td>
            <td><?= $row['jabatan']; ?></td>
            <td><?=$row['gaji'];?></td>
            <td><?= $row['jenis_kelamin'];?></td>
            <td>
                <a class="btn btn-sm btn-warning" href="updatekaryawan.php?id=<?= $row["id"];?>">ubah</a> 
                <a class="btn btn-sm btn-danger" href="hapuskaryawan.php?id=<?= $row["id"];?>" onclick="return confirm('yakin hapus?');">hapus</a>
      </td>
      </tr>
      <?php
      endforeach;?>
</section>
</table>                                                                                                                                                                                                                                             
</body>
</html>