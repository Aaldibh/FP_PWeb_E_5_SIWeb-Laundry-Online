document.addEventListener("DOMContentLoaded", function() {
    const antrianLink = document.querySelector('#antrianLink');
    const prosesLink = document.querySelector('#prosesLink');
    const diantarLink = document.querySelector('#diantarLink');
    const pesananSelesaiLink = document.querySelector('#pesanananSelesaiLink');

    const antrianContent = document.querySelector('#antrianContent');
    const prosesContent = document.querySelector('#prosesContent');
    const diantarContent = document.querySelector('#diantarContent');
    const pesananSelesaiContent = document.querySelector('#pesananSelesaiContent');

    // Cek apakah ada status terakhir yang disimpan di session storage
    const lastSelectedPage = sessionStorage.getItem('lastSelectedPage');
    if (lastSelectedPage === 'pesananSelesai') {
        prosesContent.style.display = 'none';
        pesananSelesaiContent.style.display = 'block';
        diantarContent.style.display = 'none';
        antrianContent.style.display = 'none';
        pesananSelesaiLink.classList.add('active'); 

    } else if(lastSelectedPage === 'proses'){
        antrianContent.style.display = 'none';
        prosesContent.style.display = 'block';
        diantarContent.style.display = 'none';
        pesananSelesaiContent.style.display = 'none';
        prosesLink.classList.add('active'); 

    }else if(lastSelectedPage === 'diantar'){
        antrianContent.style.display = 'none';
        prosesContent.style.display = 'none';
        pesananSelesaiContent.style.display = 'none';
        diantarContent.style.display = 'block';
        diantarLink.classList.add('active'); 

    }else{
        antrianContent.style.display = 'block';
        prosesContent.style.display = 'none';
        diantarContent.style.display = 'none';
        pesananSelesaiContent.style.display = 'none';
        antrianLink.classList.add('active');
    }

    antrianLink.addEventListener('click', function(event) {
        event.preventDefault();
        antrianContent.style.display = 'block';
        prosesContent.style.display = 'none';
        diantarContent.style.display = 'none';
        pesananSelesaiContent.style.display = 'none';
        sessionStorage.setItem('lastSelectedPage', 'antrian'); // Simpan status terakhir ke session storage
    });

    prosesLink.addEventListener('click', function(event) {
        event.preventDefault();
        antrianContent.style.display = 'none';
        prosesContent.style.display = 'block';
        diantarContent.style.display = 'none';
        pesananSelesaiContent.style.display = 'none';
        sessionStorage.setItem('lastSelectedPage', 'proses'); // Simpan status terakhir ke session storage
    });
    diantarLink.addEventListener('click', function(event) {
        event.preventDefault();
        antrianContent.style.display = 'none';
        prosesContent.style.display = 'none';
        diantarContent.style.display = 'block';
        pesananSelesaiContent.style.display = 'none';
        sessionStorage.setItem('lastSelectedPage', 'diantar'); // Simpan status terakhir ke session storage
    });
    pesananSelesaiLink.addEventListener('click', function(event) {
        event.preventDefault();
        antrianContent.style.display = 'none';
        prosesContent.style.display = 'none';
        diantarContent.style.display = 'none';
        pesananSelesaiContent.style.display = 'block';
        sessionStorage.setItem('lastSelectedPage', 'pesananSelesai');
    });
});
