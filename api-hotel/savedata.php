<?php 
require_once('dbconfig.php');

$id_transaksi  = $_POST['id_transaksi'];
$id_kamar  = $_POST['id_kamar'];
$id_user  = $_POST['id_user'];
$checkin  = $_POST['checkin'];
$checkout = $_POST['checkout'];

$queryTransaksi = mysqli_query($conn, "INSERT INTO transaksi(id_transaksi, id_kamar, id_user, checkin, checkout) VALUES ('$id_transaksi', '$id_kamar', '$id_user', '$checkin', '$checkout')");
$queryStok = mysqli_query($conn, "UPDATE kamar SET stok_kamar = stok_kamar - 1 WHERE id_kamar = '$id_kamar'");
$stok = mysqli_query($conn, "SELECT stok_kamar AS UNSIGNED FROM kamar WHERE id_kamar = '$id_kamar'");
if($stok < 1){
    $queryStok = mysqli_query($conn, "UPDATE kamar SET status = 'Kosong' WHERE id_kamar = '$id_kamar'");
}
if ($id_kamar){
    $result = mysqli_query($conn, "UPDATE transaksi SET checkin = '$checkin', checkout ='$checkout' WHERE id_transaksi='$id_transaksi'");
}

if ($queryTransaksi && $queryStok) {
	echo json_encode(array('message' => 'dibuat'));
}
else{
	echo json_encode(array('message' => 'error'));
}

?>

