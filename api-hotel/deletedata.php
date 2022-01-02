<?php
include 'dbconfig.php';
parse_str(file_get_contents('php://input'), $_POST);

$id_transaksi = $_POST['id_transaksi'];
$id_kamar = $_POST['id_kamar'];

$query = mysqli_query($conn, "DELETE FROM transaksi WHERE id_transaksi = '$id_transaksi'");
$queryStok = mysqli_query($conn, "UPDATE kamar SET stok_kamar = stok_kamar + 1 WHERE id_kamar = '$id_kamar'");
if ($query && $queryStok) {
	echo json_encode(array('message' => 'berhasil dihapus'));
}
else{
	echo json_encode(array('message' => 'error'));
}

?>
