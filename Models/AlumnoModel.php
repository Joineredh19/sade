<?php 
class AlumnoModel
{
    private $id;
    private $Codigo;
    private $CalleyNum;
    private $Nss;
    private $Rfc;
    private $Curp;
    private $TipoSangre;
    private $Alergia;
    private $TtutoresAcademicos_id;
    private $TtutoresPadres_id;
    private $TColonias_id;
    private $Tturnos_id;
    private $TCalendariosIngresos_id;
    private $TUsuarios_id;

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
