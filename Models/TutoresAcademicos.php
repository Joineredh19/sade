<?php
class TutoresAcademicos
{
    private $id;
    private $CalleyNum;
    private $Usuarios_id;
    private $Colonias_id;
    private $TTutoresAcademicos_id;

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