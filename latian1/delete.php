<?php
include "../config/koneksi.php";
$id_buku=$_GET['id'];
$saya="delete from buku where id_buku='$id_buku'";
$huhu=mysqli_query($db_link,$saya);
if ($huhu){
	echo"<script>window.alert('Data Berhasil Dihapus !');
	window.location=('profiltambah.php')</script>";
}else{
	echo "<script>alert ('Data gagal Dihapus');
	document.location.href=('profiltambah.php');</script>";
}
?>