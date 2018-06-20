<?php

function input($nombre,$label,$value='',$tipo='input'){

	if ($value == "") {
		if (isset($_POST[$nombre])) {
			$value = $_POST[$nombre];
		}
	}

	$control = "<input type='text' class='form-control' id='n' value='{$value}' name='{$nombre}' placeholder='{$label}'>";

	if ($tipo == 'textarea') {
		$control = "<textarea class='form-control' name='{$nombre}'  placeholder='{$nombre}'>{$value}</textarea>";
	}

	echo "
	<div class='form-group'>
	    <label for='n'>{$label}</label>
	    {$control}
	  </div>
	";
}



?>