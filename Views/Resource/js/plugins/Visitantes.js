$(document).ready(function(){

    $.ajax({
        type: 'POST',
        url: '../../Actions/Visitantes/Visitantes.php',
        data: {'peticion': 'Visitantes'}    
    })
    .done(function(listar_visitantes){
        $('#ATrabajo').html(listar_visitantes)
    })
    .fail(function(){
        alert('Error')
    })
});

$(document).ready(function(){

    $.ajax({
        type: 'POST',
        url: '../../Actions/Visitantes/Visitantes.php',
        data: {'peticion': 'Visitantes'}    
    })
    .done(function(listar_visitantes){
        $('#ATrabajo').html(listar_visitantes)
    })
    .fail(function(){
        alert('Error')
    })
});