<?php 
class Estados
{
    private $id;
    private $Estado;
    private $Paises_id;

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