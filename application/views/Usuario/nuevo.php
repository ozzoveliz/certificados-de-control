<!-- Form -->
<section>
	<h3>Form</h3>
	<form method="post" action="#">
		<div class="row uniform 50%">
			<div class="6u 12u$(xsmall)">
				<input type="text" name="nombre_us" id="nombre_us" value="" placeholder="Nombre Usuario" />
			</div>
			<div class="6u$ 12u$(xsmall)">
				<input type="email" name="email" id="email" value="" placeholder="Correo Electronico" />
			</div>
            <div class="6u$ 12u$(xsmall)">
				<input type="text" name="pais" id="pais" value="" placeholder="Pais" />
			</div>
           	<div class="6u$ 12u$(xsmall)">
				<div class="select-wrapper">
					<select name="tipo" id="tipo">
						<option value="">- Administrador -</option>
						<option value="1">Operador</option>
						<option value="1">Proveedor</option>
						<option value="1">Importador</option>
					</select>
				</div>
			</div>

			<div class="12u$">
				<ul class="actions">
					<li><input type="submit" value="Guardar" class="special" /></li>
					<li><input type="reset" value="Cancelar" /></li>
                    <li> <a href="<?php echo base_url('usuario/index'); ?>" class="button special">Regresar</a></li>
				</ul>
			</div>
		</div>
	</form>
</section>