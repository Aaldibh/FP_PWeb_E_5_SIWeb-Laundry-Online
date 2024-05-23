<link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/checkout/">
<!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3"> -->
<link href="../bootstrap-5.3.3-dist/css/bootstrap.min.css" rel="stylesheet">
<link href="../assets/bootstrap-5.3.3-examples/checkout/checkout.css" rel="stylesheet">

<?php
function checkOutContent()
{
    include_once("./koneksi.php");
?>
    <main class="ms-sm-auto px-md-4">
        <div id="checkoutContent" style="display: none;">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <a href="#" style="margin-right: 10px; margin-left: 10px;" id="kembaliDashboardLink"><img src="./assets/bootstrap-icons-1.11.0/arrow-left-circle.svg" style="width: 30px; height:30px;">
                </a>
                <h1 class="h2"> Pembayaran</h1>

            </div>
            <div class="row g-5">
                <!-- <div class="col-md-5 col-lg-4 order-md-last">
                    <h4 class="d-flex justify-content-between align-items-center mb-3">
                        <span class="text-primary">Your cart</span>
                        <span class="badge bg-primary rounded-pill">3</span>
                    </h4>
                    <ul class="list-group mb-3">
                        <li class="list-group-item d-flex justify-content-between lh-sm">
                            <div>
                                <h6 class="my-0">Product name</h6>
                                <small class="text-body-secondary">Brief description</small>
                            </div>
                            <span class="text-body-secondary">$12</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between lh-sm">
                            <div>
                                <h6 class="my-0">Second product</h6>
                                <small class="text-body-secondary">Brief description</small>
                            </div>
                            <span class="text-body-secondary">$8</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between lh-sm">
                            <div>
                                <h6 class="my-0">Third item</h6>
                                <small class="text-body-secondary">Brief description</small>
                            </div>
                            <span class="text-body-secondary">$5</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between bg-body-tertiary">
                            <div class="text-success">
                                <h6 class="my-0">Promo code</h6>
                                <small>EXAMPLECODE</small>
                            </div>
                            <span class="text-success">−$5</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between">
                            <span>Total (USD)</span>
                            <strong>$20</strong>
                        </li>
                    </ul>

                    <form class="card p-2">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Promo code">
                            <button type="submit" class="btn btn-secondary">Redeem</button>
                        </div>
                    </form>
                </div> -->
                <div class="col-md-5 col-lg-8">
                    <form>
                        <div class="row g-3">
                            <h4 class="mb-0">Alamat Jemput dan Antar</h4>
                            <div class="col-12">
                                <label for="alamat" class="form-label">Alamat</label>
                                <input type="text" class="form-control" name="alamat" placeholder="1234 Main St" required>
                                <div class="invalid-feedback">
                                    Please enter your shipping address.
                                </div>
                            </div>

                            <hr class="my-4">

                            <h4 class="mb-0">Data Pesanan</h4>
                            <div class="col-sm-6">
                                <label for="layanan" class="form-label">Layanan</label>
                                <input type="text" class="form-control" name="layanan" id="layananInput" readonly>
                            </div>

                            <div class="col-sm-6">
                                <label for="hargaSatuan" class="form-label">Harga /16ptg</label>
                                <input type="text" class="form-control" name="hargaSatuan" id="hargaSatuanInput" readonly>
                            </div>

                            <div class="col-sm-12">
                                <label for="jumlah" class="form-label">Jumlah Item</label>
                                <input type="number" class="form-control" name="jumlah" placeholder="0" required>

                            </div>

                            <div class="col-12">
                                <label for="keterangan" class="form-label">Keterangan Tambahan</label>
                                <input type="textbox" class="form-control" name="keterangan">

                            </div>

                            <div class="col-12">
                                <label for="tagihan" class="form-label">Total Tagihan</label>
                                <input type="text" class="form-control" name="tagihan" placeholder="0" required>

                            </div>

                            <hr class="my-4">

                            <h4 class="mb-3">Metode Pembayaran</h4>

                            <div class="my-3">
                                <div class="form-check">
                                    <input id="debit" name="paymentMethod" type="radio" class="form-check-input" checked required>
                                    <select class="form-check-label" for="debit">
                                        <option value="" selected disabled>Virtual Account</option>
                                        <option value="BRI">BCA</option>
                                        <option value="BRI">BRI</option>
                                        <option value="BRI">BNI</option>
                                    </select>
                                </div>
                                <div class="form-check">
                                    <input id="debit" name="paymentMethod" type="radio" class="form-check-input" required>
                                    <label class="form-check-label" for="debit">ShopeePay</label>
                                </div>
                                <div class="form-check">
                                    <input id="paypal" name="paymentMethod" type="radio" class="form-check-input" required>
                                    <label class="form-check-label" for="paypal">Dana</label>
                                </div>
                            </div>
                        </div>

                        <hr class="my-4">

                        <button class="w-100 btn btn-primary btn-lg" type="submit">Continue to checkout</button>

                    </form>
                </div>
            </div>

            <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
            <script src="../barNavCustomer.js"></script>
            <script>
                kembaliDashboardLink.addEventListener('click', function(event) {
                    event.preventDefault();
                    dashboardContent.style.display = 'block';
                    riwayatTransaksiContent.style.display = 'none';
                    checkoutContent.style.display = 'none';
                    sessionStorage.setItem('lastSelectedPage', 'dashboard');
                });

                const layananInput = document.querySelector('#layananInput');
                const hargaSatuanInput = document.getElementById('hargaSatuanInput');

                document.querySelectorAll('.layananLink').forEach(function(link) {
                    link.addEventListener('click', function(event) {
                        event.preventDefault();
                        const layananName = link.querySelector('h5').textContent;
                        layananInput.value = layananName;

                        // Menggunakan AJAX untuk mendapatkan harga layanan
                        const xhr = new XMLHttpRequest();
                        xhr.open('POST', 'prosesGet_Harga.php', true);
                        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
                        xhr.onload = function() {
                            if (xhr.status === 200) {
                                hargaSatuanInput.value = xhr.responseText.trim();

                            }
                        };
                        xhr.send('layanan=' + layananName);
                    });
                });
            </script>


        </div>
    </main>
<?php
}
?>