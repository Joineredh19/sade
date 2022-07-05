// Accedemos al botón
var emailInput = document.getElementById('Roles');

document.getElementById('Estudiante').addEventListener('click', function(e) {
  console.log('Vamos a habilitar el input text');
  emailInput.disabled = true;
});
