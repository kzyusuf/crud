<?php
require 'init.php';
require 'index.php';
if($_POST){
if($_POST>0){

$karyawan->data=[$_POST['id'],$_POST['nik'],$_POST['nama'],
$_POST['alamat'],$_POST['jabatan'],$_POST['gaji'],$_POST['jenis_kelamin']];
$karyawan->save();
echo"sukses tambah data";}else{echo "gagal tambah data";}}
?>



<div class="container">
    <section class="konten">
        <h3 class="text-center mt-3">tambah karyawan</h3>
<div class="card">
    <div class="card-header text-bg-succes">
    <a class="btn btn-sm btn-secondary float-end" href="datakaryawan.php">kembali</a>
</div>
<div class="card-body">


    <h1>TAMBAH DATA</h1>
    <form action="" method="post">
        <table>
    <td>NIK</td>
    <td><input type="text" name="nik" id="nik"></td>
<tr>
    <td>Nama</td>
    <td><input type="text"  name="nama" id="nama"></td>
</tr>
<tr>
    <td>Alamat</td>
    <td><input type="text"  name="alamat" id="alamat"></td>
</tr>
<tr>
    <td>Jabatan</td>
    <td><input type="text"  name="jabatan" id="jabatan"></td>
</tr>
<tr>
    <td>Gaji</td>
    <td><input type="text"  name="gaji" id="gaji"></td>
</tr>
<tr>
    <td>JK</td>
    <td><input type="text"  name="jenis_kelamin" id="jenis_kelamin"></td>
</tr>
<tr>
    <td><button type='submit'>SAVE</button></td>
</tr>
</table>
</form>