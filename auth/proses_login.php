<?php 

    include "../Api-hotel/dbconfig.php";

	// Deklarasikan Variabel
	$username = $_POST['username'];
    
	$password =md5($_POST['password']);

	// Mengecek Apakah Data User Ada
	$query = mysqli_query($conn, "SELECT * FROM admin WHERE username='$username' AND password='$password'");

	if (mysqli_num_rows($query) == 0) {
		header("location:http://localhost/e-hotel/auth/login.php?notif=true");
	}else {
		// Mengambil Data User
		$row = mysqli_fetch_assoc($query);

		session_start();
		$_SESSION['id_admin'] = $row['id_admin'];
		$_SESSION['username'] = $row['username'];
		$_SESSION['gambar'] = $row['gambar'];

		echo "<script>
             alert('Login berhasil');
             window.location.href='../index.php';
              </script>";

	}	
	
?>