<?php 
class TrabajadoresModel
{
    private $id;
    private $Codigo;
    private $CalleyNum;
    private $TUsuarios_id;
    private $TColonias_id;

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