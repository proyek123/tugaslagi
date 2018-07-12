<?php
include('../config/koneksi.php');
?>
<!DOCTYPE html>
<html>
<head>
<title>Halaman Utama</title>
<link href="style.css" rel="stylesheet" type="text/css">
 
</head>
<body>
 
 
<center>
<h1>BUKU</h1><br>

<center>
<a href="../home_petugas.php?mod=back" class="tmbl tombol1">HOME</a>
<a href="tambah.php?mod=tambah" class="tmbl tombol1">TAMBAH BUKU</a>

<br><br>

<table width="700" border="0" cellpadding="2" cellspacing="2" align="center">
  <tr bgcolor="#666666" class="style1" align="center">
 <br><br><br>

   <?php
include "../config/koneksi.php";
$warnagenap="#cccccc";
$warnaganjil="#dcdcdc";
$warnaheading="#66CDAA";
$huyu= "select * from buku ";
$roso= mysqli_query($db_link,$huyu);
           echo"<table border='0' width='1000px'>";
            echo  "<tr bgcolor='".$warnaheading."'>
			
            <th>NO</th>
                <th>JUDUL BUKU</th>
                <th>PENGARANG</th>
                <th>TAHUN TERBIT</th>
                <th>KATEGORI</th>
                <th>JUMLAH</th>
                <th>AKSI</th>
				
                 
              
              </tr>";
$no=1;
while ($i=mysqli_fetch_array($roso))
	 
{if($no%2==0)$warna=$warnagenap;
else $warna=$warnaganjil;
            echo  "<tr bgcolor='".$warna."'>";
             echo  "<td>".$no."</td>";
             echo"<td>".$i['judul']."</td>";
             echo"<td>".$i['pengarang']."</td>";

             echo" <td>".$i['thnterbit']."</td>";
             echo "<td>".$i['kategori']."</td>";
             echo "<td>".$i['stock']."</td>";
			 echo "<td><small><a href='delete.php?id=".$i['id_buku']."'>Hapus</a>
			 </small></td>";
				  
              
 
	
             echo" </tr>";
            
$no++;
}
?>
</table>
<br>
<br>
  
</body>
</html>