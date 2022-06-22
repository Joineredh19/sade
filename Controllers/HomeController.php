<?php 
spl_autoload_register(function($nombreClase)
{
	//require_once '../../Models/Entity/' .$nombreClase. '.php';
	require_once '../../Models/' .$nombreClase. '.php';
	 //require_once '../../Models/COM.php';}
	// require_once '../../Lib/dompdf/autoload.inc.php';
});



	class HomeController
	{
		private $model;

		public function __CONSTRUCT() {
		}

		public function AgregarUsuario($IdAdmision, $Condicion, $FechaAccidente, $HoraAccidente, $Nat_Evento, $Municipio, $Terrorista,$Otro,$Cual, $Dptoaccidente,$Mpioaccidente, $Relato,$EstadoAseguramiento,$MarcaCarro, $Placa, $Tiposervicio,$IntervencionAutoridad, $CobroExedentePoliza, $Aseguradora, $PolizaNo, $PolizaDesde, $PolizaHasta, $ap1Conductor, $ap2Conductor, $nom1Conductor, $nom2Conductor, $TipoDocConductor, $CC_Conductor, $Direccion_Conductor, $Tel_Conductor, $Dpto_Conductor, $Ciudad_Condutor, $ap1propietario, $ap2propietario, $nom1propietario, $nom2propietario, $direccionpropietario, $telefonopropietario, $Dptopropietario, $Mpiopropietario, $TipoDocpropietario, $NoDocpropietario, $DireccionAccidente, $ZonaAccidente, $Folios)
		{
			$model = new UsuarioModel();
			$var = $model->Agregar($IdAdmision, $Condicion, $FechaAccidente, $HoraAccidente, $Nat_Evento, $Municipio, $Terrorista,$Otro,$Cual, $Dptoaccidente,$Mpioaccidente, $Relato,$EstadoAseguramiento,$MarcaCarro, $Placa, $Tiposervicio,$IntervencionAutoridad, $CobroExedentePoliza, $Aseguradora, $PolizaNo, $PolizaDesde, $PolizaHasta, $ap1Conductor, $ap2Conductor, $nom1Conductor, $nom2Conductor, $TipoDocConductor, $CC_Conductor, $Direccion_Conductor, $Tel_Conductor, $Dpto_Conductor, $Ciudad_Condutor, $ap1propietario, $ap2propietario, $nom1propietario, $nom2propietario, $direccionpropietario, $telefonopropietario, $Dptopropietario, $Mpiopropietario, $TipoDocpropietario, $NoDocpropietario, $DireccionAccidente, $ZonaAccidente, $Folios);
			return $var;
		}


	}