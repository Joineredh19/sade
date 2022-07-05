var input = document.getElementById('nombreUsuario');

function carg(elemento) {
  d = elemento.value;
  
  if(d == "4"){
    input.disabled = true;
  }else{
    input.disabled = false;
  }
}