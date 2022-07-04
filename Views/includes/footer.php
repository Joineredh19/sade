<footer class="footer footer-black  footer-white ">
        <div class="container-fluid">
          <div class="row">
            <nav class="footer-nav">
            
            </nav>
            <div class="credits ml-auto">
              <span class="copyright">
                © <script>
                  document.write(new Date().getFullYear())
                </script>, CUC <i class=""></i> Universidad de Guadalajara
              </span>
            </div>
          </div>
        </div>
      </footer>
    </div>
  </div>
  <!--   Core JS Files   -->
<script>
var myModal = document.getElementById('myModal')
var myInput = document.getElementById('myInput')

myModal.addEventListener('shown.bs.modal', function () {
  myInput.focus()
})
</script>


  <script src="../Resource/js/core/jquery.min.js"></script>
  <script src="../Resource/js/core/popper.min.js"></script>
  <script src="../Resource/js/core/bootstrap.min.js"></script>
  <script src="../Resource/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chart JS -->
  <script src="../Resource/js/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="../Resource/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../Resource/js/paper-dashboard.min.js?v=2.0.1" type="text/javascript"></script><!-- Paper Dashboard DEMO methods, don't include it in your project! -->
  <script src="../Resource/css/demo/demo.js"></script>
 
  <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/assets-for-demo/js/demo.js
      demo.initChartsPages();
    });
  </script>
  
</body>

</html>
<script>
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

</script>
<script>
$(document).ready(function(){

$.ajax({
    type: 'POST',
    url: '../../Actions/Roles/Roles.php',
    data: {'peticion': 'Roles'}    
})
.done(function(Roles){
    $('#Rol').html(Roles)
})
.fail(function(){
    alert('Error')
})
})

</script>

<script>
$(document).ready(function(){

$.ajax({
    type: 'POST',
    url: '../../Actions/Genero/Genero.php',
    data: {'peticion': 'Genero'}    
})
.done(function(Genero){
    $('#Genero').html(Genero)
})
.fail(function(){
    alert('Error')
})
})

</script>

<script>
$(document).ready(function(){

$.ajax({
    type: 'POST',
    url: '../../Actions/Genero/Genero.php',
    data: {'peticion': 'Genero'}    
})
.done(function(Genero){
    $('#Generos').html(Genero)
})
.fail(function(){
    alert('Error')
})
})

</script>

<script>
$(document).ready(function(){

$.ajax({
    type: 'POST',
    url: '../../Actions/Direccion/Pais.php',
    data: {'peticion': 'Pais'}    
})
.done(function(listar_dpto){
    $('#selepais').html(listar_pais)
})
.fail(function(){
    alert('Error')
})

$( '#selepais').on('change',function(){
    var Id = $('#selepais').val()
    $.ajax({
    type: 'POST',
    url: '../../Actions/Direccion/estado.php',
    data: {'Id': Id}    
})
.done(function(listar_pais){
    $('#seleestado').html(listar_pais)
})
.fail(function(){
    alert('Error')
})
})


})

</script>