$(document).ready(function(){

    $.ajax({
        type: 'POST',
        url: '../../Actions/Roles/Roles.php',
        data: {'peticion': 'Roles'}    
    })
    .done(function(Roles){
        $('#Roles').html(Roles)
    })
    .fail(function(){
        alert('Error')
    })
  })
 