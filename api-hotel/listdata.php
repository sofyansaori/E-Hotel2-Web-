<?php
	include 'dbconfig.php';

	$result["errorcode"]="0";
	$sql = "SELECT * FROM kamar ORDER BY kodehotel";
	$res = mysqli_query($conn, $sql);
	$items = array();

	if (mysqli_num_rows($res) > 0) {
		while($row = mysqli_fetch_object($res)){
			array_push($items, $row);
		}
		echo json_encode($items);
	} else {
		echo json_encode(['message' => 'Terjadi Kesalahan']);
	}
?>