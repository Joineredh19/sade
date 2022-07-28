<?php
$HomeController = new HomeController;
$imagenUser = $HomeController->VerUsuarioxRol($_SESSION['id']);
$USER = $imagenUser->__GET('id');

if (isset($_POST["FotoPerfil"])) {
        $imagen  = $_FILES['fotoperfil'];
        $name    = $imagen['name'];
        $url_tmp = $imagen['tmp_name'];
        
        if ($name != '' && $url_tmp != '') {
            $imageContent = addslashes(file_get_contents($_FILES['fotoperfil']['tmp_name']));

            $actualizar = mysqli_query($conn, "UPDATE tusuarios SET
            Imagen = '$imageContent'
            WHERE id = $USER");
            ?>
            <script language="JavaScript">
                function redireccionar() {
                    window.location = "../../Views/pages/perfil.php";
                }
                setTimeout("redireccionar()", 500);
            </script>
            <?php
        }

        else{
            if($name != '' && $url_tmp == ''){
                echo "Imagen sobrepasa los 2MB";
            }
            else{
                echo "No seleccionó una imagen";
            }
            
            ?>
            <script language="JavaScript">
                function redireccionar() {
                    window.location = "../../Views/pages/perfil.php";
                }
                setTimeout("redireccionar()", 2000);
            </script>
            <?php
        }   
    }

    
/*================================================================================================*/
    $query=mysqli_query($conn, "SELECT id, Imagen FROM tusuarios 
        WHERE id = $USER");
    $dato_registro = mysqli_fetch_assoc($query);

    if($dato_registro['Imagen'] == '' OR $dato_registro['Imagen'] == NULL){
?>
    <img class="avatar border-gray" src="../../Views/Resource/img/icon.png" alt="..." style="border-top-width: 0px;margin-bottom: 25px;top: 30px;">
<?php      
    }else{
?>
    <img class="avatar border-gray" src="data:img/jpg;base64,<?php echo base64_encode($dato_registro['Imagen'])?>" alt="..." style="border-top-width: 0px;margin-bottom: 25px;top: 30px;">
<?php
    }
?>
<!--===============================================================================================-->