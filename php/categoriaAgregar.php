	<section class="panel panel-default">
			<header class="panel-heading">
				<i class="fa fa-wrench icon"></i> Configuracion de Categoria
			</header>
			<div class="panel-body">
				<form class="bs-example form-horizontal" action="" method="post">
					<?php echo $errorMsg; ?>
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label class="col-md-3 control-label">Nombre</label>
								<div class="col-md-9"><inpu type="text" name="" class="form-control"></div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label class="col-md-3 control-label">Categoria</label>
								<div class="col-md-9">
									<select class="form-control" name="prueba">
										<option></option>
										<option>Servicio</option>
										<option>Producto</option>
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
