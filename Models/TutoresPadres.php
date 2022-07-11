<?php 
class TutoresPadres
{
    private $id;
    private $CalleyNum;
    private $Usuarios_id;
    private $Colonias_id;
    private $TTutoresPadres_id;

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