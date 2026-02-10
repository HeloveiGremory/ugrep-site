document.querySelectorAll('.main-navigation .menu-item-has-children').forEach(item => {
    item.addEventListener('mouseenter', () => {
        const submenu = item.querySelector(':scope > .sub-menu');
        if (!submenu) return;

        // сбрасываем прошлые классы
        submenu.classList.remove('open-left', 'open-up');

        // временно показываем, чтобы посчитать размеры
        submenu.style.display = 'flex';

        const rect = submenu.getBoundingClientRect();

        // если выходит за правый край
        if (rect.right > window.innerWidth) {
            submenu.classList.add('open-left');
        }

        // если выходит за нижний край
        if (rect.bottom > window.innerHeight) {
            submenu.classList.add('open-up');
        }
    });
});

