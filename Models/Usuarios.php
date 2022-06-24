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
    private $Rolesid;
    

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
