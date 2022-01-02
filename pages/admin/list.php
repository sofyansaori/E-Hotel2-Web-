<section class="section">
    <div class="section-header">
        <h1>Admin</h1>
    </div>

    <div class="section-body">
        <div class="row">
            <div class="col">
              <div class="card">
                <div class="card-header">
                  <h4>Data Admin</h4>
                  <div class="card-header-action">
                    <a href="http://localhost/E-hotel/index.php?page=admin&action=form" class="btn btn-danger"><i 
                    class="fas fa-plus"></i> Tambah Data</a>
                  </div>
                </div>
                <div class="card-body p-0">
                  <div class="table-responsive table-invoice">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>ID Admin</th>
                            <th>Username</th>
                            <th>Gambar</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <body>
                        <tr>
                            <tbody>
                        <?php
                          $queryAdmin = mysqli_query($conn, "SELECT * FROM admin ORDER BY id_admin ASC");
                          $no = 1;
                          while($row = mysqli_fetch_assoc($queryAdmin)){
                            echo "
                            <tbody>
                                <tr>
                                    <td>$no</td>
                                    <td>$row[username]</td>
                                    <td>$row[gambar]</td>
                                    <td>
                                        <a class='btn btn-success' href='http://localhost/E-hotel/index.php?page=admin&action=form&id=$row[id_admin]'>Edit</a>
                                        <a class='btn btn-danger' href='http://localhost/E-hotel/pages/admin/action.php?button=Delete&id=$row[id_admin]' onclick='return confirm(`Yakin Hapus?`)'>Delete</a>
                                    
                                    </td>
                                </tr>
                            </tbody>
                            ";
                            $no++;
                          }
                          echo "</table>";              
                        ?>
                            </td>
                        </tr>
                        </body>
                      
                     
                    </table>
                  </div>
                </div>
              </div>
            </div>
        </div>
    </div>
</section>