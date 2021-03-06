<?php

if ( isset($_POST['nombre']) ){

	$nombre 	    = mysql_real_escape_string($_POST['nombre']);
	$privilegio 	    = mysql_real_escape_string($_POST['privilegio']);
	$usuario 	    = mysql_real_escape_string($_POST['usuario']);
    $correo         = mysql_real_escape_string($_POST['correo']);
	$password 	    = mysql_real_escape_string($_POST['password']);
	$ip = gethostbyname(gethostname());

	if ( mysql_query("INSERT INTO usuarios SET nombre='".$nombre."',privilegio='".$privilegio."',usuario='".$usuario."',correo='".$correo."',password='".$password."',ip='".$ip."',ingreso='".date("Y-m-d")."'") )
	{
		$errorMsg = '<div class="alert alert-success">
				<i class="fa fa-check"></i> Usuario agregado correctamente.
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
				<i class="fa fa-wrench"></i> Configuracion de Usuario
			</header>
			<div class="panel-body">
				<form class="bs-example form-horizontal" action="" method="post">
					<?php echo $errorMsg; ?>
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label class="col-md-3 control-label">Nombre</label>
								<div class="col-md-9"><input type="text" name="nombre" class="form-control"></div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label class="col-md-2 control-label">Usuario</label>
							    <div class="col-md-4"><input type="text" name="usuario" class="form-control"></div>
								<label class="col-md-2 control-label">Password</label>
							    <div class="col-md-4"><input type="text" name="password" class="form-control"></div>
							</div>
						</div>	
					</div>
					<div class="row">
						<div class="col-md-6" >
							<div class="form-group">
								<label class="col-md-3 control-label">Correo</label>
								<div class="col-md-9"><input type="text" name="correo" class="form-control"></div>
							</div>
						</div>
						<div class="col-md-6">
                           <div class="form-group">
                           		<label class="col-md-2 control-label">Privilegio</label>
                           		<div class="col-md-10">
                           			<select class="form-control" name="privilegio">
                           				<option>Administrador</option>
                           				<option>Usuario</option>
                           			</select>
                           		</div>
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
