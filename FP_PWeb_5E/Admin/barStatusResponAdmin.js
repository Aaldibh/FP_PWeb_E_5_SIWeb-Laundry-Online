document.addEventListener("DOMContentLoaded", function() {
    // const antrianLink = document.querySelector('#antrianLink');
    const prosesLink = document.querySelector('#prosesLink');
    const diantarLink = document.querySelector('#diantarLink');
    const selesaiLink = document.querySelector('#selesaiLink');
    const ambilLink = document.querySelector('#ambilLink');

    // const antrianContent = document.querySelector('#antrianContent');
    const prosesContent = document.querySelector('#prosesContent');
    const diantarContent = document.querySelector('#diantarContent');
    const selesaiContent = document.querySelector('#selesaiContent');
    const ambilContent = document.querySelector('#ambilContent');

    // Cek apakah ada status terakhir yang disimpan di session storage
    const lastSelectedPage = sessionStorage.getItem('lastSelectedPage');
    if (lastSelectedPage === 'pesananSelesai') {
        prosesContent.style.display = 'none';
        selesaiContent.style.display = 'block';
        diantarContent.style.display = 'none';
        ambilContent.style.display = 'none';
        // antrianContent.style.display = 'none';
        selesaiLink.classList.add('active'); 

    } else if(lastSelectedPage === 'proses'){
        // antrianContent.style.display = 'none';
        prosesContent.style.display = 'block';
        diantarContent.style.display = 'none';
        ambilContent.style.display = 'none';
        selesaiContent.style.display = 'none';
        prosesLink.classList.add('active'); 

    }else if(lastSelectedPage === 'diantar'){
        // antrianContent.style.display = 'none';
        prosesContent.style.display = 'none';
        ambilContent.style.display = 'none';
        selesaiContent.style.display = 'none';
        diantarContent.style.display = 'block';
        diantarLink.classList.add('active'); 

    // } else if(lastSelectedPage === 'antrian'){
    //     antrianContent.style.display = 'block';
    //     prosesContent.style.display = 'none';
    //     diantarContent.style.display = 'none';
    //     ambilContent.style.display = 'none';
    //     selesaiContent.style.display = 'none';
    //     antrianLink.classList.add('active'); 

    }else{
        // antrianContent.style.display = 'none';
        prosesContent.style.display = 'none';
        diantarContent.style.display = 'none';
        ambilContent.style.display = 'block';
        selesaiContent.style.display = 'none';
        ambilLink.classList.add('active');
    }

    // antrianLink.addEventListener('click', function(event) {
    //     event.preventDefault();
    //     antrianContent.style.display = 'block';
    //     prosesContent.style.display = 'none';
    //     diantarContent.style.display = 'none';
    //     ambilContent.style.display = 'none';
    //     selesaiContent.style.display = 'none';
    //     sessionStorage.setItem('lastSelectedPage', 'antrian'); 
    // });

    prosesLink.addEventListener('click', function(event) {
        event.preventDefault();
        // antrianContent.style.display = 'none';
        prosesContent.style.display = 'block';
        diantarContent.style.display = 'none';
        ambilContent.style.display = 'none';
        selesaiContent.style.display = 'none';
        sessionStorage.setItem('lastSelectedPage', 'proses'); // Simpan status terakhir ke session storage
    });
    diantarLink.addEventListener('click', function(event) {
        event.preventDefault();
        // antrianContent.style.display = 'none';
        prosesContent.style.display = 'none';
        diantarContent.style.display = 'block';
        ambilContent.style.display = 'none';
        selesaiContent.style.display = 'none';
        sessionStorage.setItem('lastSelectedPage', 'diantar'); // Simpan status terakhir ke session storage
    });
    ambilLink.addEventListener('click', function(event) {
        event.preventDefault();
        // antrianContent.style.display = 'none';
        prosesContent.style.display = 'none';
        diantarContent.style.display = 'none';
        ambilContent.style.display = 'block';
        selesaiContent.style.display = 'none';
        sessionStorage.setItem('lastSelectedPage', 'diambil');
    });
    selesaiLink.addEventListener('click', function(event) {
        event.preventDefault();
        // antrianContent.style.display = 'none';
        prosesContent.style.display = 'none';
        diantarContent.style.display = 'none';
        ambilContent.style.display = 'none';
        selesaiContent.style.display = 'block';
        sessionStorage.setItem('lastSelectedPage', 'pesananSelesai');
    });  
});
function prosesTransaksi(id_transaksi, update_status) {
    var confirmation = confirm("Apakah Anda yakin ingin memproses transaksi ini?");
    if (confirmation) {
        window.location.href = 'prosesUpdatedStatus.php?id=' + id_transaksi + '&status=' + update_status;
    }
}
