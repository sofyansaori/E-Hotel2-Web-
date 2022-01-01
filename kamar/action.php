<?php 
    include_once('../../Api-hotel/dbconfig.php');
    
    $id_kamar = isset($_GET['id']) ? $_GET['id'] : "";
    
    $kodehotel = isset($_POST['kodehotel']) ? $_POST['kodehotel'] : "";
    $typekamar = isset($_POST['typekamar']) ? $_POST['typekamar'] : "";
    $hargapermalam = isset($_POST['hargapermalam']) ? $_POST['hargapermalam'] : "";
    $update_gambar = "";
    $stok_kamar = isset($_POST['stok_kamar']) ? $_POST['stok_kamar'] : "";
    $status = isset($_POST['status']) ? $_POST['status'] : "";
    $button = isset($_POST['button']) ? $_POST['button'] : $_GET['button'];

    if(!empty($_FILES["file"]["name"])){
		$nama_file = $_FILES["file"]["name"];
		move_uploaded_file($_FILES["file"]["tmp_name"], "../../assets/img/kamar/".$nama_file);
		
		$update_gambar = $nama_file;
	}

    if($button == "Simpan"){
        mysqli_query($conn, "INSERT INTO kamar(kodehotel, typekamar, hargapermalam, gambar, stok_kamar, status) VALUES('$kodehotel', '$typekamar', '$hargapermalam', '$nama_file', '$stok_kamar', '$status')");
    }else if($button == "Update"){
        $id_kamar = $_GET['id'];
        mysqli_query($conn, "UPDATE kamar SET kodehotel='$kodehotel', typekamar='$typekamar', hargapermalam='$hargapermalam', gambar = '$update_gambar', stok_kamar = '$stok_kamar', status = '$status' WHERE id_kamar='$id_kamar'");
    }else if($button == "Delete"){
        mysqli_query($conn, "DELETE FROM kamar WHERE id_kamar='$id_kamar'");
    }
    header("location:http://localhost/E-hotel/index.php?page=kamar&action=list");
?>