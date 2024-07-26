<?php
require 'init.php';
require 'index.php';
if($_POST){
if($_POST>0){

$sekolah->data=['',$_POST['kode_kabupaten_kota'],$_POST['nama_kabupaten_kota'],$_POST['kategori_sekolah'],$_POST['jumlah_sekolah'],$_POST['satuan'],$_POST['tahun_ajaran']];
$sekolah->save();

    echo"sukses tambah data";
}else{
    echo "gagal tambah data";
}
}
?>



<div class="container">
    <section class="konten">
        <h3 class="text-center mt-3">tambah sekolah</h3>
<div class="card">
    <div class="card-header text-bg-succes">
    <a class="btn btn-sm btn-secondary float-end" href="datasekolah.php">kembali</a>
</div>
<div class="card-body">
    
    <h1>TAMBAH DATA</h1>
    <form action="" method="post">
        <table>
<tr>
    <td>kode_kab_kota</td>
    <td><input type="text"  name="kode_kabupaten_kota" id="kode_kabupaten_kota"></td>
</tr>
<tr>
    <td>nama_kab_kota</td>
    <td><input type="text"  name="nama_kabupaten_kota" id="nama_kabupaten_kota"></td>
</tr>
<tr>
    <td>kategori sekolah</td>
    <td><input type="text"  name="kategori_sekolah" id="kategori_sekolah"></td>
  <tr>
    <td>jumlah sekolah</td>
    <td><input type="text"  name="jumlah_sekolah" id="jumlah_sekolah"></td>
</tr>
<tr>
    <td>satuan</td>
    <td><input type="text"  name="satuan" id="satuan"></td>
</tr>
<tr>
    <td>tahun ajaran</td>
    <td><input type="text"  name="tahun_ajaran" id="tahun_ajaran"></td>
</tr>

</tr>
<tr>
    <td><button type='submit'>SAVE</button></td>
   
</tr>
</table>
</form>
</body>
</html>