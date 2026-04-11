document.addEventListener('DOMContentLoaded', () => {
    const burgerCheckbox = document.querySelector('.header__checkbox');

    if (burgerCheckbox) {
        burgerCheckbox.addEventListener('change', (e) => {
            if (e.target.checked) {
                // Bloque le scroll
                document.body.classList.add('no-scroll');
                document.documentElement.classList.add('no-scroll'); // Cible <html>
            } else {
                // Débloque le scroll
                document.body.classList.remove('no-scroll');
                document.documentElement.classList.remove('no-scroll');
            }
        });
    }
});