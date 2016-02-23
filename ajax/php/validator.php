<?php

if($_POST){
	
	
	$required = array('username', 'password', 'chk');
	$validation = array(
		'username' => 'Debes escribir tu Nombre de Usuario',
		'password' => 'Debes escribir tu Contraseña',
		'chk' => 'Debes Aceptar los terminos y condiciones'
	);
	$error = array();
	$inputs = array();
	
	
	foreach($required as $key){
		
		if(array_key_exists($key, $_POST)){
			
			if(empty($_POST[$key])){
				
				$error[$key] = $validation[$key];
				
			}
			
			else{
				
				$inputs[$key] = $_POST[$key];
				
			}
			
		}
		
		else{
			
			$error[$key] = $validation[$key];
			
		}
		
	}
	
	
	
	if(!empty($error)){
		
		$array = array('error' => true, 'fields' => $error);
		
	}
	else{
	
		//successful part of the code. here you process the data and you can either store it in a database, or compare it to login, or whatever you need to
		$message = '<div class="alert alert-success">El formulario se ha enviado correctamente</div>';
		$array = array('error' => false, 'message' => $message);	
		
	}
	
	
	echo json_encode($array);
	
	
	
	
	
	
	
	
}
else{
	
	header("Location: ../index.php");
	
}