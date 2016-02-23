<!DOCTYPE html>
<html>
	<head>
		<title>Ajax</title>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="/ajax/css/bootstrap.min.css"/>
		<link rel="stylesheet" href="/ajax/css/style.css"/>
	</head>
	<body>
		<section>
			<div class="container">
				<div class="row">
					<div class="col-xs-12" id="titulo">
						<h3>Ajax Form</h3>
					</div>
					<div class="col-xs-10 col-xs-offset-1">
						<form action="php/validator.php" method="post" id="formulario">
							<div class="col-xs-4 col-xs-offset-4" id="formPart">
								<label for="username">Nombre de Usuario</label>
								<input type="text" name="username" id="username" class="form-control">
								<div class="username"></div>
							</div>
							<div class="col-xs-4 col-xs-offset-4" id="formPart">
								<label for="password">Contraseña</label>
								<input type="password" name="password" id="password" class="form-control">
								<div class="password"></div>
							</div>
							<div class="col-xs-4 col-xs-offset-4" id="formPart">
								<label><input type="checkbox" name="chk" id="chk" value="chk"> Acepto los Terminos y condiciones</label>
								<div class="chk"></div>
							</div>
							<div class="col-xs-4 col-xs-offset-4" id="formPart">
								<input type="submit" class="btn btn-primary">
							</div>
						</form>
						<div class="col-xs-4 col-xs-offset-4" id="response"></div>
					</div>
				</div>
			</div>
		</section>
		
		<script src="/ajax/js/jquery-2.2.0.min.js"></script>
		<script src="/ajax/js/bootstrap.min.js"></script>
		<script src="/ajax/js/ajax.js"></script>
		<script>
		
			$(document).ready(function(){
				
				setTimeout(function(){
					
					$('#username').focus();
					
				}, 500);
				
			});
		
		</script>
	</body>
</html>