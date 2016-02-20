<section class="panel panel-default pos-rlt clearfix">

	<header class="panel-heading"> <i class="fa fa-list"></i> Clientes</header>
	
	<div class="row wrapper">
		<div class="col-sm-9 m-b-xs">
			<a href="admin.php?m=clientesAgregar" class="pull-left btn btn-sm btn-success"><i class="fa fa-plus"></i> Agregar Cliente</a>
		</div>
		<div class="col-sm-3">
			<div class="input-group">
				<input type="text" class="input-sm form-control" placeholder="Buscar"> <span class="input-group-btn"> <button class="btn btn-sm btn-default" type="button"> <i class="fa fa-search"></i> </button> </span>
			</div>
		</div>
	</div>

	<div class="table-responsive">
		<table class="table table-striped b-t b-light">
			<thead>
				<tr>
					<th>Nombre </th>
					<th>Sexo</th>
					<th>Telefono</th>
					<th>E-mail</th>
					<th width="180"></th>
				</tr>
			</thead>
			<tbody>
<?php

			if ( isset($_GET['buscar']) ){

				$buscar = mysql_real_escape_string($_GET['buscar']);

				$consulta  = "SELECT * FROM clientes WHERE 
					(nombre LIKE '%".$buscar."%' OR 
						sexo LIKE '%".$buscar."%' OR 
						telefono LIKE '%".$buscar."%' OR 
						correo LIKE '%".$buscar."%') 
					ORDER BY nombre ASC";
					
			} else {
				$consulta  = "SELECT * FROM clientes ORDER BY nombre ASC";
			

	while($q = mysql_fetch_object($consulta)){
?>
				<tr>
					<td><?php echo $q->nombre; ?></td>
					<td><?php echo $q->sexo; ?></td>
					<td><?php echo $q->telefono; ?></td>
					<td><?php echo $q->correo; ?></td>
					<td>
						<a href="admin.php?m=clientesEditar" class="btn btn-sm btn-default"> <i class="fa fa-pencil"></i> </a> &nbsp;
						<a href="" class="btn btn-sm btn-info"><i class="fa fa-file"></i></a>&nbsp;
						<a href="" class="btn btn-sm btn-danger"> <i class="fa fa-times"></i> </a>					
					</td>
				</tr>

<?php
			}
?>
			</tbody>
		</table>
	</div>
</section>
