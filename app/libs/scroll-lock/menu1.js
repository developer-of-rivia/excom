$(document).ready(function () {

    let burgerIcon = document.querySelector('.burger-icon');
    let closeIcon = document.querySelector('.menu__close');
    let menu = document.querySelector('.menu');
    let scrollObject = document.querySelector('.modal-overlay');

    burgerIcon.addEventListener('click', function(){
        menu.classList.add('menu--open');
        scrollLock.disablePageScroll(scrollObject);
    })
    closeIcon.addEventListener('click', function(){
        menu.classList.remove('menu--open');
        scrollLock.enablePageScroll(scrollObject);
    })
	
});