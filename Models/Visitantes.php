<?php
class Visitantes
{
    private $id;
    private $Codigo;
    private $Nombres;
    private $Apellidos;
    private $Email;
    private $Telefono;
    private $AreasTrabajo_id;

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