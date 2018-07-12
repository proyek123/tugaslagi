<?php
include "../config/koneksi.php";
$judul=$_POST['judul'];
$pengarang=$_POST['pengarang'];
$thnterbit=$_POST['thnterbit'];
$kategori=$_POST['kategori'];
$stock=$_POST['stock'];

$hoo="insert into buku (judul,pengarang,thnterbit,kategori,stock) values ('".$judul."','".$pengarang."','".$thnterbit."','".$kategori."','".$stock."')";
$haa=mysqli_query($db_link,$hoo);
if ($haa) {
	echo "<script>window.alert('Berhasil Menambah Data !');
	window.location=('profiltambah.php')</script>";
}else {
	echo "<script>alert ('gagal ditambahkan');
	document.location.href='inputbuku2.php';</script>";
}
?>