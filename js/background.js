document.addEventListener("DOMContentLoaded", () => {
    const starsContainer = document.getElementById("stars");
    const starCount = 220; // Nombre d'étoiles
    const shootingStarCount = 4; // Nombre d'étoiles filantes
    const shootingStars = [];
    const stars = [];
    const canvas = document.getElementById("shooting-stars");
    const ctx = canvas.getContext("2d");

    // Redimensionner le canvas
    function resizeCanvas() {
        canvas.width = window.innerWidth;
        canvas.height = window.innerHeight;
    }
    window.addEventListener("resize", resizeCanvas);
    resizeCanvas();

    // Générer des étoiles normales
    for (let i = 0; i < starCount; i++) {
        const star = document.createElement("div");
        star.className = "star";
        star.style.left = `${Math.random() * 100}vw`;
        star.style.top = `${Math.random() * 100}vh`;
        starsContainer.appendChild(star);
        stars.push(star);
    }

    // Animation fluide des étoiles normales
    function animateStars() {
        stars.forEach((star) => {
            let left = parseFloat(star.style.left);
            left -= 0.05;
            if (left < -1) {
                left = 100;
                star.style.top = `${Math.random() * 100}vh`;
            }
            star.style.left = `${left}vw`;
        });
        requestAnimationFrame(animateStars);
    }

    // Générer des étoiles filantes
    for (let i = 0; i < shootingStarCount; i++) {
        shootingStars.push({
            x: Math.random() * canvas.width,
            y: Math.random() * canvas.height / 2 - 50, // Plus haut
            size: Math.random() * 3 + 2,
            velocityX: Math.random() * 8 + 5,
            velocityY: Math.random() * 8 + 5,
            opacity: Math.random() * 0.5 + 0.5,
        });
    }

    // Dessiner les étoiles filantes
    function drawShootingStars() {
        ctx.clearRect(0, 0, canvas.width, canvas.height);
        shootingStars.forEach((star, index) => {
            ctx.beginPath();
            ctx.strokeStyle = `rgba(255, 255, 255, ${star.opacity})`;
            ctx.lineWidth = 2;
            ctx.moveTo(star.x, star.y);
            ctx.lineTo(star.x - star.velocityX * 2, star.y - star.velocityY * 2);
            ctx.stroke();

            star.x += star.velocityX;
            star.y += star.velocityY;
            star.opacity -= 0.01;

            if (star.opacity <= 0) {
                shootingStars[index] = {
                    x: Math.random() * canvas.width,
                    y: Math.random() * canvas.height / 2 - 50, // Réapparaît plus haut
                    size: Math.random() * 3 + 2,
                    velocityX: Math.random() * 8 + 5,
                    velocityY: Math.random() * 8 + 5,
                    opacity: Math.random() * 0.5 + 0.5,
                };
            }
        });
        requestAnimationFrame(drawShootingStars);
    }

    animateStars();
    drawShootingStars();
});
