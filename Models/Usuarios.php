<?php 
class Usuarios
{
    private $id;
    private $Nombres;
    private $Apellidos;
    private $Email;
    private $Contrasenia;
    private $Telefono;
    private $Status;
    private $FechaAlta;
    private $TRoles_id;
    private $tgenero_id;
    private $FechaNacimiento;
    private $genero;
    private $rol;
    private $TUsuarios_id;
    private $TTutoresPadres_id;
    private $TTutoresAcademicos_id;
    

    public function __GET($k)
    {
        return $this->$k;
    }

    public function __SET($k,$v)
    {
        return $this->$k = $v;
    }
}
?>
