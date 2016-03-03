<?php
 include "connect_db.php";

 try {
   $query = "UPDATE buku_telp SET nama=:nama, 
                                  alamat=:alamat, 
                                  telp=:telp, 
                                  email=:email 
                              WHERE id=:id";

   //prepare query for excecution
   $stmt = $con->prepare($query);
     
   //bind the parameters
   $stmt->bindParam(':nama', $_POST['nama']);
   $stmt->bindParam(':alamat', $_POST['alamat']);
   $stmt->bindParam(':email', $_POST['email']);
   $stmt->bindParam(':telp', $_POST['telp']);
   $stmt->bindParam(':id', $_POST['id']);
     
   // eksekusi query
   if($stmt->execute()){
     echo "Data berhasil diupdate <br />
 		  <a href=\"bukutelp_view.php\">Lihat Buku Telepon</a>";
   } else {
     die('Data gagal diupdate');
   }     
 } catch (PDOException $exception){ //penanganan error
     echo "Error: " . $exception->getMessage();
 }
?>
