padre_title = document.querySelectorAll('#padre-title'),
mostrarMas = document.querySelector('.mostrarMas')
  
  

  
  var arr = Array.from(padre_title)
  var i = 0
  var longitud = 5
  
 
  
  while(i <= longitud)
  {
    arr[i].classList.remove('ocultar-titulo')
    i++
    
  }
 

