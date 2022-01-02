<section class="section">    
    <div class="row">
      <div class="col-lg-4 col-md-4 col-sm-12">
        <div class="card card-statistic-2">
          <div class="card-icon shadow-primary bg-primary">
            <i class="fas fa-building"></i>
          </div>
          <div class="card-wrap">
            <div class="card-header">
              <h4>Total kamar</h4>
            </div>
            <div class="card-body">
              <?php

               $query ="SELECT COUNT(id_kamar) AS total_kamar FROM kamar";

               $sqlQuery = mysqli_query($conn, $query);

               $result = mysqli_fetch_assoc($sqlQuery);

               echo $result['total_kamar'];
              ?>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-12">
        <div class="card card-statistic-2">
          <div class="card-icon shadow-primary bg-primary">
            <i class="fas fa-credit-card"></i>
          </div>
          <div class="card-wrap">
            <div class="card-header">
              <h4>Total Transaksi</h4>
            </div>
            <div class="card-body">
               <?php
              
               $query ="SELECT COUNT(id_transaksi) AS total_transaksi FROM transaksi";

               $sqlQuery = mysqli_query($conn, $query);

               $result = mysqli_fetch_assoc($sqlQuery);

               echo $result['total_transaksi'];
              ?>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-12">
        <div class="card card-statistic-2">
          <div class="card-icon shadow-primary bg-primary">
            <i class="fas fa-user-circle"></i>
          </div>
          <div class="card-wrap">
            <div class="card-header">
              <h4>Total Users</h4>
            </div>
            <div class="card-body">
                 <?php

               $query ="SELECT COUNT(id_user) AS total_user FROM user";

               $sqlQuery = mysqli_query($conn, $query);

               $result = mysqli_fetch_assoc($sqlQuery);

               echo $result['total_user'];
              ?>
            </div>
          </div>
        </div>
      </div>
    </div>
</section>
<div class="card gradient-bottom">
  <div class="row">
    <div class="col-lg-8 col-md-8">
      <div class="section-body">
              <div class="row">
                  <div class="col">
                    <div class="card">
                      <div class="card-header">
                        <h4>Data Transaksi</h4>
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
                                            
                                              <a class='btn btn-danger' href='http://localhost/E-hotel/pages/transaksi/action.php?button=Delete&id=$row[id_transaksi]' onclick='return confirm(`Yakin Hapus?`)'>Delete</a>
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
    </div>
    <div class="col-lg-4 col-md-4">
      <div class="card-header">
        <h4>Fasilitas Kami</h4>
        <div class="card-header-action dropdown">
          <a href="#" data-toggle="dropdown" class="btn btn-danger dropdown-toggle">List</a>
          <ul class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
           
          </ul>
        </div>
      </div>
      <div class="card-body" id="top-5-scroll" tabindex="2" style="height: 315px; overflow: hidden; outline: none;">
        <ul class="list-unstyled list-unstyled-border">
          <li class="media">
            <img class="mr-3 rounded" width="100" src="assets/img/products/download.png" alt="product">
            <div class="media-body">
              <div class="float-right"><div class="font-weight-600 text-muted text-small">4 TipeKamar</div></div>
              <div class="media-title">Tipe Kamar</div>
              <div class="mt-1">
                <div class="budget-price">
                  <div class="budget-price-square bg-primary" data-width="64%" style="width: 64%;"></div>
                  <div class="budget-price-label">68%</div>
                </div>
                <div class="budget-price">
                  <div class="budget-price-square bg-danger" data-width="43%" style="width: 43%;"></div>
                  <div class="budget-price-label">58%</div>
                </div>
              </div>
            </div>
          </li>
          <li class="media">
            <img class="mr-3 rounded" width="100" src="assets/img/products/fod.png" alt="product">
            <div class="media-body">
              <div class="float-right"><div class="font-weight-600 text-muted text-small">2 RuangMakan</div></div>
              <div class="media-title">Room Food</div>
              <div class="mt-1">
                <div class="budget-price">
                  <div class="budget-price-square bg-primary" data-width="84%" style="width: 84%;"></div>
                  <div class="budget-price-label">90%</div>
                </div>
                <div class="budget-price">
                  <div class="budget-price-square bg-danger" data-width="60%" style="width: 60%;"></div>
                  <div class="budget-price-label">76%</div>
                </div>
              </div>
            </div>
          </li>
          <li class="media">
            <img class="mr-3 rounded" width="100" src="assets/img/products/wifi.png" alt="product">
            <div class="media-body">
              <div class="float-right"><div class="font-weight-600 text-muted text-small">4 LayananWifi</div></div>
              <div class="media-title">Wifi Acsess</div>
              <div class="mt-1">
                <div class="budget-price">
                  <div class="budget-price-square bg-primary" data-width="34%" style="width: 34%;"></div>
                  <div class="budget-price-label">80%</div>
                </div>
                <div class="budget-price">
                  <div class="budget-price-square bg-danger" data-width="28%" style="width: 28%;"></div>
                  <div class="budget-price-label">70%</div>
                </div>
              </div>
            </div>
          </li>
          <li class="media">
            <img class="mr-3 rounded" width="100" src="assets/img/products/swim.png" alt="product">
            <div class="media-body">
              <div class="float-right"><div class="font-weight-600 text-muted text-small">2 KolamRenang</div></div>
              <div class="media-title">Kolam Renang</div>
              <div class="mt-1">
                <div class="budget-price">
                  <div class="budget-price-square bg-primary" data-width="45%" style="width: 45%;"></div>
                  <div class="budget-price-label">93%</div>
                </div>
                <div class="budget-price">
                  <div class="budget-price-square bg-danger" data-width="30%" style="width: 30%;"></div>
                  <div class="budget-price-label">92%</div>
                </div>
              </div>
            </div>
          </li>
          <li class="media">
            <img class="mr-3 rounded" width="100" src="assets/img/products/rest.png" alt="product">
            <div class="media-body">
              <div class="float-right"><div class="font-weight-600 text-muted text-small">3 Rest Area</div></div>
              <div class="media-title">Rest Area</div>
              <div class="mt-1">
                <div class="budget-price">
                  <div class="budget-price-square bg-primary" data-width="35%" style="width: 35%;"></div>
                  <div class="budget-price-label">75%</div>
                </div>
                <div class="budget-price">
                  <div class="budget-price-square bg-danger" data-width="28%" style="width: 28%;"></div>
                  <div class="budget-price-label">67%</div>
                </div>
              </div>
            </div>
          </li>
        </ul>
      </div>
      <div class="card-footer pt-3 d-flex justify-content-center">
        <div class="budget-price justify-content-center">
          <div class="budget-price-square bg-primary" data-width="20" style="width: 20px;"></div>
          <div class="budget-price-label">Selling Price</div>
        </div>
        <div class="budget-price justify-content-center">
          <div class="budget-price-square bg-danger" data-width="20" style="width: 20px;"></div>
          <div class="budget-price-label">Budget Price</div>
        </div>
      </div>
    </div>
  </div>
</div>