<?php 
    include_once('../../Api-hotel/dbconfig.php');
    
    $id_transaksi = isset($_GET['id']) ? $_GET['id'] : "";
    
    $id_kamar = isset($_GET['id_kamar']) ? $_GET['id_kamar'] : "";
    // $id_kamar = "SELECT id_kamar FROM transaksi JOIN kamar ON transaksi.id_kamar = kamar.id_kamar WHERE id_transaksi = '$id_transaksi' ";
    // $row = mysqli_fetch_array(mysqli_query($conn, $id_kamar));
    // $row_id_kamar = $row['id_kamar'];
    $button = isset($_POST['button']) ? $_POST['button'] : $_GET['button'];

    if($button == "Delete"){
        mysqli_query($conn, "UPDATE kamar SET stok_kamar = stok_kamar + 1, status = 'Tersedia' WHERE id_kamar = '$id_kamar'");
        mysqli_query($conn, "DELETE FROM transaksi WHERE id_transaksi = '$id_transaksi'");
    }
    header("location:http://localhost/E-hotel/index.php?page=transaksi&action=list");
?>