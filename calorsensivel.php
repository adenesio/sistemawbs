<?PHP
	$calorSensivel = $_GET['calorSensivel'];
	$massa = $_GET['massa'];
	$calorEspecifico = $_GET['calorEspecifico'];
	$temperaturaFinal = $_GET['temperaturaFinal'];
	$temperaturaInicial = $_GET['temperaturaInicial'];


	if ($calorSensivel==""){
 		$deltaT = $temperaturaFinal - $temperaturaInicial;
 		$calorSensivel = $massa * $calorEspecifico * $deltaT;
 		echo "A quantidade de calor sensível é: $calorSensivel (ºC)";
 	}
	if (($_GET['massa'])==""){
		$deltaT = $temperaturaFinal - $temperaturaInicial;
 		$massa = ($calorSensivel / ($calorEspecifico * $deltaT));
 		echo "A massa é: $massa (kg)";
 	}
	if (($_GET['calorEspecifico'])==""){
		$deltaT = $temperaturaFinal - $temperaturaInicial;
		$calorEspecifico = $calorSensivel / ($massa * $deltaT);
	}
	if (($_GET['temperaturaFinal']=="")){
		$temperaturaFinal = ($calorSensivel / ($massa * $calorEspecifico) + $temperaturaInicial);
		echo "A temperatura final é: $temperaturaFinal (ºC)";
	}
	if (($_GET['temperaturaInicial']=="")){
		$temperaturaInicial = ($calorSensivel / ($massa * $calorEspecifico) - $temperaturaInicial);
		$temperaturaInicial = $menosTemperaturaInicial * -1;
		echo "A temperatura Iniciale é: $temperaturaInical (ºC)";
	}	
?>