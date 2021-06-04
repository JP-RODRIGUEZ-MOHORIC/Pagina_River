const iconMenu = document.getElementById('icon-menu');
const mainMenu = document.getElementById('main-menu');

iconMenu.addEventListener('click', ()=> {iconMenu.firstElementChild.classList.toggle('icon-menu__bar--simple');
})

iconMenu.addEventListener('click', ()=>mainMenu.classList.toggle('menu--show'));

