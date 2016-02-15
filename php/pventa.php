<section class="panel panel-default pos-rlt clearfix">

	<header class="panel-heading"> <i class="fa fa-list"></i> Ordenes de trabajo</header>
	
	<div class="row wrapper">
		<div class="col-xs-12 col-sm-2 m-b-xs">

	<a href="admin.php?m=pventaAgregar" class="pull-left btn btn-sm btn-success"><i class="fa fa-plus"></i> Nueva Orden</a>

		</div>
		<div class="col-xs-12 col-sm-7 m-b-xs text-left-xs text-center">

			<a href="admin.php?m=cuentas" class="btn btn-default btn-sm">Cuentas por Cobrar</a> &nbsp;
			<a href="admin.php?m=reportes" class="btn btn-default btn-sm">Reporte de Ingresos</a>


		</div>
		<div class="col-xs-12 col-sm-3">
			<form action="" id="buscarCliente" method="get">
				<div class="input-group">
					<input type="hidden" name="m" value="ordenes">
					<input type="text" class="input-sm form-control" name="buscar" placeholder="Buscar por nombre o folio">
					<span class="input-group-btn"> <button class="btn btn-sm btn-default" id="buscar" type="submit"> <i class="fa fa-search"></i> </button> </span>
				</div>
			</form>
		</div>
	</div>

	<div class="table-responsive">
		<table class="table table-striped b-t b-light">
			<thead>
				<tr>
					<th width="90"> Folio </th>
					<th width="100"> Fecha </th>
					<th> Cliente/Servicios </th>
					<th width="140">Total</th>
					<th width="150"> Abonado / Restan</th>
					<th width="160"> </th>
				</tr>

			<tbody>

				<tr>
					<td>Columna1</td>
					<td>Columna2</td>
					<td>Columna3</td>
					<td>Columna4</td>
					<td>Columna5</td>
					<td>
						<a href="admin.php?m=pventaEditar" class="btn btn-sm btn-default"> <i class="fa fa-pencil"></i> </a> &nbsp;
						<a href="" class="btn btn-sm btn-danger"> <i class="fa fa-times"></i> </a>
					</td>
				</tr>

		    </tbody>
			</thead>
		</table>
	</div>
	<footer class="panel-footer">
		<div class="row">
			<div class="col-sm-12 text-right text-center-xs">
				<ul class="pagination pagination-sm m-t-none m-b-none">
<?php /*
			if ( isset($_GET['buscar']) ){
				$buscar = mysql_real_escape_string($_GET['buscar']);

				$consulta = "SELECT * FROM ordenes JOIN clientes on clientes.idcliente=ordenes.clienteId WHERE clientes.nombre LIKE '%".$buscar."%' OR ordenes.idorden='".$buscar."' ORDER BY idorden DESC";
				$url = "admin.php?m=ordenes&buscar=".$buscar;
			} else {
				$consulta = "SELECT * FROM ordenes JOIN clientes on clientes.idcliente=ordenes.clienteId ORDER BY idorden DESC";
				$url = "admin.php?m=ordenes";
			}
##### PAGINADOR #####
$rows_per_page = 30;

if(isset($_GET['pag']))
	$page = mysql_real_escape_string($_GET['pag']);
else if (@$_GET['pag'] == "0")
	$page = 1;
else 
	$page = 1;

$num_rows 		= mysql_num_rows(mysql_query($consulta));
$lastpage		= ceil($num_rows / $rows_per_page);    		
$page     = (int)$page;
if($page > $lastpage){
	$page = $lastpage;
}
if($page < 1){
	$page = 1;
}
$limit 		= 'LIMIT '. ($page -1) * $rows_per_page . ',' .$rows_per_page;
$consulta  .=" $limit";

$consulta = mysql_query($consulta);
##### PAGINADOR #####

		if ( isset($_GET['del']) ){
			$del = mysql_real_escape_string($_GET['del']);
			mysql_query("DELETE FROM ordenes WHERE id='".$del."'");
		}

		while($q = mysql_fetch_object($consulta)){
			echo '<tr>
					<td class="text-center">'.$q->idorden.'</td>
					<td>'.$q->fecha.'</td>
					<td>'.$q->nombre.'<br>';
					$total     = 0;
					$servicios = mysql_query("SELECT * FROM servicios WHERE ordenId='".$q->idorden."' ORDER BY idservicio ASC");
					while($s = mysql_fetch_object($servicios)){
						echo '<small>'.$s->servicio.'</small><br>';

						$total += $s->precio;
					}
					echo '</td>';

					# comprobamos el iva
					if ( $q->factura == "Si"){
						$total 	+= $total * .16;
					}
					echo '<td class="text-right">$ '.$total.' pesos</td>';

					$suma  = 0;
					$pagos = mysql_query("SELECT * FROM pagos WHERE ordenId='".$q->idorden."'");
					while($pago = mysql_fetch_object($pagos)){
						$suma += $pago->cantidad;
					}
					
					$restan = $total - $suma;

					if ($restan == "0"){
						$completo = '<span class="text-success">$ '.$restan.'</span>';
					} else {
						$completo = '<span class="text-danger">$ '.$restan.'</span>';
					}

					echo '<td> <span class="text-success">$ '.$suma.'</span> / '.$completo.' </td>
					<td>
						<a href="admin.php?m=ordenesEditar&id='.$q->idorden.'" class="btn btn-sm btn-default"> <i class="fa fa-pencil"></i> </a> &nbsp;&nbsp;
						<a href="print.php?id='.$q->idorden.'" target="_blank" class="btn btn-sm btn-default"> <i class="fa fa-print"></i> </a> &nbsp;&nbsp;
						<a href="admin.php?m=ordenes&del='.$q->idorden.'" class="btn btn-sm btn-danger"> <i class="fa fa-times"></i> </a>
					</td>
				</tr>';
		} */
?>
		

<?php
/*
	if($num_rows != 0){
		$nextpage = $page + 1;
		$prevpage = $page - 1;

		if ($page == 1) {
			echo '<li class="disabled"><a href="#"><i class="fa fa-chevron-left"></i></a></li>';
			
			echo '<li class="active"><a href="">1</a></li>';
			
			for($i= $page+1; $i<= $lastpage ; $i++){
				echo '<li><a href="'.$url.'&pag='.$i.'">'.$i.'</a></li> ';
			}

			if($lastpage >$page ){
				echo '<li><a href="'.$url.'&pag='.$nextpage.'"><i class="fa fa-chevron-right"></i></a></li>';
			}else{	
				echo '<li class="disabled"><a href="#"><i class="fa fa-chevron-right"></i></a></li>';
			}
		} else {
			echo '<li><a href="'.$url.'&pag='.$prevpage.'"><i class="fa fa-chevron-left"></i></a></li>';
			
			for($i= 1; $i<= $lastpage ; $i++){
				if($page == $i){
					echo '<li class="active"><a href="#">'.$i.'</a></li>';
				} else {
					echo '<li><a href="'.$url.'&pag='.$i.'">'.$i.'</a></li> ';
				}
			}
         
			if($lastpage >$page ){
				echo '<li><a href="'.$url.'&pag='.$nextpage.'"><i class="fa fa-chevron-right"></i></a></li>';
			} else {
				echo '<li class="disabled"><a href="#"><i class="fa fa-chevron-right"></i></a></li>';
			}
		}
	}
	*/
?>
				</ul>
			</div>
		</div>
	</footer>

</section>