<!DOCTYPE html>
<html>
<head>
 <title>Laporan Booking Kamar Hotel</title>
</head>
<body>
 <style type="text/css">
 body{
 font-family: sans-serif;
 }
 table{
 margin: 20px auto;
 border-collapse: collapse;
 }
 table th,
 table td{
 border: 1px solid #3c3c3c;
 padding: 3px 8px;

 }
 a{
 background: blue;
 color: #fff;
 padding: 8px 10px;
 text-decoration: none;
 border-radius: 2px;
 }

    .tengah{
        text-align: center;
    }
 </style>
 <table>
 <tr>
 <th>No</th>
 <th>Kode Kamar</th>
 <th>Type Kamar</th>
 <th>Harga Kamar</th>
 <th>Nama Tamu</th>
 <th>Checkin</th>
 <th>Checkout</th>
 
 </tr>
 <?php 
include "../../api-hotel/dbconfig.php";
  // menampilkan data pegawai
 $data = mysqli_query($conn,"SELECT transaksi.id_kamar, kamar.kodehotel, kamar.typekamar, kamar.hargapermalam, user.username, transaksi.checkin, transaksi.checkout 
 FROM transaksi
 JOIN kamar ON kamar.id_kamar = transaksi.id_kamar
 JOIN user ON user.id_user = transaksi.id_user");
 while($d = mysqli_fetch_array($data)){
 ?>
 <tr>
 <td style='text-align: center;'><?php echo $d['id_kamar'] ?></td>
 <td><?php echo $d['kodehotel']; ?></td>
 <td><?php echo $d['typekamar']; ?></td>
 <td><?php echo $d['hargapermalam']; ?></td>
 <td><?php echo $d['username']; ?></td>
 <td><?php echo $d['checkin']; ?> </td>
 <td><?php echo $d['checkout']; ?> </td>
 </tr>
 <?php 
 }
 ?>
    </table>
    <script>
 window.print();
 </script>
</body>
</html>