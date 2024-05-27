<?php
function popupKonfirmasiBayar()
{
?>
    <div class="modal" id="modalKonfirmasiBayar" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Konfirmasi Pembayaran</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form method="post" action="./prosesCheckout.php">
                        <ul class="list-group mb-3">

                            <h6>Rincian Pengiriman dan Pengambilan</h6>
                            <li class="list-group-item d-flex justify-content-between lh-sm">
                                <label for="alamat">Alamat:</label>
                                <input type="text" class="form-control" name="alamat" id="alamat">
                            </li>

                            <li class="list-group-item d-flex justify-content-between lh-sm">
                                <label for="waktuAmbil">Jam Ambil Kurir:</label>
                                <input type="text" class="form-control" name="waktuAmbil" id="waktuAmbil">
                            </li>
                        </ul>
                        <ul class="list-group mb-3">
                            <hr class="my-2">
                            <h6>Rincian Pesanan</h6>

                            <li class="list-group-item d-flex justify-content-between lh-sm">
                                <label for="layanan">Layanan:</label>
                                <input type="text" class="form-control" name="layanan" id="layanan">
                            </li>

                            <li class="list-group-item d-flex justify-content-between lh-sm">
                                <label for="harga">Harga:</label>
                                <input type="text" class="form-control" name="harga" id="harga">
                            </li>

                            <li class="list-group-item d-flex justify-content-between">
                                <label for="jumlah">Jumlah Item</label>
                                <input type="text" class="form-control" name="jumlah" id="jumlah">
                            </li>

                            <li class="list-group-item d-flex justify-content-between">
                                <label for="keterangan">Keterangan Tambahan</label>
                                <input type="text" class="form-control" name="keterangan" id="keterangan">
                            </li>

                            <li class="list-group-item d-flex justify-content-between">
                                <label for="tagihan">Total Tagihan</label>
                                <input type="text" class="form-control" name="tagihan" id="tagihan">
                            </li>
                        </ul>
                        <ul class="list-group mb-3">
                            <hr class="my-2">
                            <h6>Rincian Pembayaran</h6>
                            <li class="list-group-item d-flex justify-content-between">
                                <label for="metodeBayar">Metode Pembayaran</label>
                                <input type="text" class="form-control" name="metodeBayar" id="metodeBayar">
                            </li>
                        </ul>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                            <button type="submit" class="btn btn-primary">Konfirmasi Pembayaran</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

<?php
}
?>