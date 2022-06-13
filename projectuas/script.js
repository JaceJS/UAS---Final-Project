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