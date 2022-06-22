<?php 
class EmailsAlumnos
{
    private $id;
    private $Email;
    private $DatosAlumnos_id;

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