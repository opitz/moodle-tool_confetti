// amd/src/confetti.js
/**
 * Confetti module for Moodle.
 *
 * This module listens for clicks on links with the class "confetti"
 * and throws virtual confetti (🎉) across the screen.
 *
 * @module     tool_confetti/confetti
 * @copyright  2025 You
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
define([], function() {
    /**
     * Throwing cconfetti.
     *
     */
    function throwConfetti() {
        // Basic confetti effect using canvas.
        const duration = 2 * 1000;
        const end = Date.now() + duration;

        (function frame() {
            // Create a confetti element
            const confetti = document.createElement('div');
//            confetti.textContent = '🎉';
            confetti.textContent = '✨';
            confetti.style.position = 'fixed';
            confetti.style.left = Math.random() * 100 + 'vw';
            confetti.style.top = '-2em';
            confetti.style.fontSize = '2em';
            confetti.style.transition = 'transform 2s linear, top 2s linear';
            document.body.appendChild(confetti);

            requestAnimationFrame(() => {
                confetti.style.top = '100vh';
                confetti.style.transform = `rotate(${Math.random() * 720}deg)`;
            });

            setTimeout(() => confetti.remove(), 2000);

            if (Date.now() < end) {
                requestAnimationFrame(frame);
            }
        })();
    }

    return {
        init: function() {
            console.log("✅ tool_confetti: AMD init fired");
            document.addEventListener('click', function(e) {
                if (e.target.closest('a.confetti')) {
                    e.preventDefault();
                    throwConfetti();
                }
            });
        }
    };
});
