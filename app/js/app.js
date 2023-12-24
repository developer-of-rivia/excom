document.addEventListener('DOMContentLoaded', () => {

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