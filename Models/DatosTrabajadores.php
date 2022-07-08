<?php 
class DatosTrabajadores
{
    private $id;
    private $Codigo;
    private $CalleyNum;
    private $Usuarios_id;
    private $Colonias_id;
    

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