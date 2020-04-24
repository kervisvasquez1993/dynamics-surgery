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
