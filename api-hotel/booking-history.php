<?php
    include 'dbconfig.php';

    $userId = $_POST['id_user'];
    $query = "SELECT transaksi.id_transaksi, kamar.kodehotel, kamar.typekamar, kamar.hargapermalam, transaksi.checkin, transaksi.checkout FROM transaksi, kamar WHERE transaksi.id_kamar = kamar.id_kamar AND transaksi.id_user = '".$userId."'";
    $result = mysqli_query($conn, $query);

    $data = array();

    while ($row = mysqli_fetch_assoc($result)) {
        $data[] = $row;
    }

    echo json_encode($data);

?>