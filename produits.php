<?php
include "utility.php";
$db = connectDB("localhost", "Gestion_stock1", "root", "root");
$produits = getProduits();
function getProduits(){
    global $db;
    $read = "SELECT * FROM produits";
    $exec = $db->query($read);
    return $exec->fetchAll(PDO::FETCH_OBJ);
}
?>
