document.addEventListener("DOMContentLoaded", () => {
    const burgerIcon = document.getElementById("burger-menu"); // Icône burger
    const menuOverlay = document.getElementById("menu-overlay"); // Menu overlay
    const menuLinks = document.querySelectorAll(".menu-overlay a");

    // Toggle de l'overlay lorsque l'on clique sur l'icône burger
    burgerIcon.addEventListener("click", () => {
        menuOverlay.classList.toggle("show-overlay");
        burgerIcon.classList.toggle("active");
    });

    // Ferme l'overlay et suit le lien immédiatement
    menuLinks.forEach(link => {
        link.addEventListener("click", (event) => {
            menuOverlay.classList.remove("show-overlay");
            burgerIcon.classList.remove("active");
            // Évite les comportements inattendus
            event.preventDefault();
            // Redirige immédiatement
            window.location.href = link.href;
        });
    });
});
