

<div class="row">
	<div class="col-md-6">

		<div class="panel panel-orange">
			<div class="panel-heading">Equipo</div>
			<div class="panel-body">
				<form method="post">
					<div class="form-group">
						<label for="">Nombre de equipo</label>
						<input type="hidden" id="txtCodigoEquipo" />
						<input type="text" class="form-control" id="txtNombreEquipo" placeholder="Ejm: Multimedia"  />
					</div>
					<div class="form-group">
						<label for="">Nombre usuario</label>
						<input type="text" class="form-control" id="txtNombreUsuario" placeholder="Ejm: Multimedia-Usuario"  />
					</div>
					<div class="form-group">
						<label for="">Contraseña</label>
						<input type="password" class="form-control" id="txtContrasena" placeholder="Ejm: 123"  />
					</div>
					<div class="form-group">
						<button type="button" class="btn btn-primary pull-right" id="btnGuardar">Guardar</button>
					</div>
					<div class="form-group">
						<button type="button" class="btn btn-warning pull-right" id="btnModificar" style="display:none">Modificar</button>
					</div>
				</form>
			</div>
		</div>

	</div>
	<div class="col-md-6">
		<div class="form-group">

			<table id="tblEquipo" class="table table-hover table-bordered">
				<thead>
					<tr>
						<th class="active">Nombre del equipo</th>
						<th class="active">Nombre de usuario</th>
						<th class="active">Contraseña</th>
						<th class="active">Cantidad de monedas</th>
						<th class="active">Editar</th>
					</tr>
				</thead>
				<tbody id="tbdyEquipo">

				</tbody>
			</table>

		</div>
	</div>
</div>	
<?php $equipo = "equipo.Listar();" ?>


