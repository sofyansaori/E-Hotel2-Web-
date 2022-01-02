<?php
    $id_kamar = isset($_GET['id']) ? $_GET['id']: false;
    $kodehotel = "";
    $typekamar = "";
    $hargapermalam = "";
    $gambar = "";
    $stok_kamar = "";
    $status = "";
    $button = "Simpan";

    if($id_kamar){
        $queryKamar = mysqli_query($conn, "SELECT * FROM kamar WHERE id_kamar = '$id_kamar'");
        $row = mysqli_fetch_assoc($queryKamar);
        $kodehotel = $row['kodehotel'];
        $typekamar = $row['typekamar'];
        $hargapermalam = $row['hargapermalam'];
        $gambar = $row['gambar'];
        $stok_kamar = "";
        $status = "";
        $button = "Update";
    }
?>

<section class="section">
    <div class="section-header">
        <h1>Tambah Data Kamar</h1>
    </div>
    <div class="section-body">
        <div class="row">
            <div class="col-8">
                <form action="<?php echo "http://localhost/E-hotel/pages/kamar/action.php?id=$id_kamar";?>" method="POST" enctype="multipart/form-data">
                    <div class ="form-group">
                        <label>Kode Kamar</label>
                        <input type="text" name="kodehotel" value="<?php echo $kodehotel;?>" class="form-control">
                    </div>
                    <div class ="form-group">
                        <label>Tipe Kamar</label>
                        <select name="typekamar" class="form-control">
                            <option <?php if($typekamar == "Residential") echo "selected" ?> >Deluxe Rooms</option>
                            <option <?php if($typekamar == "Classic") echo "selected" ?> >Luxury Rooms</option>
                            <option <?php if($typekamar == "Superior") echo "selected" ?> >Standard Room</option>
                            <option <?php if($typekamar == "Superior") echo "selected" ?> >Suite Rooms</option>
                        </select>
                    </div>
                    <div class ="form-group">
                        <label>Harga Permalam</label>
                        <input type="text" name="hargapermalam" value="<?php echo $hargapermalam; ?>" class="form-control">
                    </div>
                    <div class="form-group">
                      <label>Upload Foto</label>
                      <input type="file" name="file" class="form-control"/><?php echo $gambar; ?>
                    </div>
                    <div class ="form-group">
                        <label>Stok Kamar</label>
                        <input type="text" name="stok_kamar" value="<?php echo $stok_kamar; ?>" class="form-control">
                    </div>
                    <div class ="form-group">
                        <label>Status Kamar</label>
                        <select name="status" class="form-control">
                            <option <?php if($status == "Tersedia") echo "selected" ?> >Tersedia</option>
                            <option <?php if($status == "Kosong") echo "selected" ?> >Kosong</option>
                        </select>
                    </div>
                    <a href="http://localhost/E-hotel/index.php?page=kamar&action=list" class="btn btn-danger">Cancel</a>

                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                    Simpan
                    </button>
            </div>
        </div>
    </div>
</section>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Yakin Ingin Menyimpan Data?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <input type="submit" class="btn btn-primary" name="button" value="<?php echo $button; ?>">
            </div>
        </div>
    </div>
</div>
</form>
