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