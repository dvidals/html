<style>
	h1{
		text-align:center;
	}

	table{
		background-color:#FFC;
		padding:5px;
		border:#666 5px solid;
	}
	
	.no_validado{
		font-size:18px;
		color:#F00;
		font-weight:bold;
	}
	
	.validado{
		font-size:18px;
		color:#0C3;
		font-weight:bold;
	}


</style>

<?php
	if(isset($_POST["enviando"])){
		$edad=$_POST["edad_usuario"];
		$resultado= $edad<18  ?true:false;
		if($resultado) echo "No puedes acceder.<br/>";
		else if ($edad<110) echo "Puedes acceder.<br/>";

		if($resultado && $edad<0) echo "No existen edades negativas.";
		else if($resultado && $edad>=0) echo "Eres menor de edad.";
		else if(!$resultado && $edad<=40) echo "Eres joven.";
		else if(!$resultado && $edad<=65) echo "Eres maduro.";
		else  if ($edad>65 && $edad<110)echo "Cuídate.";
		else echo "Has puesto una edad irreal."; 

	}
	
?>