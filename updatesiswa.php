<?php

    require"init.php";
    require"index.php";
    $id=$_GET['id'];
    $datas=$siswa->getdatasingle($id);
if($_POST){
    if($_POST>0){
    $siswa->data=[$_POST['id'],$_POST['NIS'],$_POST['nama'],$_POST['alamat'],$_POST['jurusan']];
    $siswa->update();

    echo"
    <script>
    alert('data berhasil diubah');
    document.location.href='index.php';
    </script>";
}else {echo"gagal ubah data";}}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">a
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body bgcolor="">
    <h1>UBAH DATA</h1>
    <form action="" method="post">
        <table>
    <td>NIS</td>
    <td>
        <input type="hidden" name="id" value="<?= $datas['id'];?>">
        <input type="text" name="NIS" id="NIS" required="" value="<?= $datas['NIS'];?>">
    </td>
    <tr>
    <td>Nama</td>
    <td><input type="text"  name="nama" id="nama" required="" value="<?=$datas['nama'];?>"></td>
</tr>
<tr>
    <td>Alamat</td>
    <td><input type="text"  name="alamat" id="alamat" required="" value="<?=$datas['alamat'];?>"></td>
</tr>
<tr>
    <td>Jurusan</td>
    <td><input type="text"  name="jurusan" id="jurusan" required="" value="<?=$datas['jurusan'];?>"></td>
</tr>
<tr>
    <td><button type='submit'>SAVE</button></td>
    <td><button> <a href="index.php">kembali</a></button></td>
</tr>
</table>
</form>
</body>
</html>
