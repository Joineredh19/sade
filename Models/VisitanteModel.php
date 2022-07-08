<?php 
class VisitantesModel
{
    private $id;
    private $Codigo;
    private $Nombres;
    private $Apellidos;
    private $Email;
    private $Telefono;
    private $TAreasTrabajo_id;

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