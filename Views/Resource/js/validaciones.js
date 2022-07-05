function desabilitar()
{
    var rangoSinPrecio = document.getElementById('Roles').checked;
    var Estudiante = document.getElementById('Estudiante');
    if (rangoSinPrecio === true) {
        precio.disabled = true;
    } else if (rangoSinPrecio === false) {
        precio.disabled = false;
    }
}