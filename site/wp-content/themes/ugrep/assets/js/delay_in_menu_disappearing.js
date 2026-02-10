document.querySelectorAll('.main-navigation .menu-item-has-children').forEach(item => {
    let timeout;
    const link = item.querySelector(':scope > a');
    const submenu = item.querySelector(':scope > .sub-menu');

    if (!submenu) return;

    const showMenu = () => {
        clearTimeout(timeout);
        submenu.classList.add('visible');
        link.classList.add('active');
    };

    const hideMenu = () => {
        timeout = setTimeout(() => {
            submenu.classList.remove('visible');
            link.classList.remove('active');
        }, 200); // задержка закрытия
    };

    // Наведение на родителя
    item.addEventListener('mouseenter', showMenu);
    item.addEventListener('mouseleave', hideMenu);

    // Наведение на подменю
    submenu.addEventListener('mouseenter', showMenu);
    submenu.addEventListener('mouseleave', hideMenu);
});
