<?php
include 'dbconfig.php';

 //Getting values
 $username = $_POST['username'];
 $password = md5($_POST['password']);
 
 //Creating sql query
 $sql = "SELECT * FROM user WHERE username='$username' AND pass ='$password'";
 
 $result = mysqli_query($conn,$sql);
 $user = mysqli_fetch_assoc($result);
 
 
 if (isset($user)) {
     echo json_encode($user);
 } else {
    echo json_encode(['message' => 'Tidak']);
 }

?>
