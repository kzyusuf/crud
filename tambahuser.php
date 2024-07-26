<?php
require 'init.php';
require 'index.php';
if($_POST){
if($_POST>0){

$user->data=[$_POST['id'],$_POST['username'],$_POST['password'],$_POST['level']];
$user->save();
echo"sukses tambah data";}else{echo "gagal tambah data";}}
?>



<div class="container">
    <section class="konten">
        <h3 class="text-center mt-3">tambah user</h3>
<div class="card">
    <div class="card-header text-bg-succes">
    <a class="btn btn-sm btn-secondary float-end" href="datauser.php">kembali</a>
</div>
<div class="card-body">

    <h1>TAMBAH DATA</h1>
    <form action="" method="post">
        <table>
    <td>username</td>
    <td><input type="text" name="username" id="username"></td>
<tr>
    <td>password</td>
    <td><input type="text"  name="password" id="password"></td>
</tr>
<tr>
    <td>level</td>
    <td><input type="text"  name="level" id="level"></td>
</tr>
<tr>
    <td><button type='submit'>SAVE</button></td>
   
</tr>
</table>
</form>
</body>
</html>