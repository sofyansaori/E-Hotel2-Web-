<?php
    $id_admin = isset($_GET['id']) ? $_GET['id']: false;
    $username = "";
    $gambar = "";
    $password = "";
    $button = "Simpan";

    if($id_admin){
        $queryAdmin = mysqli_query($conn, "SELECT * FROM admin WHERE id_admin = '$id_admin'");
        $row = mysqli_fetch_assoc($queryAdmin);
        $username = $row['username'];
        $gambar = $row['gambar'];
        $password = $row['password'];
        $button = "Update";
    }
?>
<section class="section">
    <div class="section-header">
        <h1>Tambah Admin</h1>
    </div>

    <div class="section-body">
        <div class="row">
            <div class="col-8">
                <form action="<?php echo "http://localhost/E-hotel/pages/admin/action.php?id=$id_admin";?>" method="POST" enctype="multipart/form-data"> 
                    <div class ="form-group">
                        <label>Username</label>
                        <input type="text" name="username" value="<?php echo $username;?>" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Upload Foto</label>
                        <input type="file" name="file" class="form-control"/><?php echo $gambar; ?>
                        </div>
                    <div class ="form-group">
                        <label>Password</label>
                        <input type="text" name="password" value="<?php echo $password;?>" class="form-control">
                    </div>
                    <a href="http://localhost/E-hotel/index.php?page=admin&action=list" class="btn btn-danger"> cancel</a>

                     <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                    Simpan
                    </button>
            </div>
        </div>
    </div>
</section>

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