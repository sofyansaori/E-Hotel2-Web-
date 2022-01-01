<section class="section">
    <div class="section-header">
        <h1>Data Kamar</h1>
    </div>

    <div class="section-body">
        <div class="row">
            <div class="col">
              <div class="card">
                <div class="card-header">
                  <h4>Data Kamar</h4>
                  <div class="card-header-action">
                    <a href="http://localhost/E-hotel/index.php?page=kamar&action=form" class="btn btn-danger"><i 
                    class="fas fa-plus"></i> Tambah Data</a>
                  </div>
                </div>
                <div class="card-body p-0">
                  <div class="table-responsive table-invoice">
                    <table class="table table-striped">
                        <thead>
                          <tr>
                              <th>ID</th>
                              <th>Kode Kamar</th>
                              <th>Tipe Kamar</th>
                              <th>Harga Permalam</th>
                              <th>Stok Kamar</th>
                              <th>Status</th>
                              <th>Gambar</th>
                              <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                        <?php
                          $queryKamar = mysqli_query($conn, "SELECT * FROM kamar ORDER BY id_kamar ASC");
                          $no = 1;
                          while($row = mysqli_fetch_assoc($queryKamar)){
                            echo "
                            <tbody>
                                <tr>
                                    <td>$no</td>
                                    <td>$row[kodehotel]</td>
                                    <td>$row[typekamar]</td>
                                    <td>$row[hargapermalam]</td>
                                    <td>$row[stok_kamar]</td>
                                    <td>$row[status]</td>
                                    <td>$row[gambar]</td>
                                    <td>
                                        <a class='btn btn-success' href='http://localhost/E-hotel/index.php?page=kamar&action=form&id=$row[id_kamar]'>Edit</a>
                                        <a class='btn btn-danger' href='http://localhost/E-hotel/pages/kamar/action.php?button=Delete&id=$row[id_kamar]' onclick='return confirm(`Yakin Hapus?`)'>Delete</a>
                                    </td>
                                </tr>
                            </tbody>
                            ";
                            $no++;
                          }
                          echo "</table>";       
                        ?>
                  </div>
                </div>
              </div>
            </div>
        </div>
    </div>
</section>




