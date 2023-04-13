const menuItems = document.querySelectorAll('.user-menu__list-item');

menuItems.forEach((item) => {
    const link = item.querySelector('.user-menu__item');
    link.addEventListener('click', (event) => {
        event.preventDefault();
        item.classList.toggle('active');
    });
});

