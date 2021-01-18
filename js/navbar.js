var click = document.querySelector('.menu-mobile');
var menu = document.querySelector('.menu');
var social = document.querySelector('.social');
var dropdown = document.querySelector('.dropdown');
var title = document.querySelector('.title');

click.addEventListener('click', () => {
    menu.classList.toggle('transform-navbar');
    social.classList.toggle('transform-navbar');
    dropdown.classList.toggle('toggle');
    title.classList.toggle('transform-title');
});
document.querySelectorAll('.ul').forEach(item => {
    item.addEventListener('click', event => {
        menu.classList.remove('transform-navbar');
        social.classList.remove('transform-navbar');
        dropdown.classList.toggle('toggle');
        title.classList.toggle('transform-title');
    })
})