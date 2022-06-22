<?php 
class CalendarioIngresos
{
    private $id;
    private $Calendario;

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