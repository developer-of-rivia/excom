document.addEventListener('DOMContentLoaded', () => {



	// модалки
	const btns = document.querySelectorAll('.popup-link');
	const modalOverlay = document.querySelector('.modal-overlay ');
	const modals = document.querySelectorAll('.modal');
	const close = document.querySelector('.modal-close');

	btns.forEach((el) => {
		el.addEventListener('click', (e) => {
			let path = e.currentTarget.getAttribute('data-path');

			modals.forEach((el) => {
				el.classList.remove('modal--visible');
			});

			document.querySelector(`[data-target="${path}"]`).classList.add('modal--visible');
			modalOverlay.classList.add('modal-overlay--visible');
		});
	});

	modalOverlay.addEventListener('click', (e) => {
		console.log(e.target);

		if (e.target == modalOverlay) {
			modalOverlay.classList.remove('modal-overlay--visible');
			modals.forEach((el) => {
				el.classList.remove('modal--visible');
			});
		}
	});

	close.addEventListener('click', (e) => {
		console.log(e.target);

		if (e.target == close) {
			modalOverlay.classList.remove('modal-overlay--visible');
			modals.forEach((el) => {
				el.classList.remove('modal--visible');
			});
		}
	});






	// Табы
	var tabNavs = document.querySelectorAll(".nav-tab");
	var tabPanes = document.querySelectorAll(".tab-pane");

	for (var i = 0; i < tabNavs.length; i++) {
		tabNavs[i].addEventListener("click", function(e){
			e.preventDefault();
			var activeTabAttr = e.target.getAttribute("data-tab");

			for (var j = 0; j < tabNavs.length; j++) {
			var contentAttr = tabPanes[j].getAttribute("data-tab-content");

			if (activeTabAttr === contentAttr) {
				tabNavs[j].classList.add("active");
				tabPanes[j].classList.add("active"); 
			} else {
				tabNavs[j].classList.remove("active");
				tabPanes[j].classList.remove("active");
			}
			};
		});
	}




	const swiper = new Swiper('.gallery__swiper', {
		// loop: true,
		centeredSlides: true,
		slidesPerView: 'auto',
		simulateTouch: false,
		initialSlide: 1,

		
		pagination: {
		  el: '.swiper-pagination',
		},
	  
		navigation: {
		  nextEl: '.swiper-button-next',
		  prevEl: '.swiper-button-prev',
		},
	});







	const swiper2 = new Swiper(".mySwiper", {
		spaceBetween: 10,
		slidesPerView: 4,
		freeMode: true,
		watchSlidesProgress: true,
	});
	const swiper3 = new Swiper(".mySwiper2", {
		spaceBetween: 10,
		navigation: {
		  nextEl: ".swiper-button-next",
		  prevEl: ".swiper-button-prev",
		},
		thumbs: {
		  swiper: swiper2,
		},
	});





})