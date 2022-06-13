/* Header */
const hamburgerIcon = document.querySelector(".hamburger-icon");
const closeIcon = document.querySelector(".close-icon");
const activeArea = document.querySelector(".mobile-display");
const activeMenu = document.querySelector("nav")

activeArea.addEventListener("click", e => {
    hamburgerIcon.classList.toggle("active");  
    closeIcon.classList.toggle("active"); 
    activeMenu.classList.toggle("active"); 
});

/* Halaman Home */
const lihatLebih = document.querySelectorAll(".lihat-lebih");
const deskripsi = document.querySelector(".deskripsi");

lihatLebih.forEach( el => {
    el.addEventListener("click", e => {
        e.target.previousElementSibling.classList.toggle("active"); 
    });
});

/* Halaman Profil */
const tombolAnggota = document.querySelector("#tombol-anggota");

tombolAnggota.addEventListener("click", e => {
    e.target.previousElementSibling.classList.toggle("active"); 
    e.target.parentElement.classList.toggle("active"); 
});



