<?PHP
	$calorLatente 			= $_GET['calor-latente'];
	$massa 					= $_GET['massa'];
	$calorLatenteDoMaterial = $_GET['calor-latente-do-material'];
	
	if (($_GET['calor-latente'])==""){
 		$calorLatente = $massa * $calorLatenteDoMaterial ;
 		echo "A quantidade de calor Latente �: $calorLatente (�C)";
 	}
	if (($_GET['massa'])==""){
 		$massa = ($calorLatente / ($calorLatenteDoMaterial));
 		echo "A massa �: $massa (kg)";
 	}
	if (($_GET['calor-latente-do-material'])==""){
		$calorLatenteDoMaterial = $calorLatente / $massa;
		echo "A quantidade de Calor Latente do Material � : $calorLatenteDoMaterial (�C)";
	}
	
?>