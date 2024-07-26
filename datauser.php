<?php
require "init.php";
require "index.php";
$data_user= $user->getdata();
if(isset($_POST['cari'])){
    $data_user=$user->cari($_POST['keyword']);
}
?>
<section class="konten">
<h1 class="tengah">DATA USER</h1>
<br>
    <button type="submit"><a  class="btn btn-sm btn-primary" href="tambahuser.php">tambah user</a></button>
</br>
    <br>
      <form action="" method="post">
        <div class="col-3">
        <input   class="form-control form-control-sm"  type="text" name="keyword" id="keyword">
        <input class="btn btn-sm btn-warning" type="submit" name="cari" value="cari">
</div>
</form>
</br>
<table style="width:100%" class="table">
       
        <tr>
            <th>user</th>
            <th>password</th>
            <th>level</th>
            <th>aksi</th>
       </tr>
        <?php foreach ($data_user as $row) :
        ?>
        <tr>
            <td><?= $row['username'];?></td>
            <td><?= $row['password'];?></td>
            <td><?= $row['level'];?></td>
            <td>
                <a class="btn btn-sm btn-warning" href="updateuser.php?id=<?= $row["id"];?>">ubah</a> 
                <a class="btn btn-sm btn-danger" href="hapususer.php?id=<?= $row["id"];?>" onclick="return confirm('yakin hapus?');">hapus</a>
      </td>
      </tr>
      <?php
      endforeach;?>
      </section>
</table>                  
    </section>