document.addEventListener("DOMContentLoaded", function() {
    const dashboardLink = document.querySelector('#dashboardLink');
    const dataCustomerLink = document.querySelector('#dataCustomerLink');
    const dataLayananLink = document.querySelector('#dataLayananLink');
    const dataPegawaiLink = document.querySelector('#dataPegawaiLink');
    const dataTransaksiLink = document.querySelector('#dataTransaksiLink');

    const dashboardContent = document.querySelector('#dashboardContent');
    const dataCustomerContent = document.querySelector('#dataCustomerContent');
    const dataLayananContent = document.querySelector('#dataLayananContent');
    const dataPegawaiContent = document.querySelector('#dataPegawaiContent');
    const dataTransaksiContent = document.querySelector('#dataTransaksiContent');

    // Cek apakah ada status terakhir yang disimpan di session storage
    const lastSelectedPage = sessionStorage.getItem('lastSelectedPage');
    if (lastSelectedPage === 'dataCustomer') {
        dashboardContent.style.display = 'none';
        dataCustomerContent.style.display = 'block';
        dataLayananContent.style.display = 'none';
        dataTransaksiContent.style.display = 'none';
        dataPegawaiContent.style.display = 'none';
        dataCustomerLink.classList.add('active'); // Tambahkan kelas active ke tautan Data Customer

    } else if(lastSelectedPage === 'dataLayanan'){
        dashboardContent.style.display = 'none';
        dataLayananContent.style.display = 'block';
        dataCustomerContent.style.display = 'none';
        dataTransaksiContent.style.display = 'none';
        dataPegawaiContent.style.display = 'none';
        dataLayananLink.classList.add('active'); // Tambahkan kelas active ke tautan data layanan

    }else if(lastSelectedPage === 'dataPegawai'){
        dashboardContent.style.display = 'none';
        dataLayananContent.style.display = 'none';
        dataCustomerContent.style.display = 'none';
        dataTransaksiContent.style.display = 'none';
        dataPegawaiContent.style.display = 'block';
        dataPegawaiLink.classList.add('active'); // Tambahkan kelas active ke tautan data admin

    }else if(lastSelectedPage === 'dataTransaksi'){
        dashboardContent.style.display = 'none';
        dataLayananContent.style.display = 'none';
        dataCustomerContent.style.display = 'none';
        dataPegawaiContent.style.display = 'none';
        dataTransaksiContent.style.display = 'block';
        dataTransaksiLink.classList.add('active');

    }else{
        dashboardContent.style.display = 'block';
        dataCustomerContent.style.display = 'none';
        dataLayananContent.style.display = 'none';
        dataPegawaiContent.style.display = 'none';
        dataTransaksiContent.style.display = 'none';
        dashboardLink.classList.add('active');// Tambahkan kelas active ke tautan Dashboard
    }

    dashboardLink.addEventListener('click', function(event) {
        event.preventDefault();
        dashboardContent.style.display = 'block';
        dataCustomerContent.style.display = 'none';
        dataLayananContent.style.display = 'none';
        dataPegawaiContent.style.display = 'none';
        dataTransaksiContent.style.display = 'none';
        sessionStorage.setItem('lastSelectedPage', 'dashboard'); // Simpan status terakhir ke session storage
    });

    dataCustomerLink.addEventListener('click', function(event) {
        event.preventDefault();
        dashboardContent.style.display = 'none';
        dataCustomerContent.style.display = 'block';
        dataLayananContent.style.display = 'none';
        dataPegawaiContent.style.display = 'none';
        dataTransaksiContent.style.display = 'none';
        sessionStorage.setItem('lastSelectedPage', 'dataCustomer'); // Simpan status terakhir ke session storage
    });
    dataLayananLink.addEventListener('click', function(event) {
        event.preventDefault();
        dashboardContent.style.display = 'none';
        dataCustomerContent.style.display = 'none';
        dataLayananContent.style.display = 'block';
        dataPegawaiContent.style.display = 'none';
        dataTransaksiContent.style.display = 'none';
        sessionStorage.setItem('lastSelectedPage', 'dataLayanan'); // Simpan status terakhir ke session storage
    });
    dataTransaksiLink.addEventListener('click', function(event) {
        event.preventDefault();
        dashboardContent.style.display = 'none';
        dataCustomerContent.style.display = 'none';
        dataLayananContent.style.display = 'none';
        dataPegawaiContent.style.display = 'none';
        dataTransaksiContent.style.display = 'none';
        dataTransaksiContent.style.display = 'block';
        sessionStorage.setItem('lastSelectedPage', 'dataTransaksi');
    });
    dataPegawaiLink.addEventListener('click', function(event) {
        event.preventDefault();
        dashboardContent.style.display = 'none';
        dataCustomerContent.style.display = 'none';
        dataLayananContent.style.display = 'none';
        dataPegawaiContent.style.display = 'block';
        dataTransaksiContent.style.display = 'none';
        sessionStorage.setItem('lastSelectedPage', 'dataPegawai'); // Simpan status terakhir ke session storage
    });
});
