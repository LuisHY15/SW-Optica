<?php

$idusuario = mysql_real_escape_string($_GET['id']);

if ( isset($_POST['nombre']) ){

	$nombre 	    = mysql_real_escape_string($_POST['nombre']);
	$privilegio 	= mysql_real_escape_string($_POST['privilegio']);
	$usuario 	    = mysql_real_escape_string($_POST['usuario']);
    $correo         = mysql_real_escape_string($_POST['correo']);
	$password 	    = mysql_real_escape_string($_POST['password']);
	$ip = gethostbyname(gethostname());

	if ( mysql_query("UPDATE usuarios SET nombre='".$nombre."',privilegio='".$privilegio."',usuario='".$usuario."',correo='".$correo."',password='".$password."',ip='".$ip."',ingreso='".date("Y-m-d")."',WHERE idusuario='".$idusuario."'") )
	{
		$errorMsg = '<div class="alert alert-success">
				<i class="fa fa-check"></i> Usuario editado correctamente.
			</div>';
	} else {
		$errorMsg = '<div class="alert alert-danger">
			<i class="fa fa-times"></i> Error, intenta nuevamente.
		</div>';

	}
}

$data = mysql_fetch_object(mysql_query("SELECT * FROM usuarios WHERE idusuario='".$idusuario."' LIMIT 1"));
?>	

	<section class="panel panel-default">
			<header class="panel-heading">
				<i class="fa fa-wrench"></i> Editar Usuario
			</header>
			<div class="panel-body">
				<form class="bs-example form-horizontal" action="" method="post">
					<?php echo $errorMsg; ?>
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label class="col-md-3 control-label">Nombre</label>
								<div class="col-md-9"><input type="text" name="nombre"  value="<?php echo $data->nombre; ?>" class="form-control"></div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label class="col-md-2 control-label">Usuario</label>
							    <div class="col-md-4"><input type="text" name="usuario" value="<?php echo $data->usuario; ?>" class="form-control"></div>
								<label class="col-md-2 control-label">Password</label>
							    <div class="col-md-4"><input type="text" name="password" value="<?php echo $data->password; ?>" class="form-control"></div>
							</div>
						</div>	
					</div>
					<div class="row">
						<div class="col-md-6" >
							<div class="form-group">
								<label class="col-md-3 control-label">Correo</label>
								<div class="col-md-9"><input type="text" name="correo" value="<?php echo $data->correo; ?>" class="form-control"></div>
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
