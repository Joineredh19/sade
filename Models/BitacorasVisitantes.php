<?php
class BitacorasVisistantes
{
    private $id;
    private $HoraEntrada;
    private $HoraSalida;
    private $Observacion;
    private $Visitantes_id;

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