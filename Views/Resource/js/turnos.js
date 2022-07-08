$(document).ready(function(){

    $.ajax({
        type: 'POST',
        url: '../../Actions/Turnos/Turnos.php',
        data: {'peticion': 'Turno'}    
    })
    .done(function(listar_turno){
        $('#seleturno').html(listar_turno)
    })
    .fail(function(){
        alert('Error')
    })
});