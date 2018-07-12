<?php
include('../config/koneksi.php');
?>
<!DOCTYPE html>
<html>
<head>
<title>Halaman Utama</title>
<link href="../css/style.css" rel="stylesheet" type="text/css">
</head>
<body>
 <div class="konten">
<div class="kepala">
<div class="lock"></div>
<h2 class="judul">Data Peminjam Buku</h2>
</div>
<div class="artikel">
<form name="form" method="POST" action="data.php">
<div class="grup">
<strong><label>Judul Buku</label></strong>
<input type="text" name="judul" placeholder="Judul Buku" required="required" /><br/>
</div>
<div class="grup">
<strong><label>Pengarang</label></strong>
<input type="text" name="pengarang" placeholder="Pengarang" required="required" /><br/>
</div>
<div class="grup">
<strong><label>Tahun Terbit</label></strong>
<input type="text" name="thnterbit" placeholder="Tahun Terbit" required="required" /><br/>
</div>
<div class="grup">
<strong><label>Kategori/Genre</label></strong>
<input type="text" name="kategori" placeholder="Kategori/Genre" required="required" /><br/>
</div>
<div class="grup">
<strong><label>Jumlah</label></strong>
<input type="text" name="stock" placeholder="Jumlah" required="required" /><br/>
</div>

	   
<center>
<div class="grup">
<input type="submit" name="submit" value="Simpan" />
</div>
<div class="grup">
<input type="reset" name="reset" value="Batal"/>
</div>
<div class="grup">
<a href ="profiltambah.php"><input type="button" value="Kembali" />
</div>
	 
	</form>
	</table>
	</td>
	</tr>



</body>
</html>