<?php
    require"init.php";
    require"index.php";
    $id=$_GET['id'];
    $k=$karyawan->getdatasingle($id);
if($_POST){
    if($_POST>0){
    $karyawan->data=[$_POST['id'],$_POST['nik'],$_POST['nama'],$_POST['alamat'],$_POST['jabatan'],$_POST['gaji'],$_POST['jenis_kelamin']];
    $karyawan->update();
    echo"
    <script>
    alert('data berhasil diubah');
    document.loation.href='datakaryawan.php';
    </script>";
}else {echo"gagal ubah data";}}
?>

<section class="konten">
    <h1>UBAH DATA</h1>
    <form action="" method="post">
        <table>
        <td>id</td>
    <td><input type="hidden" name="id" value="<?= $k['id'];?>"></td>
<tr>
    <td>NIK</td>
    <td><input type="text" name="nik" id="nik" required="" value="<?= $k['nik'];?>"></td>
</tr>
    <tr>
    <td>Nama</td>
    <td><input type="text"  name="nama" id="nama" required="" value="<?=$k['nama'];?>"></td>
</tr>
<tr>
    <td>Alamat</td>
    <td><input type="text"  name="alamat" id="alamat" required="" value="<?=$k['alamat'];?>"></td>
</tr>
<tr>
    <td>Jabatan</td>
    <td><input type="text"  name="jabatan" id="jabatan" required="" value="<?=$k['jabatan'];?>"></td>
</tr>
<tr>
    <td>gaji</td>
    <td><input type="text"  name="gaji" id="gaji" required="" value="<?=$k['gaji'];?>"></td>
</tr>

<tr>
    <td>JK</td>
    <td><input type="text"  name="jenis_kelamin" id="jenis_kelamin" required="" value="<?=$k['jenis_kelamin'];?>"></td>
</tr>
<tr>
    <td><button type='submit'>SAVE</button></td>
    <td><button> <a href="datakaryawan.php">kembali</a></button></td>
</tr>
</table>
</form>
</section>
