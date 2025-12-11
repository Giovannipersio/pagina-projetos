let btnMenu = document.getElementById('btn-menu');
let menu = document.getElementById('menu-mobile');
let overlay = document.getElementById('overlay-menu');

btnMenu.addEventListener('click', ()=>{
    menu.classList.add('abrir-menu');
    overlay.classList.add('abrir-menu'); 
});

menu.addEventListener('click', ()=>{
    menu.classList.remove('abrir-menu');
    overlay.classList.remove('abrir-menu'); 
});

overlay.addEventListener('click', ()=>{
    menu.classList.remove('abrir-menu'); // Fecha o menu
    overlay.classList.remove('abrir-menu'); // Esconde o overlay
});