<!-- Form -->
<section>
	<h3>Form</h3>
	<form method="post" action="#">
		<div class="row uniform 50%">
			<div class="6u 12u$(xsmall)">
				<input type="text" name="nombre_ope" id="nombre_ope" value="" placeholder="Nombre Operador" />
			</div>
			<div class="6u$ 12u$(xsmall)">
				<input type="email" name="email" id="email" value="" placeholder="Correo Electronico" />
			</div>
            <div class="6u$ 12u$(xsmall)">
				<input type="email" name="nombre_imo" id="nombre_imo" value="" placeholder="Nombre para IMOcert" />
			</div>
			<div class="6u$ 12u$(xsmall)">
				<div class="select-wrapper">
					<select name="pais" id="pais">
						<option value="">- Pais -</option>
						<option value="1">Bolivia</option>
						<option value="1">Peru</option>
						<option value="1">Mexico</option>
						<option value="1">Paraguay</option>
					</select>
				</div>
			</div>

			<div class="12u$">
				<ul class="actions">
					<li><input type="submit" value="Guardar" class="special" /></li>
					<li><input type="reset" value="Cancelar" /></li>
                    <li> <a href="<?php echo base_url('operador/index'); ?>" class="button special">Regresar</a></li>
				</ul>
			</div>
		</div>
	</form>
</section>