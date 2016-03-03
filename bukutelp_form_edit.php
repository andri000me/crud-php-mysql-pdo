<?php
 include "connect_db.php";
try { 
    
 $query = "SELECT * FROM buku_telp WHERE id = ?";
 $stmt = $con->prepare($query);

 //variabel yang digunakan pada tanda ? untuk filter WHERE
 $stmt->bindParam(1, $_REQUEST['id']);

 //eksekusi query
 $stmt->execute();

 //memasukkan data hasil query ke variabel $row
 $row = $stmt->fetch(PDO::FETCH_ASSOC);

 $id = $row['id'];
 $nama = $row['nama'];
 $alamat = $row['alamat'];
 $telp = $row['telp'];
 $email = $row['email'];

} catch (PDOException $exception){ //penanganan error
 echo "Error: " . $exception->getMessage();   
}
?>
<h2>Buku Telepon</h2>

<h3>Form Edit</h3>
<form method="post" action="bukutelp_update.php">
<input type="hidden" name="id" value="<?php echo $id; ?>">
<table>
 <tr>
 	<td>Nama</td>
 	<td><input type="text" name="nama" value="<?php echo $nama; ?>" /></td>
  </tr>
  <tr>
	<td>Alamat</td>
	<td><input type="text" name="alamat" value="<?php echo $alamat; ?>" /></td>
  </tr>
  <tr>
  	<td>Telepon</td>
  	<td><input type="text" name="telp" value="<?php echo $telp; ?>" /></td>
  </tr>
  <tr>
  	<td>Email</td>
  	<td><input type="text" name="email" value="<?php echo $email; ?>" /></td>
  </tr>
  <tr>
	<td colspan="2"><input type="submit" value="Simpan"></td>
  </tr>
</table>	
</form>