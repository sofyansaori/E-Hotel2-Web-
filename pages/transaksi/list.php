<section class="section">
    <div class="section-header">
        <h1>Transaksi</h1>
    </div>

    <div class="section-body">
        <div class="row">
            <div class="col">
              <div class="card">
                <div class="card-header">
                  <h4>Data Transaksi</h4>
                   <div class="card-header-action">
                    <a href="http://localhost/E-hotel/pages/laporan/cetak.php" class="btn btn-warning"><i 
                    class="fas fa-print"></i> Cetak Laporan</a>
                  </div>
                </div>
                <div class="card-body p-0">
                  <div class="table-responsive table-invoice">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>ID Transaksi</th>
                            <th>Kode Hotel</th>
                            <th>Username</th>
                            <th>Checkin</th>
                            <th>Checkout</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <body>
                        <?php
                          $queryTransaksi = mysqli_query($conn, "SELECT transaksi.*, user.username, kamar.* FROM transaksi JOIN user ON transaksi.id_user = user.id_user JOIN kamar ON transaksi.id_kamar = kamar.id_kamar ORDER BY id_transaksi ASC");
                          $no = 1;
                          while($row = mysqli_fetch_assoc($queryTransaksi)){
                            echo "
                            <tbody>
                                <tr>
                                    <td>$no</td>
                                    <td>$row[kodehotel]</td>
                                    <td>$row[username]</td>
                                    <td>$row[checkin]</td>
                                    <td>$row[checkout]</td>
                                    <td>
                                        <a class='btn btn-danger' href='http://localhost/E-hotel/pages/transaksi/action.php?button=Delete&id=$row[id_transaksi]&id_kamar=$row[id_kamar]' onclick='return confirm(`Yakin Hapus?`)'>Delete</a>
                                    </td>
                                </tr>
                            </tbody>
                            ";
                            $no++;
                          }
                          echo "</table>";              
                        ?>
                        </body>
                      
                     
                    </table>
                  </div>
                </div>
              </div>
            </div>
        </div>
    </div>
</section>