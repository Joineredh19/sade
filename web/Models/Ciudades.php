<?php 
class Ciudades
{
    private $id;
    private $Ciudad;
    private $Estados_id;
    

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