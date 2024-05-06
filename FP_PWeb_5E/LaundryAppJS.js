//function bar navigasi
window.addEventListener("scroll", function(){
    const header = document.querySelector('header');
    header.classList.toggle("sticky", window.scrollY > 0);
})

// function toggleMenu(){
//     const menuBar = document.querySelector(".menuToggle");
//     const nav = document.querySelector(".nav");
//     menuBar.classList.toggle('active');
//     nav.classList.toggle('active')
// }

document.addEventListener("DOMContentLoaded", function() {
    const dashboardLink = document.querySelector('#dashboardLink');
    const dataCustomerLink = document.querySelector('#dataCustomerLink');
    const dashboardContent = document.querySelector('#dashboardContent');
    const dataCustomerContent = document.querySelector('#dataCustomerContent');

    // Cek apakah ada status terakhir yang disimpan di session storage
    const lastSelectedPage = sessionStorage.getItem('lastSelectedPage');
    if (lastSelectedPage === 'dataCustomer') {
        dashboardContent.style.display = 'none';
        dataCustomerContent.style.display = 'block';
        dataCustomerLink.classList.add('active'); // Tambahkan kelas active ke tautan Data Customer
    } else {
        dashboardContent.style.display = 'block';
        dataCustomerContent.style.display = 'none';
        dashboardLink.classList.add('active'); // Tambahkan kelas active ke tautan Dashboard
    }

    dashboardLink.addEventListener('click', function(event) {
        event.preventDefault();
        dashboardContent.style.display = 'block';
        dataCustomerContent.style.display = 'none';
        sessionStorage.setItem('lastSelectedPage', 'dashboard'); // Simpan status terakhir ke session storage
    });

    dataCustomerLink.addEventListener('click', function(event) {
        event.preventDefault();
        dashboardContent.style.display = 'none';
        dataCustomerContent.style.display = 'block';
        sessionStorage.setItem('lastSelectedPage', 'dataCustomer'); // Simpan status terakhir ke session storage
    });
});
