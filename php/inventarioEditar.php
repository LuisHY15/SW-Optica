<?php

if ( isset($_POST['articulo']) ){

	$nombre 		    = mysql_real_escape_string($_POST['articulo']);
	$tipo 		    	= mysql_real_escape_string($_POST['marca']);
	$precio  			= mysql_real_escape_string($_POST['tipo']);
	$stock  	     	= mysql_real_escape_string($_POST['stock']);
	$categoria      	= mysql_real_escape_string($_POST['precio']);
	$descripcion  	    = mysql_real_escape_string($_POST['precioventa']);
	$observaciones  	= mysql_real_escape_string($_POST['observaciones']);

	if ( mysql_query("") ){
		$errorMsg = '<div class="alert alert-success">
				<i class="fa fa-check"></i> Se ha agregado correctamente.
			</div>';
	} else {
		$errorMsg = '<div class="alert alert-danger">
			<i class="fa fa-times"></i> Error, intenta nuevamente.
		</div>';
	}

}

?>
		<section class="panel panel-default">
			<header class="panel-heading">
				<div class="pull-right">
					<a href="admin.php?m=inventario" class="return"><i class="fa fa-mail-reply"></i> Regresar</a>
				</div>
				<i class="fa fa-file-text-o"></i> Editar Articulo
			</header>
			<div class="panel-body">
				<form class="bs-example form-horizontal" action="" method="post">
					<?php echo $errorMsg; ?>
					<div class="row">
						<div class="col-md-12 col-lg-6">
							<div class="form-group">
								<label class="col-lg-3 control-label">Nombre</label>
								<div class="col-lg-9"><input type="text" name="nombre" class="form-control" placeholder=""></div>
							</div>
						</div>
						<div class="col-md-12 col-lg-6">
							<div class="form-group">
								<label class="col-lg-3 control-label">Tipo</label>
								<div class="col-lg-9">
									<select class="form-control" name="tipo">
										<option></option>
										<option>Servicio</option>
										<option>Producto</option>
									</select>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6 col-lg-6">
							<div class="form-group">
								<label class="col-lg-3 control-label">Precio</label>
								<div class="col-lg-3"><input type="text" name="precio" class="form-control" placeholder=""></div>

								<label class="col-lg-3 control-label">Stock</label>
								<div class="col-lg-3"><input type="text" name="stock" class="form-control" placeholder=""></div>
							</div>
						</div>
						<div class="col-md-6 col-lg-6">
							<label class="col-lg-3 control-label">Categoria</label>
								<div class="col-lg-8">
									<select class="form-control" name="categoria">
										<option></option>
										<option>Armazones</option>
										<option>Material Optico</option>
										<option>Lentes de contacto</option>
										<option>Bases</option>
									</select>
								</div>
								<div class="col-lg-1">
									<a href="" class="btn btn-sm btn-info"><i class="fa fa-plus icon"></i></a>
								</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label class="col-lg-3 control-label">Descripcion</label>
								<div class="col-lg-9"><input type="text" name="descripcion" class="form-control" style="height:50px;" placeholder=""></div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label class="col-lg-3 control-label">Observaciones</label>
								<div class="col-lg-9"><textarea class="form-control" name="observaciones" style="height:50px;" placeholder=""></textarea></div>
							</div>
						</div>
					</div>
					<div class="line line-dashed line-lg pull-in"></div>
					<div class="form-group text-right">
						<div class="col-lg-12"> 
							<button type="submit" class="btn btn-sm btn-success"><i class="fa fa-check icon"></i> Agregar</button>
							<a href="admin.php?m=stock" class="btn btn-sm btn-danger"><i class="fa fa-times icon"></i> Cancelar</a>
						</div>
					</div>
				</form>
			</div>
		</section>
