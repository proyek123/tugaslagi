<?php
include "config/koneksi.php";
$id_anggota=$_GET['id'];
$saya="delete from anggota where id_anggota='$id_anggota'";
$huhu=mysqli_query($db_link,$saya);
if ($huhu){
	echo"<script>window.alert('Data Berhasil Dihapus !');
	window.location=('admin_anggota.php')</script>";
}else{
	echo "<script>alert ('Data gagal Dihapus');
	document.location.href=('admin_anggota.php');</script>";
}
?>