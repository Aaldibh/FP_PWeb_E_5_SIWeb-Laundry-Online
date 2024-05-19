<!-- Fungsi operasional Owner -->
<!-- POP UP Operasional Tambah Data Layanan -->
<?php 
include_once("../koneksi.php");
function popupTambahLayanan(){ //fungsi tambah Layanan
?>
    <div class="modal" id="modalTambahLayanan" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Tambah Layanan</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Masukkan data layanan laundry.</p>

                    <form method="post" action="./prosesTambahLayanan.php">
                        <div class="mb-3">
                            <label for="layananInput" class="form-label">Layanan</label>
                            <input type="text" class="form-control" name="nama">
                        </div>
                        <div class="mb-3">
                            <label for="jenisPaketInput" class="form-label">Jenis Paket</label>
                            <input type="text" class="form-control" name="jenis">
                        </div>
                        <div class="mb-3">
                            <label for="hargaInput" class="form-label">Harga</label>
                            <input type="text" class="form-control" name="harga">
                        </div>

                        <div class="modal-footer">
                            <button  type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                            <button  type="submit" class="btn btn-primary">Tambah</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php } ?>

<!-- POP UP Operasional Tambah Data Admin -->
<?php 
function popupTambahAdmin(){ //fungsi tambah admin 
?>
    <div class="modal" id="modalTambahAdmin" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Tambah Admin</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Masukkan data admin laundry.</p>

                    <form method="post" action="./prosesTambahAdmin.php">
                        <div class="mb-3">
                            <label for="layananInput" class="form-label">Nama Admin</label>
                            <input type="text" class="form-control" name="nama">
                        </div>
                        <div class="mb-3">
                            <label for="jenisPaketInput" class="form-label">Password Admin</label>
                            <input type="password" class="form-control" name="password">
                        </div>
                        <div class="mb-3">
                            <label for="hargaInput" class="form-label">Posisi Admin</label>
                            <input type="text" class="form-control" name="posisi">
                        </div>

                        <div class="modal-footer">
                            <button  type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                            <button  type="submit" class="btn btn-primary">Tambah</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php 
}
?>

<!-- POP UP Operasional Edit/Update Layanan -->
<?php
function popupEditLayanan($koneksi, $id){ //fungsi edit Layanan
    $query = "SELECT * FROM tb_layanan WHERE id_layanan = '$id'";
    $hasil = mysqli_query($koneksi, $query);
    
    if($hasil && mysqli_num_rows($hasil) > 0) {
        $data = mysqli_fetch_array($hasil);
?>
        <div class="modal" id="modalEditLayanan_<?php echo $id;?>" tabindex="-1" >
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Edit Layanan</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body text-start ml-3">
                        <p>Masukkan data layanan laundry.</p>
    
                        <form method="post" action="./prosesEditLayanan.php">
                            <input type="hidden" name="id" value="<?php echo $id ?>">
    
                            <div class="mb-3">
                                <label for="layananInput" class="form-label">Layanan</label>
                                <input type="text" class="form-control" name="nama" value="<?php echo $data['nama_layanan'] ?>">
                            </div>
                            <div class="mb-3">
                                <label for="jenisPaketInput" class="form-label">Jenis Paket</label>
                                <input type="text" class="form-control" name="jenis" value="<?php echo $data['jenis_paket'] ?>">
                            </div>
                            <div class="mb-3">
                                <label for="hargaInput" class="form-label">Harga</label>
                                <input type="text" class="form-control" name="harga" value="<?php echo $data['harga_layanan'] ?>">
                            </div>
    
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
<?php 
    } else {
        echo "Data layanan tidak ditemukan.";
    }
}
?>

