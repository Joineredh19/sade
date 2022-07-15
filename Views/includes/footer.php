<footer class="footer footer-black  footer-white ">
        <div class="container-fluid">
          <div class="row">
            <nav class="footer-nav">
            
            </nav>         
            <div class="credits ml-auto">
            <link rel="icon" type="image/png" href="../Resource/img/SLALogo.png">
              <img ALIGN=right src="../Resource/img/SLALogo.png" width="50px" height="50px">
           <!--   <img ALIGN=right src="../Resource/img/CUCyUDGLogo.png" width="" height="50px" style="margin-right:15px"> -->
              <span class="copyright" style="margin-top:10px">
                © <script>
                  document.write(new Date().getFullYear())
                </script>, Derechos reservados <i class=""></i>- Softwarela.org
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
  <script src="../Resource/js/paper-dashboard.min.js?v=2.0.1" type="text/javascript"></script>
  <script src="../Resource/css/demo/demo.js"></script>
  <script src="../Resource/js/paises.js"></script>
  <script src="../Resource/js/tutores.js"></script>
  <script src="../Resource/js/validaciones.js"></script>
  <script src="../Resource/js/turnos.js"></script>
  <script src="../Resource/js/Visitantes.js"></script>
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
const fileUploader = document.getElementById('file-uploader');
const feedback = document.getElementById('feedback');
const progress = document.getElementById('progress');

const reader = new FileReader();

fileUploader.addEventListener('change', (event) => {
  const files = event.target.files;
  const file = files[0];
  reader.readAsDataURL(file);
  
  reader.addEventListener('progress', (event) => {
    if (event.loaded && event.total) {
      const percent = (event.loaded / event.total) * 100;
      progress.value = percent;
      document.getElementById('progress-label').innerHTML = Math.round(percent) + '%';
      
      if (percent === 100) {
        
        let msg = `<br><span style="color:green;">Imagen <u><b>${file.name}</b></u> subida exitosamente.</span>`;
        feedback.innerHTML = msg;
      }
    }
  });
});

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
  $("#tableSearch").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>

<script>
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
</script>


<script>
$(document).ready(function(){

$.ajax({
    type: 'POST',
    url: '../../Actions/Turnos/Turnos.php',
    data: {'peticion': 'Turno'}    
})
.done(function(Turnos){
    $('#SelectTurno').html(Turnos)
})
.fail(function(){
    alert('Error')
})
})

</script>
