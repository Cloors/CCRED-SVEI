<?php 
	require_once("class/config.php");

	if(isset($_SESSION["backend_id"])){
		if(isset($_POST["grabar"]) and $_POST["grabar"]=="si"){
			require_once("class/userModulo.php");

			$usuario = new Usuarios();

			$usuario->agregar_usuario();
			exit();
		}
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Agregar Usuario</title>
	<?php require_once("head.php") ?>
</head>
<body>
	
	<div class="container-fluid">
		<?php require_once("menu_principal.php"); ?>

		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-3">
					<?php require_once("menu_lateral.php"); ?>
				</div>
				<div class="col-sm-8">
					<div class="panel-usuario">
						<ol class="breadcrumb">
							<li><a href="<?php echo Conectar::ruta();?>home.php"><span class="glyphicon glyphicon-home" aria-hidden="true"> </span> Principal</a></li>
							<li><a href="<?php echo Conectar::ruta();?>usuarios.php"><span class="glyphicon glyphicon-user" aria-hidden="true"> </span> Usuarios</a></li>
							<li><a href="<?php echo Conectar::ruta();?>agregar_usuario.php"><span class="glyphicon glyphicon-user" aria-hidden="true"> </span> Agregar Usuario</a></li>
						</ol>
					</div><!--.panel-usuario-->

					<?php 

						if(isset($_GET["m"])){
							switch ($_GET["m"]) {
								case '1';
								?>
								<h2>Los campos están vacíos</h2>
								<?php
								break;
								
								case "2";
								?>
								<h2>El usuario se ha agregado satisfactoriamente!</h2>
								<?php
								break;
							}
						}

					 ?>

					<div class="panel-default">
						<div class="panel-heading">
							<h3 class="panel-title"><span class="glyphicon glyphicon-user" aria-hidden="true"> </span> Registro de nuevo usuario</h3>
						</div>

						<div class="panel-body">
							<form action="" method="post" class="form-horizontal">
								<div class="form-group">
									<label for="" class="col-sm-2 control-label">Cédula</label>
									<div class="col-sm-6">
										<input type="text" name="cedula" class="form-control" placeholder="Ingrese su cedula">
									</div>
								</div>

								<div class="form-group">
									<label for="" class="col-sm-2 control-label">Nombres</label>
									<div class="col-sm-6">
										<input type="text" name="nombre" class="form-control" placeholder="Ingrese su nombre">
									</div>
								</div>

								<div class="form-group">
									<label for="" class="col-sm-2 control-label">Cargo</label>
									<div class="col-sm-6">
										<input type="text" name="cargo" class="form-control" placeholder="Ingrese su cargo">
									</div>
								</div>

								<div class="form-group">
									<label for="" class="col-sm-2 control-label">Usuario</label>
									<div class="col-sm-6">
										<input type="text" name="usuario" class="form-control" placeholder="Ingrese su usuario">
									</div>
								</div>

								<div class="form-group">
									<label for="" class="col-sm-2 control-label">Password</label>
									<div class="col-sm-6">
										<input type="text" name="password" class="form-control" placeholder="Ingrese su password">
									</div>
								</div>

								<div class="form-group">
									<label for="" class="col-sm-2 control-label">Repita Password</label>
									<div class="col-sm-6">
										<input type="text" name="password2" class="form-control" placeholder="Repita su password">
									</div>
								</div>

								<div class="form-group">
									<label for="" class="col-sm-2 control-label">Pregunta secreta</label>
									<div class="col-sm-6">
										<select name="pregunta" class="form-control" id="">
											<option value="0">SELECCIONE</option>
											<option value="NOMBRE DE MASCOTA">NOMBRE DE MASCOTA</option>
											<option value="NOMBRE DE LA MADRE">NOMBRE DE LA MADRE</option>
											<option value="MEJOR AMIGO DE LA INFANCIA">MEJOR AMIGO DE LA INFANCIA</option>
											<option value="EQUIPO DE FUTBOL FAVORITO">EQUIPO DE FUTBOL FAVORITO</option>
											<option value="NOMBRE DE TU MEJOR PROFESOR">NOMBRE DE TU MEJOR PROFESOR</option>
										</select>
									</div>
								</div>

								<div class="form-group">
									<label for="" class="col-sm-2 control-label">Respuesta secreta</label>
									<div class="col-sm-6">
										<input type="text" name="respuesta" class="form-control" placeholder="Ingrese su espuesta">
									</div>
								</div>

								<div class="form-group">
									<label for="" class="col-sm-2 control-label">Nivel de acceso</label>
									<div class="col-sm-6">
										<select name="nivel" id="form-control">
											<option value="0">SELECCIONE</option>
											<option value="ADMINISTRADOR">ADMINISTRADOR</option>
											<option value="ASISTENTE">ASISTENTE</option>
										</select>
									</div>
								</div>
								<input type="hidden" name="grabar" value="si">

								<button class="btn btn-default col-sm-offset-2">REGISTRAR</button>
							</form>
						</div><!--.panel-body-->
					</div>
				</div>
			</div><!--.row-->
		</div><!--.container-fluid-->
	</div>

	<?php require_once("footer.php") ?>

</body>
</html>

<?php 
	}else{
		header("Location:".Conectar::ruta()."index.php");
	}
 ?>