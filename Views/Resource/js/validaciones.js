var input = document.getElementById('nombreUsuario');

function carg(Roles) {
  d = Roles.value;
  
  if(d == "4"){
    input.disabled = true;
  }else{
    input.disabled = false;
  }
}