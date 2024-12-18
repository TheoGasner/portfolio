 document.addEventListener("DOMContentLoaded", () => {
    const burgerIcon = document.getElementById("burger-menu"); // Icône burger
    const menuOverlay = document.getElementById("menu-overlay"); // Menu overlay

    // Toggle de l'overlay lorsque l'on clique sur l'icône burger
    burgerIcon.addEventListener("click", () => {
        menuOverlay.classList.toggle("show-overlay");
        burgerIcon.classList.toggle("active");
    });

    // Ferme l'overlay lorsque l'on clique sur un lien du menu
    const menuLinks = document.querySelectorAll(".menu-overlay a");
    menuLinks.forEach(link => {
        link.addEventListener("click", () => {
            menuOverlay.classList.remove("show-overlay");
            burgerIcon.classList.remove("active");
        });
    });
});