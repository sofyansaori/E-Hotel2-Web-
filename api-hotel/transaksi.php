<?php

include 'dbconfig.php';

$transactionType = $_POST['transaction_type'];
$idTransaksi = $_POST['id_transaksi'];
$idKamar  = $_POST['id_kamar'];
$idUser  = $_POST['id_user'];
$checkIn  = $_POST['checkin'];
$checkOut = $_POST['checkout'];

$query = "";
$message = "";

if ($transactionType == 1) {
	$query = "INSERT INTO transaksi (id_user, id_kamar, checkin, checkout) values('".$idUser."','".$idKamar."','".$checkIn."','".$checkOut."')";
	$message = 'Berhasil Melakukan Booking';
	mysqli_query($conn, "UPDATE kamar set stok_kamar = stok_kamar - 1 where id_kamar = '".$idKamar."'");
} else if ($transactionType == 2) {
	$query = "UPDATE transaksi set id_kamar ='".$idKamar."', checkin ='".$checkIn ."', checkout='".$checkOut."' where id_transaksi =".$idTransaksi;	
	$message = 'Berhasil Memperbaharui Booking';
} else if ($transactionType == 3) {
	$message = 'Berhasil Membatalkan Booking';
	$query = "DELETE FROM transaksi WHERE  id_transaksi = '".$idTransaksi."'";
	mysqli_query($conn, "UPDATE kamar set stok_kamar = stok_kamar + 1 where id_kamar = '".$idKamar."'");
}

$response = mysqli_query($conn, $query);

if ($response == 1){
	echo json_encode(['message' => $message]);
}
else{
	echo json_encode(['message' => 'Terjadi Kesalahan: ' . mysqli_error($conn)]);
}
?>