<?php 
class Usuario
{
    private $id;
    private $Nombres;
    private $Apellidos;
    private $Email;
    private $Telefono;
    private $Status;
    private $Fecha_Alta;
    private $Roles_id;
    

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
