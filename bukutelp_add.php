<?php
 include "connect_db.php";

 try {
    $query = "INSERT INTO buku_telp SET nama = ?, alamat = ?, telp = ?, email = ?";
     
    //prepare query for excecution
    $stmt = $con->prepare($query);
 
    //bind the parameters
    $stmt->bindParam(1, $_POST['nama']);
    $stmt->bindParam(2, $_POST['alamat']);
    $stmt->bindParam(3, $_POST['telp']);
    $stmt->bindParam(4, $_POST['email']);
     
    // Execute the query
    if($stmt->execute()){
         echo "Data berhasil ditambahkan. <br />
 		  <a href=\"bukutelp_view.php\">Lihat Buku Telepon</a>";
    }else{
        die('Gagal menambah data.');
    }          
 } catch (PDOException $exception){
    echo "Error: " . $exception->getMessage(); 
 }
?>
