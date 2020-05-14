// declaracion de variable
var search = document.querySelector(".content-menu2"),
  formBuscar = document.querySelector(".flex-seach"),
  iconoBuscar = document.querySelector(".search");

// llamado del evento
document.addEventListener("DOMContentLoaded", materialize);
iconoBuscar.addEventListener("click", buscador);
search.addEventListener("mouseleave", salir);
function buscador(e) {
  e.preventDefault();
  iconoBuscar.classList.add("ocultar");
  formBuscar.classList.remove("ocultar");
}

function salir(e) {
  e.preventDefault;
  iconoBuscar.classList.remove("ocultar");
  formBuscar.classList.add("ocultar");
}

function materialize() {
  var elems = document.querySelectorAll(".sidenav");
  var instances = M.Sidenav.init(elems);
}


// menu pegajoso

var stickymenu = document.querySelector('.menu-principal')
console.log(stickymenu)
stickymenuoffset = stickymenu.offsetTop;
window.addEventListener("scroll", function(t) {
    requestAnimationFrame(function() {
        window.pageYOffset > stickymenuoffset ? stickymenu.classList.add("stickymenu") : stickymenu.classList.remove("stickymenu")
    })
});

// carousal



// slider

var swiper = new Swiper('.swiper-container', {
  slidesPerView: 1,
  spaceBetween: 10,
  // init: false,
  pagination: {
    el: '.swiper-pagination',
    clickable: true,
  },
  breakpoints: {
    640: {
      slidesPerView: 2,
      spaceBetween: 20,
    },
    992: {
      slidesPerView: 3,
      spaceBetween: 20,
    },
    1400: {
      slidesPerView: 4,
      spaceBetween: 30,
    },
  },
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
 
});

var swiper = new Swiper('.kervis-slider', {
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
});