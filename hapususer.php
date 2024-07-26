<?php
require 'init.php';
$username=$_GET['id'];
$user->delete($username );
if($karyawan){
    header('location: datauser.php');
}else{
    die("gagal  menghapus...");
}

?>