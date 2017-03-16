<!-- Form -->
<section>
	<h3>Certificado del Operador</h3>
	<form method="post" action="#">
		<div class="row uniform 50%">
			<div class="6u 12u$(xsmall)">
				<input type="text" name="codigo_cert" id="codigo_cert" value="" placeholder="Codigo Certificado" />
			</div>
			<div class="6u$ 12u$(xsmall)">
				<input type="date" name="fecha_emision" id="fecha_emision" value="" placeholder="Fecha de Emision" />
			</div>
            <div class="6u$ 12u$(xsmall)">
				<input type="file" name="certificado" id="certificado" value="" placeholder="Certificado" />
			</div>
		
			</div>

			<div class="12u$">
				<ul class="actions">
					<li><input type="submit" value="Guardar" class="special" /></li>
					<li><input type="reset" value="Cancelar" /></li>
                    <li> <a href=" <?=$_SERVER["HTTP_REFERER"]?>" class="button special">Regresar</a></li>
				</ul>
			</div>
		</div>
	</form>
</section>