
$(document).ready(function(){

$.ajax({
    type: 'POST',
    url: '../../Actions/Direccion/Pais.php',
    data: {'peticion': 'Pais'}    
})
.done(function(listar_pais){
    $('#selepaises').html(listar_pais)
})
.fail(function(){
    alert('Error')
})

$( '#selepaises').on('change',function(){
    var Id = $('#selepaises').val()
    $.ajax({
    type: 'POST',
    url: '../../Actions/Direccion/estado.php',
    data: {'Id': Id}    
})
.done(function(listar_pais){
    $('#seleestados').html(listar_pais)
})
.fail(function(){
    alert('Error')
})
})


$( '#seleestados').on('change',function(){
    var Id = $('#seleestados').val()
    $.ajax({
    type: 'POST',
    url: '../../Actions/Direccion/ciudad.php',
    data: {'Id': Id}    
})
.done(function(listar_pais){
    $('#seleciudades').html(listar_pais)
})
.fail(function(){
    alert('Error')
})
})
//
$( '#seleciudades').on('change',function(){
    var Id = $('#seleciudades').val()
    $.ajax({
    type: 'POST',
    url: '../../Actions/Direccion/codigop.php',
    data: {'Id': Id}    
})
.done(function(listar_pais){
    $('#selepostales').html(listar_pais)
})
.fail(function(){
    alert('Error')
})
})

$( '#selepostales').on('change',function(){
    var Id = $('#selepostales').val()
    $.ajax({
    type: 'POST',
    url: '../../Actions/Direccion/colonia.php',
    data: {'Id': Id}    
})
.done(function(listar_pais){
    $('#selecolonia').html(listar_pais)
})
.fail(function(){
    alert('Error')
})
})



})
