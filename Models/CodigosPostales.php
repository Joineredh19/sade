<?php 
class CodigosPostales
{
    private $id;
    private $CodigoPostal;
    private $Ciudades_id;

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