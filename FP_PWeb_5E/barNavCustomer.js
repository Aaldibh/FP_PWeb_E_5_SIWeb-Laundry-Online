//fungsi bar navigasi halaman customer
document.addEventListener("DOMContentLoaded", function() {

    const dashboardLink = document.querySelector('#dashboardLink');
    const riwayatTransaksiLink = document.querySelector('#riwayatTransaksiLink');
    const profilLink = document.querySelector('#profilLink');
    const cuciBasahLink = document.querySelector('#cuciBasahLink');
    const cuciKeringLink = document.querySelector('#cuciKeringLink');
    const cuciSetrikaLink = document.querySelector('#cuciSetrikaLink');
    const setrikaSajaLink = document.querySelector('#setrikaSajaLink');
    const kembaliDashboardLink = document.querySelector('#kembaliDashboardLink');

    const dashboardContent = document.querySelector('#dashboardContent');
    const profilContent = document.querySelector('#profilContent');
    const riwayatTransaksiContent = document.querySelector('#riwayatTransaksiContent');
    const checkoutContent =document.querySelector('#checkoutContent');

    // Cek apakah ada status terakhir yang disimpan di session storage
    const lastSelectedPage = sessionStorage.getItem('lastSelectedPage');
    if (lastSelectedPage === 'riwayatTransaksi') {
        dashboardContent.style.display = 'none';
        profilContent.style.display = 'none';
        riwayatTransaksiContent.style.display = 'block';
        riwayatTransaksiLink.classList.add('active'); 

    }else if(lastSelectedPage === 'profil'){
        dashboardContent.style.display = 'none';
        profilContent.style.display = 'block';
        riwayatTransaksiContent.style.display = 'none';
        profilLink.classList.add('active');

    }else{
        dashboardContent.style.display = 'block';
        profilContent.style.display = 'none';
        riwayatTransaksiContent.style.display = 'none';
        dashboardLink.classList.add('active');// Tambahkan kelas active ke tautan Dashboard
    }

    dashboardLink.addEventListener('click', function(event) {
        event.preventDefault();
        dashboardContent.style.display = 'block';
        profilContent.style.display = 'none';
        riwayatTransaksiContent.style.display = 'none';
        checkoutContent.style.display = 'none';
        sessionStorage.setItem('lastSelectedPage', 'dashboard'); // Simpan status terakhir ke session storage
    });

    profilLink.addEventListener('click', function(event) {
        event.preventDefault();
        dashboardContent.style.display = 'none';
        profilContent.style.display = 'block';
        riwayatTransaksiContent.style.display = 'none';
        checkoutContent.style.display = 'none';
        sessionStorage.setItem('lastSelectedPage', 'profil');
    });

    riwayatTransaksiLink.addEventListener('click', function(event) {
        event.preventDefault();
        dashboardContent.style.display = 'none';
        profilContent.style.display = 'none';
        riwayatTransaksiContent.style.display = 'block';
        checkoutContent.style.display = 'none';
        sessionStorage.setItem('lastSelectedPage', 'riwayatTransaksi'); // Simpan status terakhir ke session storage
    });

    cuciBasahLink.addEventListener('click', function(event) {
        event.preventDefault();
        dashboardContent.style.display = 'none';
        profilContent.style.display = 'none';
        riwayatTransaksiContent.style.display = 'none';
        checkoutContent.style.display = 'block';
        sessionStorage.setItem('lastSelectedPage', 'cuciBasah');
    });
    
    cuciKeringLink.addEventListener('click', function(event) {
        event.preventDefault();
        dashboardContent.style.display = 'none';
        profilContent.style.display = 'none';
        riwayatTransaksiContent.style.display = 'none';
        checkoutContent.style.display = 'block';
        sessionStorage.setItem('lastSelectedPage', 'cuciKering');
    });
    cuciSetrikaLink.addEventListener('click', function(event) {
        event.preventDefault();
        dashboardContent.style.display = 'none';
        profilContent.style.display = 'none';
        riwayatTransaksiContent.style.display = 'none';
        checkoutContent.style.display = 'block';
        sessionStorage.setItem('lastSelectedPage', 'cuciSetrika');
    });
    
    setrikaSajaLink.addEventListener('click', function(event) {
        event.preventDefault();
        dashboardContent.style.display = 'none';
        riwayatTransaksiContent.style.display = 'none';
        profilContent.style.display = 'none';
        checkoutContent.style.display = 'block';
        sessionStorage.setItem('lastSelectedPage', 'setrikaSaja');
    });
    kembaliDashboardLink.addEventListener('click', function(event) {
        event.preventDefault();
        console.log('Tombol Kembali diklik.'); // Tambahkan pesan log
        dashboardContent.style.display = 'block';
        profilContent.style.display = 'none';
        riwayatTransaksiContent.style.display = 'none';
        checkoutContent.style.display = 'none';
        sessionStorage.setItem('lastSelectedPage', 'dashboard');
    });
});
