//fungsi bar navigasi halaman customer
document.addEventListener("DOMContentLoaded", function() {
    const dashboardLink = document.querySelector('#dashboardLink');
    const riwayatTransaksiLink = document.querySelector('#riwayatTransaksiLink');

    const dashboardContent = document.querySelector('#dashboardContent');
    const riwayatTransaksiContent = document.querySelector('#riwayatTransaksiContent');

    // Cek apakah ada status terakhir yang disimpan di session storage
    const lastSelectedPage = sessionStorage.getItem('lastSelectedPage');
    if (lastSelectedPage === 'riwayatTransaksi') {
        dashboardContent.style.display = 'none';
        riwayatTransaksiContent.style.display = 'block';
        riwayatTransaksiLink.classList.add('active'); 

    }else{
        dashboardContent.style.display = 'block';
        riwayatTransaksiContent.style.display = 'none';
        dashboardLink.classList.add('active');// Tambahkan kelas active ke tautan Dashboard
    }

    dashboardLink.addEventListener('click', function(event) {
        event.preventDefault();
        dashboardContent.style.display = 'block';
        riwayatTransaksiContent.style.display = 'none';
        sessionStorage.setItem('lastSelectedPage', 'dashboard'); // Simpan status terakhir ke session storage
    });

    riwayatTransaksiLink.addEventListener('click', function(event) {
        event.preventDefault();
        dashboardContent.style.display = 'none';
        riwayatTransaksiContent.style.display = 'block';
        sessionStorage.setItem('lastSelectedPage', 'riwayatTransaksi'); // Simpan status terakhir ke session storage
    });
});
