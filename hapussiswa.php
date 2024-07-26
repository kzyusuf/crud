<?php
require 'init.php';
$id=$_GET['id'];
$siswa->delete($id);
if($siswa){
    header('location: datasiswa.php');
}else{
    die("gagal  menghapus...");
}

?>