<!-- POP UP Operasional Edit/Update Layanan -->
<?php
function popupEditAdmin($koneksi, $id){ //fungsi edit Layanan
    $query = "SELECT * FROM tb_admin WHERE idAdmin = '$id'";
    $hasil = mysqli_query($koneksi, $query);
    
    if($hasil && mysqli_num_rows($hasil) > 0) {
        $data = mysqli_fetch_array($hasil);
?>
        <div class="modal" id="modalEditAdmin_<?php echo $id;?>" tabindex="-1" >
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Edit Layanan</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body text-start ml-3">
                        <p>Masukkan data layanan laundry.</p>
    
                        <form method="post" action="./prosesEditAdmin.php">
                            <input type="hidden" name="id" value="<?php echo $id ?>">
    
                            <div class="mb-3">
                                <label for="namaAdmin" class="form-label">Nama Admin</label>
                                <input type="text" class="form-control" name="nama" value="<?php echo $data['namaAdmin'] ?>">
                            </div>
                            <div class="mb-3">
                                <label for="passwordAdmin" class="form-label">Password</label>
                                <input type="text" class="form-control" name="password" value="<?php echo $data['passwordAdmin'] ?>">
                            </div>
                            <div class="mb-3">
                                <label for="posisiAdmin" class="form-label">Posisi</label>
                                <input type="text" class="form-control" name="posisi" value="<?php echo $data['posisiAdmin'] ?>">
                            </div>
    
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
<?php 
    } else {
        echo "Data layanan tidak ditemukan.";
    }
}
?>

<!-- POP UP Operasional Hapus Admin -->
<?php
function popupHapus_Admin($koneksi, $id){ //fungsi hapus Admin
    $query = "SELECT * FROM tb_admin WHERE idAdmin = '$id'";
    $hasil = mysqli_query($koneksi, $query);
    
    if($hasil && mysqli_num_rows($hasil) > 0) {
        $data = mysqli_fetch_array($hasil);
?>
        <div class="modal" id="modalHapusAdmin_<?php echo $id;?>" tabindex="-1" >
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Hapus Admin</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body text-start ml-3">
                        <p>Apakah Anda yakin ingin menghapus data admin dengan nama <?php echo $data['namaAdmin'] ?></p>
    
                        <form method="post" action="prosesHapus_Admin.php?id=<?php echo $data['idAdmin']?>" >
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                <button type="submit" class="btn btn-danger">Hapus</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
<?php 
    } else {
        echo "Data layanan tidak ditemukan.";
    }
}
?>

<!-- POP UP Operasional Hapus Layanan -->
<?php
function popupHapus_Layanan($koneksi, $id){ //fungsi hapus Layanan
    $query = "SELECT * FROM tb_layanan WHERE id_layanan = '$id'";
    $hasil = mysqli_query($koneksi, $query);
    
    if($hasil && mysqli_num_rows($hasil) > 0) {
        $data = mysqli_fetch_array($hasil);
?>
        <div class="modal" id="modalHapusLayanan_<?php echo $id;?>" tabindex="-1" >
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Hapus Layanan</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body text-start ml-3">
                        <p>Apakah Anda yakin ingin menghapus data admin dengan nama <?php echo $data['nama_layanan'] ?></p>
    
                        <form method="post" action="prosesHapus_Layanan.php?id=<?php echo $data['id_layanan']?>" >
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                <button type="submit" class="btn btn-danger">Hapus</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
<?php 
    } else {
        echo "Data layanan tidak ditemukan.";
    }
}
?>

<!-- POP UP Operasional Hapus Data Customer -->
<?php
function popupHapus_Customer($koneksi, $id){ //fungsi hapus Customer
    $query = "SELECT * FROM tb_Customer WHERE idCust = '$id'";
    $hasil = mysqli_query($koneksi, $query);
    
    if($hasil && mysqli_num_rows($hasil) > 0) {
        $data = mysqli_fetch_array($hasil);
?>
        <div class="modal" id="modalHapusCustomer_<?php echo $id;?>" tabindex="-1" >
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Hapus Customer</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body text-start ml-3">
                        <p>Apakah Anda yakin ingin menghapus data admin dengan nama <?php echo $data['namaCust'] ?></p>
    
                        <form method="post" action="prosesHapus_Customer.php?id=<?php echo $data['idCust']?>" >
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                <button type="submit" class="btn btn-danger">Hapus</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
<?php 
    } else {
        echo "Data layanan tidak ditemukan.";
    }
}
?>

