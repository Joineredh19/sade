<?php 
class AlumnoModel
{
    private $id;
    private $FhoraEntrada;
    private $FhoraSalida;
    private $ObservacionEntrada;
    private $ObservacionSalida;
    private $Codigo;

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
