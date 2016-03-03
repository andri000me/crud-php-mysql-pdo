<h3>Buku Telp [Pencarian]</h3>


<form method="get" action="<?php echo $_SERVER['PHP_SELF']; ?>">
	<input type="text" name="q" placeholder="Masukkan nama" value="<?php if (isset($_GET['q'])){ echo $_GET['q']; } ?>"/>	
</form>

<?php
 include "connect_db.php";
 if (isset($_GET['q'])){
    $q = $_GET['q'];     
    $query = "SElECT * FROM buku_telp WHERE nama LIKE :q OR telp LIKE :q";    
    $q = "%".$q."%"; ////tambahkan tanda persen pada variabel $q         
    $stmt = $con->prepare($query); //persiapkan query    
    $stmt->bindParam(':q', $q); //isi nilai :q dari $q               
    $stmt->execute(); //eksekusi query   
    $jml = $stmt->rowCount(); //cek jumlah data hasil query
     
	if ($jml>0){ //jika ada data tampilkan
	 	echo "<table border=\"1\">
	 			<tr>
	 			  <th>No</th>
	 			  <th>Nama</th>
	 			  <th>Alamat</th>
	 			  <th>Telp</th>
	 			  <th>Email</th>
	 			</tr>";
		$no=1;	
		
		while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
         extract($row); //ganti $row['field'] menjadi {$field}
	 	 echo "<tr>
	 			  <td>$no</td>
	 			  <td>{$nama}</td>
	 			  <td>{$alamat}</td>
	 			  <td>{$telp}</td>
	 			  <td>{$email}</td>
	 			</tr>";	
		 $no++;	
		}
		echo "</table>"; 		
	} else {
		echo "Pencarian <b>$_GET[q]</b> tidak ditemukan";
	}
 }
?>