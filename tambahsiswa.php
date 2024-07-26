<?php
require 'init.php';
require 'index.php';
if($_POST){
if($_POST>0){

$siswa->data=[$_POST['id'],$_POST['NIS'],$_POST['nama'],
$_POST['alamat'],$_POST['jurusan']];
$siswa->save();
echo"sukses tambah data";}else{echo "gagal tambah data";}}
?>



<div class="container">
    <section class="konten">
        <h3 class="text-center mt-3">tambah siswa</h3>
<div class="card">
    <div class="card-header text-bg-succes">
    <a class="btn btn-sm btn-secondary float-end" href="datasiswa.php">kembali</a>
</div>
<div class="card-body">
    
    <h1>TAMBAH DATA</h1>
    <form action="" method="post">
        <table>
    <td>NIS</td>
    <td><input type="text" name="NIS" id="NIS"></td>
<tr>
    <td>Nama</td>
    <td><input type="text"  name="nama" id="nama"></td>
</tr>
<tr>
    <td>Alamat</td>
    <td><input type="text"  name="alamat" id="alamat"></td>
</tr>
<tr>
    <td>Jurusan</td>
    <td><input type="text"  name="jurusan" id="jurusan"></td>
</tr>
<tr>
    <td><button type='submit'>SAVE</button></td>
   
</tr>
</table>
</form>
</body>
</html>