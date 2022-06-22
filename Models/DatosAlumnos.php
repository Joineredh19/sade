<?php 
class DatosAlumnos
{
    private $id;
    private $Codigo;
    private $CalleyNum;
    private $NSeguroSocial;
    private $RFC;
    private $CURP;
    private $TipoSangre;
    private $Alergia; 
    private $TutoresAcademicos_id;
    private $TutoresPadres_id;
    private $Colonias_id;
    private $Turnos_id;
    private $CalendariosIngresos_id;
    private $Usuarios_id;

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