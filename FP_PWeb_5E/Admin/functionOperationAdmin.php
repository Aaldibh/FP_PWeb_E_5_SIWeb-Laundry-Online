<!-- Fungsi operasional admin -->
<!-- POP UP Operasional Tambah Data pegawai -->
<?php 
include_once("../koneksi.php");
function popupTambahPegawai(){ //fungsi tambah Pegawai
?>
    <div class="modal" id="modalTambahPegawai" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Tambah Pegawai</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Masukkan data pegawai laundry.</p>

                    <form method="post" action="./prosesTambah_pegawai.php">
                        <div class="mb-3">
                            <label for="namaInput" class="form-label">Nama</label>
                            <input type="text" class="form-control" name="nama">
                        </div>
                        <div class="mb-3">
                            <label for="posisiInput" class="form-label">Posisi</label>
                            <select class="form-control" name="posisi" required>
                                <option value="" selected disabled>Pilih</option>
                                <option value="Mesin Cuci">Mesin Cuci</option>
                                <option value="Setrika">Setrika</option>
                                <option value="Kurir">Kasir</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="genderInput" class="form-label">Jenis Kelamin</label>
                            <select class="form-control" name="gender" required>
                                <option value="" selected disabled>Pilih</option>
                                <option value="Laki-laki">Laki-laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="NoTlpInput" class="form-label">No.Telepon</label>
                            <input type="text" class="form-control" name="nomor">
                        </div>
                        <div class="mb-3">
                            <label for="alamatInput" class="form-label">Alamat</label>
                            <input type="text" class="form-control" name="alamat">
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

<?php
function popupEditPegawai($koneksi, $id){ //fungsi edit pegawai
    $query = "SELECT * FROM tb_pegawai WHERE id_pegawai = '$id'";
    $hasil = mysqli_query($koneksi, $query);
    
    if($hasil && mysqli_num_rows($hasil) > 0) {
        $data = mysqli_fetch_array($hasil);
?>
        <div class="modal" id="modalEditpegawai_<?php echo $id;?>" tabindex="-1" >
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Edit Pegawai</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body text-start ml-3">
                        <p>Masukkan data pegawai laundry.</p>
    
                        <form method="post" action="./prosesEditPegawai.php">
                            <input type="hidden" name="id" value="<?php echo $id ?>">

                            <div class="mb-3">
                                <label for="namaInput" class="form-label">Nama</label>
                                <input type="text" class="form-control" name="nama" value="<?php echo $data['nama_pegawai'] ?>">
                            </div>
                            <div class="mb-3">
                                <label for="posisiInput" class="form-label">Posisi</label>
                                <select class="form-control" name="posisi" value="<?php echo $data['posisi_pegawai'] ?>" required>
                                    <option value="Mesin Cuci">Mesin Cuci</option>
                                    <option value="Setrika">Setrika</option>
                                    <option value="Kurir">Kasir</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="genderInput" class="form-label">Jenis Kelamin</label>
                                <select class="form-control" name="gender" value="<?php echo $data['gender_pegawai'] ?>" required>
                                    <option value="Laki-laki">Laki-laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="NoTlpInput" class="form-label">No.Telepon</label>
                                <input type="text" class="form-control" name="nomor" value="<?php echo $data['noTlp_pegawai'] ?>">
                            </div>
                            <div class="mb-3">
                                <label for="alamatInput" class="form-label">Alamat</label>
                                <input type="text" class="form-control" name="alamat" value="<?php echo $data['alamat_pegawai'] ?>">
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

<!-- POP UP Operasional Hapus pegawai -->
<?php
function popupHapus_pegawai($koneksi, $id){ //fungsi hapus pegawai
    $query = "SELECT * FROM tb_pegawai WHERE id_pegawai = '$id'";
    $hasil = mysqli_query($koneksi, $query);
    
    if($hasil && mysqli_num_rows($hasil) > 0) {
        $data = mysqli_fetch_array($hasil);
?>
        <div class="modal" id="modalHapusPegawai_<?php echo $id;?>" tabindex="-1" >
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Hapus Pegawai</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body text-start ml-3">
                        <p>Apakah Anda yakin ingin menghapus data pegawai dengan nama <?php echo $data['nama_pegawai'] ?></p>
    
                        <form method="post" action="prosesHapus_Pegawai.php?id=<?php echo $data['id_pegawai']?>" >
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