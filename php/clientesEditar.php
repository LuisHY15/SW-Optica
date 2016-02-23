<?php

$idcliente = mysql_real_escape_string($_GET['id']);

if ( isset($_POST['nombre']) ){

	$nombre 	    = mysql_real_escape_string($_POST['nombre']);
	$correo 	    = mysql_real_escape_string($_POST['correo']);
	$nacimiento     = mysql_real_escape_string($_POST['nacimienti']);
	$sexo  	        = mysql_real_escape_string($_POST['sexo']);
	$edad  	        = mysql_real_escape_string($_POST['edad']);
	$domicilio  	= mysql_real_escape_string($_POST['domicilio']);
	$telefono  		= mysql_real_escape_string($_POST['telefono']);
	$colonia  	    = mysql_real_escape_string($_POST['Colonia']);
	$cp  		    = mysql_real_escape_string($_POST['cp']);
	$celular  	    = mysql_real_escape_string($_POST['celular']);

	if ( mysql_query("UPDATE clientes SET nombre='".$nombre."',fnacimiento='".$nacimiento."',correo='".$correo."',sexo='".$sexo."',edad='".$edad."',domicilio='".$domicilio."',colonia='".$colonia."',cp='".$cp."',telefono='".$telefono."',celular='".$celular."'") ){
		$errorMsg = '<div class="alert alert-success">
				<i class="fa fa-check"></i> Cliente agregado correctamente.
			</div>';
	} else {
		$errorMsg = '<div class="alert alert-danger">
			<i class="fa fa-times"></i> Error, intenta nuevamente.
		</div>';
	}

	$data = mysql_fetch_object(mysql_query("SELECT * FROM clientes WHERE idcliente ='".$idcliente."' LIMIT 1"));

}

?>

<script type="text/javascript">
     $(function () {
     $('#datetimepicker2').datetimepicker({
           locale: 'ru'
        });
    });
</script>

		<section class="panel panel-default">
			<header class="panel-heading">
				<div class="pull-right">
					<a href="admin.php?m=clientes" class="return"><i class="fa fa-mail-reply"></i> Regresar</a>
				</div>
				<i class="fa fa-user icon"></i> Editar Cliente
			</header>
			<div class="panel-body">
				<form class="bs-example form-horizontal" action="" method="post">
					<?php echo $errorMsg; ?>
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label class="col-lg-3 col-md-3 control-label">Nombre</label>
								<div class="col-lg-9 col-md-9"><input type="text" name="nombre" value="<?php echo $data->nombre; ?>" class="form-control" placeholder=""></div>
							</div>
							<div class="form-group">
								<label class="col-lg-3 col-md-3 control-label">Correo</label>
								<div class="col-lg-9 col-md-9"><input type="text" name="correo" value="<?php echo $data->correo; ?>"class="form-control" placeholder=""></div>
							</div>
						</div>	
						<div class="col-md-6">
							<div class="form-group">
								<label class="col-lg-3 col-md-3 control-label">Fecha de Nacimiento</label>
								<div class="col-lg-9 col-md-9 "><input type="text" name="nacimiento" value="<?php echo $data->nacimiento; ?>" class="form-control" placeholder=""></div>
							</div>
							 <div class="form-group">
								<label class="col-lg-3 col-md-3 control-label">Sexo</label>
								<div class="col-lg-4 col-md-3">
									<select class="form-control" name="sexo">
										<option></option>
										<option>Masculino</option>
										<option>Femenino</option>
									</select>
								</div>
								<label class="col-lg-2 col-md-3 control-label">Edad</label>
								<div class="col-lg-3 col-md-3"><input type="text" name="edad" value="<?php echo $data->edad; ?>" class="form-control" placeholder=""></div>
							</div>
						</div>	
					</div>
					<div class="row">
						<div class="col-md-6" >
							<div class="form-group">
								<label class="col-lg-3 col-md-3 control-label">Domicilio</label>
								<div class="col-lg-9 col-md-9"><input type="text" name="domicilio" value="<?php echo $data->domicilio; ?>" class="form-control" placeholder=""></div>
							</div>
							<div class="form-group">
								<label class="col-lg-3 col-md-3 control-label">Telefono</label>
								<div class="col-lg-9 col-md-9 "><input type="text" name="telefono" value="<?php echo $data->telefono; ?>" class="form-control" placeholder=""></div>
							</div>
						</div>
						<div class="col-md-6">
                            <div class="form-group">
								<label class="col-lg-3 col-md-3 control-label">Colonia</label>
								<div class="col-lg-3 col-md-3"><input type="text" name="colonia" value="<?php echo $data->colonia; ?>" class="form-control" placeholder=""></div>
								<label class="col-lg-3 col-md-3 control-label">C.P.</label>
								<div class="col-lg-3 col-md-3"><input type="text" name="cp"  value="<?php echo $data->cp; ?>" class="form-control" placeholder=""></div>
							</div>
							<div class="form-group">
								<label class="col-lg-3 col-md-3 control-label">Celular</label>
								<div class="col-lg-9  col-md-9 "><input type="text" name="celular" value="<?php echo $data->celular; ?>" class="form-control" placeholder=""></div>
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
