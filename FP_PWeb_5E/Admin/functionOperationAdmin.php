<!-- Fungsi operasional Owner -->
<!-- POP UP Operasional Tambah Data Layanan -->
<?php 
include_once("../koneksi.php");
function popupTambahPegawai(){ //fungsi tambah Layanan
?>
    <div class="modal" id="modalTambahPegawai" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Tambah Layanan</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Masukkan data layanan laundry.</p>

                    <form method="post" action="./prosesTambahPegawai.php">
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