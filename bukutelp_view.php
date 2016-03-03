<h2>Buku Telepon</h2>

<h3>Daftar Nama</h3>
<a href="bukutelp_form_input.php">Tambah</a> | <a href="bukutelp_search.php">Cari</a>
<table border="1">
 <tr>
  <th>No</th>
  <th>Nama</th>
  <th>Alamat</th>
  <th>Telp</th>
  <th>Email</th>
  <th></th>
 </tr>

<?php
 include "connect_db.php";
 
 $query = "SELECT * FROM buku_telp";
 $stmt = $con->prepare($query);
 $stmt->execute();

 $i=1;
 while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
  //ekstrak row
  //merubah $row['nama'] menjadi
  //hanya $nama saja 
  extract($row);
     
  echo "<tr>
  	<td>".$i."</td>
	<td>{$nama}</td>
  	<td>{$alamat}</td>
  	<td>{$telp}</td>
  	<td>{$email}</td>
	<td><a href=\"bukutelp_form_edit.php?id={$id}\">Edit</a> 
	    <a href=\"bukutelp_delete.php?id={$id}\">Delete</a></td>
 	</tr>";
  $i++;
 }
?>
</table>