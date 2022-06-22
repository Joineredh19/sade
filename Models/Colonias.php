<?php 
class Colonias
{
    private $id;
    private $Colonia;
    private $CodigosPostales_id;

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