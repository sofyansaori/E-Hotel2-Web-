<?php
include 'dbconfig.php';

$username = $_POST['username'];
$password  = md5($_POST['password'])	;


/* grab the posts from the db */
$query = "INSERT INTO user (username, pass) values('".$username."','".$password ."')";
$response = mysqli_query($conn, $query) or die('Error query:  '.$query);

if ($response == 1){
	echo json_encode(['message' => 'Berhasil Registrasil, silahkan Login']);
} else{
	echo json_encode(['message' => 'Terjadi Kesalahan Koneksi']);
}
?>
