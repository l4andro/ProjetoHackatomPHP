// confetti.js
document.addEventListener("DOMContentLoaded", function() {
    const duration = 10 * 1000; // Tempo de duração da animação de confetes (em milissegundos)
    const animationEnd = Date.now() + duration;
    
    function randomInRange(min, max) {
        return Math.random() * (max - min) + min;
    }

    function createConfetti() {
        const defaults = { startVelocity: 30, spread: 360, ticks: 60, zIndex: 0 };

        function runAnimation() {
            const timeLeft = animationEnd - Date.now();

            if (timeLeft <= 0) {
                return;
            }

            const particleCount = 50 * (timeLeft / duration);
            confetti({
                particleCount,
                origin: { x: randomInRange(0.1, 0.3), y: Math.random() - 0.2 },
                ...defaults
            });
            confetti({
                particleCount,
                origin: { x: randomInRange(0.7, 0.9), y: Math.random() - 0.2 },
                ...defaults
            });

            requestAnimationFrame(runAnimation);
        }

        // Iniciar a animação de confetes
        runAnimation();
    }

    createConfetti();
});
