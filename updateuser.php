<?php
    require"init.php";
    require"index.php";
    $username=$_GET['id'];
    $user1=$user->getdataSingle($username);
if($_POST){
    if($_POST>0){
        $user->data=[$_POST['id'],$_POST['username'],$_POST['password'],$_POST['level']];
        $user->update();
    echo"
    <script>
    alert('data berhasil diubah');
    document.location.href='datauser.php';
    </script>";
}else {echo"gagal ubah data";}}
?>

<section class="konten">
    <h1>UBAH DATA</h1>
    <form action="" method="post">
        <table>
        
    <td><input type="hidden" name="id" value="<?= $user1['id'];?>"></td>
    <tr>
    <td>username</td>
    <td><input type="text" name="username" id="username" required="" value="<?= $user1['username'];?>"></td>
</tr>
    <tr>
    <td>password</td>
    <td><input type="text"  name="password" id="password" required="" value="<?=$user1['password'];?>"></td>
</tr>
<tr>
    <td>level</td>
    <td><input type="text"  name="level" id="level" required="" value="<?=$user1['level'];?>"></td>
</tr>

<tr>
    <td><button type='submit'>SAVE</button></td>
    <td><button> <a href="datauser.php">kembali</a></button></td>
</tr>
</table>
</form>
</section>