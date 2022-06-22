<?php 
class AreasTrabajo
{
    private $id;
    private $Area;
    private $Usuarios_id;

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