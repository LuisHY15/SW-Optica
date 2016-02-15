<section class="panel panel-default pos-rlt clearfix">

	<header class="panel-heading"> <i class="fa fa-list"></i> Historial Cllinico</header>
	
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
					<th>Apellido</th>
					<th>Telefono</th>
					<th>E-mail</th>
					<th>Credito</th>
					<th width="180"></th>
				</tr>
			</thead>
			<tbody>

				<tr>
					<td>columna 1</td>
					<td>columna 2 </td>
					<td>columna 3</td>
					<td>columna 4 </td>
					<td>columna 5 </td>
					<td>
						<a href="admin.php?m=clientesEditar" class="btn btn-sm btn-default"> <i class="fa fa-pencil"></i> </a> &nbsp;
						<a href="" class="btn btn-sm btn-info"><i class="fa fa-file"></i></a>&nbsp;
						<a href="" class="btn btn-sm btn-danger"> <i class="fa fa-times"></i> </a>
						
					</td>
				</tr>
				<tr>
					<td>columna 1</td>
					<td>columna 2 </td>
					<td>columna 3</td>
					<td>columna 4 </td>
					<td>columna 5 </td>
					<td>
						<a href="admin.php?m=clientesEditar" class="btn btn-sm btn-default"> <i class="fa fa-pencil"></i> </a> &nbsp;
						<a href="" class="btn btn-sm btn-info"><i class="fa fa-file"></i></a>&nbsp;
						<a href="" class="btn btn-sm btn-danger"> <i class="fa fa-times"></i> </a>
					</td>
				</tr>

			</tbody>
		</table>
	</div>

</section>