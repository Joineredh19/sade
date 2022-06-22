<?php
class BitacorasAlumnos
{
    private $id;
    private $HoraEntrada;
    private $HoraSalids;
    private $Observacion;
    private $DatosAlumnos_id;

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