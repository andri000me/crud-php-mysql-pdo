<?php
 include "connect_db.php";

try {
 
    // delete query
    $query = "DELETE FROM buku_telp WHERE id = ?";
    $stmt = $con->prepare($query);
    $stmt->bindParam(1, $_GET['id']);
 
    if($stmt->execute()){
 	  echo "Sukses menghapus data <br />
 		  <a href=\"bukutelp_view.php\">Lihat Buku Telepon</a>";
    }else{
        die('Gagal menghapus data.');
    }
}
 
// to handle error
catch(PDOException $exception){
    echo "Error: " . $exception->getMessage();
}
?>