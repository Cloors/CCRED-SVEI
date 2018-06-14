<?php
 require_once("class/config.php");

 if(isset($_SESSION["backend_id"])){
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Home</title>
	<?php require_once("head.php");?>
</head>
<body>
	<div class="container-fluid">
		<?php require_once("menu_principal.php");?>
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-3">
					<?php require_once("menu_lateral.php");?>
				</div>
				<div class="col-sm-8">
					<h2>Sistema de control de inventarios y ventas</h2>
					<p class="justify">El inventario es uno de los factores bla bla bla</p>
				</div>

			</div><!--.row-->
		</div><!--.containter-->
		<?php require_once("footer.php");?>
	</div><!--.containder-fluid-->
</body>
</html>

<?php
	}else{
		header("Location:".Conectar::ruta()."index.php");
	}
?>