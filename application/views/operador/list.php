<?php
/**
 * Created by PhpStorm.
 * User: OzzO
 * Date: 04/03/2017
 * Time: 05:47 PM
 */

?>
<!-- Table -->
<section>
    <h3>Table <?php echo $kaka; ?></h3>
    <h4>Alternate</h4>
    <div class="table-wrapper">
        <table class="alt">
            <thead>
            <tr>
                <th>Nombre Operador</th>
                <th>Nombre IMOcert</th>
                <th>Pais</th>
                <th>Correo Electronico</th>
                <th>Acciones</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>Item 1</td>
                <td>Ante turpis integer aliquet porttitor.</td>
                <td>29.99</td>
                <td>correo@correo.com</td>
                <td class="actions"><a href="#" class="button special small">Editar</a>
							     	<a href="#" class="button small">Borrar</a>
								    <a href="<?php echo base_url('certificado/index'); ?>"class="button alt small">Certificados</a></td>
            </tr>
            <tr>
                <td>Item 2</td>
                <td>Vis ac commodo adipiscing arcu aliquet.</td>
                <td>19.99</td>
                <td>correo@correo.com</td>
                <td class="actions"><a href="#" class="button special small">Editar</a>
				<a href="#" class="button small">Borrar</a>
				<a href="#" class="button alt small"> Certificados</a></td>
            </tr>
            <tr>
                <td>Item 3</td>
                <td> Morbi faucibus arcu accumsan lorem.</td>
                <td>29.99</td>
                <td>correo@correo.com</td>
                <td class="actions"><a href="#" class="button special small">Editar</a>
				<a href="#" class="button small">Borrar</a>
				<a href="#" class="button alt small"> Certificados</a></td>
            </tr>
            <tr>
                <td>Item 4</td>
                <td>Vitae integer tempus condimentum.</td>
                <td>19.99</td>
                <td>correo@correo.com</td>
                <td class="actions"><a href="#" class="button special small">Editar</a>
				<a href="#" class="button small">Borrar</a>
				<a href="#" class="button alt small"> Certificados</a></td>
            </tr>
            <tr>
                <td>Item 5</td>
                <td>Ante turpis integer aliquet porttitor.</td>
                <td>29.99</td>
                <td>correo@correo.com</td>
                <td class="actions"><a href="#" class="button special small">Editar</a>
				<a href="#" class="button small">Borrar</a>
				<a href="#" class="button alt small">Certificados</a></td>
            </tr>
            </tbody>
            </table>
    </div>
    <a href="<?php echo base_url('operador/nuevo'); ?>" class="button special">Nuevo</a>
</section>
