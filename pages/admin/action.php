<?php 
    include_once('../../Api-hotel/dbconfig.php');
    
    $id_admin = isset($_GET['id']) ? $_GET['id'] : "";
    
    $username = isset($_POST['username']) ? $_POST['username'] : "";
    $button = $_POST['button'];
    $update_gambar = "";
    $password = isset($_POST['password']) ? $_POST['password'] : "";

    if(!empty($_FILES["file"]["name"])){
        $nama_file = $_FILES["file"]["name"];
        move_uploaded_file($_FILES["file"]["tmp_name"], "../../assets/img/admin/".$nama_file);
        
        $update_gambar = $nama_file;
    }


    if($button == "Simpan"){
        mysqli_query($conn, "INSERT INTO admin(username, gambar, password)
                                VALUES('$username', '$gambar' ,$password')");
    }else if($button == "Update"){
        mysqli_query($conn, "UPDATE admin SET username='$username', gambar='$update_gambar' password='$password' WHERE id_admin='$id_admin'");
    }else if($button == "Delete"){
        mysqli_query($conn, "DELETE FROM admin WHERE id_admin = '$id_admin'");
    }
    header("location:http://localhost/E-hotel/index.php?page=admin&action=list");
?>