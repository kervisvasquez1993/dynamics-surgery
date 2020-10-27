
// declaracion de variable
var search = document.querySelector(".content-menu2"),
  formBuscar = document.querySelector(".flex-seach"),
  iconoBuscar = document.querySelector(".search"),
  iconoBuscar2 = document.querySelector(".search-2"),
  formMobile = document.querySelector(".form-mobile"),
  flexIconoMobile = document.querySelector(".flex-icono-mobile"),
  btnAtras = document.querySelector('.blue-content'),
  ifSliderr = document.querySelector('.swiper-container'),
  ifSliderr2 = document.querySelector('.kervis-slider'),
  //seccion de las categorias
  categoryid = document.querySelectorAll('.category_id'),
  titleCategory = document.getElementById('title_Category')
  
  


  //category

  if(categoryid && titleCategory)
  {
    
    dataTitleCat = titleCategory.dataset.title
    arrCategoryId = Array.from(categoryid);
    arrCategoryId.forEach((element)=>{ 
      menuCategory = element.dataset.category
      if(menuCategory === dataTitleCat)
      {
         element.classList.add('active_category')
      }
    });

  }
  
  
  

// llamado del evento
if(iconoBuscar)
{
document.addEventListener("DOMContentLoaded", materialize);

iconoBuscar.addEventListener("click", buscador);
search.addEventListener("mouseleave", salir);
iconoBuscar2.addEventListener('click', mostrarBuscador),
btnAtras.addEventListener('click', cerrarBuscador)
function mostrarBuscador(e){
    e.preventDefault()
    formMobile.classList.remove("ocultar-2")
    flexIconoMobile.classList.add("ocultar-2")

}
function cerrarBuscador(e){
  e.preventDefault();
  formMobile.classList.add("ocultar-2")
  flexIconoMobile.classList.remove("ocultar-2")
  
}
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

}

// menu pegajoso

var stickymenu = document.querySelector('.menu-principal')
if(stickymenu)
{
stickymenuoffset = stickymenu.offsetTop;
window.addEventListener("scroll", function(t) {
    requestAnimationFrame(function() {
        window.pageYOffset > stickymenuoffset ? stickymenu.classList.add("stickymenu") : stickymenu.classList.remove("stickymenu")
    })
});
}
// carousal



// slider

if(ifSliderr)
{
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
}
if(ifSliderr2)
{
var swiper = new Swiper('.kervis-slider', {
  
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
});
console.log('hola')
}


var swiper3 = new Swiper('.swiper-container3', {
  direction: 'vertical',
  pagination: {
    el: '.swiper-pagination',
    clickable: true,
  },
});