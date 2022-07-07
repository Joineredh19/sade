<?php 
class TutorPadreModel
{
    private $id;
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