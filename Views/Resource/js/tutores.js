$(document).ready(function(){

    $.ajax({
        type: 'POST',
        url: '../../Actions/Tutores/TutorAcademico.php',
        data: {'peticion': 'Academico'}    
    })
    .done(function(listar_turoreacademico){
        $('#seletutoraca').html(listar_turoreacademico)
    })
    .fail(function(){
        alert('Error')
    })
});

$(document).ready(function(){

    $.ajax({
        type: 'POST',
        url: '../../Actions/Tutores/TutorPadre.php',
        data: {'peticion': 'Pais'}    
    })
    .done(function(Listar_TutorPadre) {
        $('#selepadre').html(Listar_TutorPadre)
    })
    .fail(function(){
        alert('Error')
    })
});    