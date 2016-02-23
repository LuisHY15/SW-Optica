<?php

$idcategoria = mysql_real_escape_string($_GET['id']);

if ( isset($_POST['nombre']) ){

	$nombre 	    = mysql_real_escape_string($_POST['nombre']);

	if ( mysql_query("UPDATE categoria SET nombre='".$nombre."' WHERE idcategoria='".$idcategoria."'") )
	{
		$errorMsg = '<div class="alert alert-success">
				<i class="fa fa-check"></i> Categoria editada correctamente.
			</div>';
	} else {
		$errorMsg = '<div class="alert alert-danger">
			<i class="fa fa-times"></i> Error, intenta nuevamente.
		</div>';

	}
}
$data = mysql_fetch_object(mysql_query("SELECT * FROM categoria WHERE idcategoria='".$idcategoria."' LIMIT 1"));
?>	


	<section class="panel panel-default">
			<header class="panel-heading">
				<i class="fa fa-wrench icon"></i> Editar Categoria
			</header>
			<div class="panel-body">
				<form class="bs-example form-horizontal" action="" method="post">
					<?php echo $errorMsg; ?>
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<label class="col-md-2 control-label">Nombre</label>
								<div class="col-md-10"><input type="text" name="nombre" class="form-control" value="<?php echo $data->nombre; ?>" placeholder=""></div>
							</div>
						</div>	
					</div>
					<div class="line line-dashed line-lg pull-in"></div>
					<div class="form-group text-right">
						<div class="col-lg-12"> 
							<button type="submit" class="btn btn-sm btn-success"><i class="fa fa-check icon"></i> Agregar</button>
							<a href="admin.php?m=clientes" class="btn btn-sm btn-danger"><i class="fa fa-times icon"></i> Cancelar</a>
						</div>
					</div>
				</form>
			</div>
		</section>
