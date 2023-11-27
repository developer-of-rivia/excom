// // Import vendor jQuery plugin example
// import '~/app/libs/mmenu/dist/mmenu.js'
import '../../node_modules/flowbite/dist/flowbite.min.js'


document.addEventListener('DOMContentLoaded', () => {


	var element = document.getElementById('header');
	window.addEventListener('scroll', function () {
	if (window.scrollY > 120) {
			element.classList.add("shadow-md");
		} else {
			element.classList.remove("shadow-md");
		}
	});




	//Accordeon
	var accordeonButtons = document.getElementsByClassName("accordeon-title");
	for (var i = 0; i < accordeonButtons.length; i++) {
		var accordeonButton = accordeonButtons[i];

		accordeonButton.addEventListener("click", toggleItems, false);
	}

	function toggleItems() {

		var itemClass = this.className;

		for (var i = 0; i < accordeonButtons.length; i++) {
			accordeonButtons[i].className = "accordeon-title closed";
		}

		var pannels = document.getElementsByClassName("accordeon-content");
		for (var z = 0; z < pannels.length; z++) {
			pannels[z].style.maxHeight = 0;
		}

		if (itemClass == "accordeon-title closed") {
			this.className = "accordeon-title active";
			var panel = this.nextElementSibling;
			panel.style.maxHeight = panel.scrollHeight + "px";
		}
	}




	const swiper = new Swiper('.swiper', {

		loop: true,
		slidesPerView: 3,
	  
		// If we need pagination
		pagination: {
		  el: '.swiper-pagination',
		},
	  
		// Navigation arrows
		navigation: {
		  nextEl: '.swiper-button-next',
		  prevEl: '.swiper-button-prev',
		},
	});




})
