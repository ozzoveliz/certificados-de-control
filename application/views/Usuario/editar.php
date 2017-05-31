<?php
/**
 * Created by PhpStorm.
 * User: OzzO
 * Date: 31/5/2017
 * Time: 10:15
 */
?>
<!-- Form -->
<section>
	<h3>Form</h3>
    <?php echo validation_errors(); ?>
    <?php $hidden = array('form_action' => 'editar_usuario', 'id' => $this->uri->segment(3)); ?>
    <?php echo form_open('/usuario/editar/', '', $hidden); ?>
		<div class="row uniform 50%">
			<div class="6u 12u$(xsmall)">
                <?php
                $data = array(
                    'name'          => 'nombre_usuario',
                    'id'            => 'nombre_usuario',
                    'value'         => $Usuario[0]->nombre_usuario,
                    'placeholder'   => 'Nombre Usuario'
                );
                echo form_input($data);
                ?>
			</div>
			<div class="6u$ 12u$(xsmall)">
				<?php
                $data = array(
                    'type'          => 'email',
                    'name'          => 'correo_electronico',
                    'id'            => 'correo_electronico',
                    'value'         => $Usuario[0]->correo_electronico,
                    'placeholder'   => 'Correo Electr&oacute;nico'
                );
                echo form_input($data);
                ?>
			</div>
            <div class="6u$ 12u$(xsmall)">
                <?php
                $options = array("Afghanistan", "Albania", "Algeria", "American Samoa", "Andorra", "Angola", "Anguilla", "Antarctica", "Antigua and Barbuda", "Argentina", "Armenia", "Aruba", "Australia", "Austria", "Azerbaijan", "Bahamas", "Bahrain", "Bangladesh", "Barbados", "Belarus", "Belgium", "Belize", "Benin", "Bermuda", "Bhutan", "Bolivia", "Bosnia and Herzegowina", "Botswana", "Bouvet Island", "Brazil", "British Indian Ocean Territory", "Brunei Darussalam", "Bulgaria", "Burkina Faso", "Burundi", "Cambodia", "Cameroon", "Canada", "Cape Verde", "Cayman Islands", "Central African Republic", "Chad", "Chile", "China", "Christmas Island", "Cocos (Keeling) Islands", "Colombia", "Comoros", "Congo", "Congo, the Democratic Republic of the", "Cook Islands", "Costa Rica", "Cote d'Ivoire", "Croatia (Hrvatska)", "Cuba", "Cyprus", "Czech Republic", "Denmark", "Djibouti", "Dominica", "Dominican Republic", "East Timor", "Ecuador", "Egypt", "El Salvador", "Equatorial Guinea", "Eritrea", "Estonia", "Ethiopia", "Falkland Islands (Malvinas)", "Faroe Islands", "Fiji", "Finland", "France", "France Metropolitan", "French Guiana", "French Polynesia", "French Southern Territories", "Gabon", "Gambia", "Georgia", "Germany", "Ghana", "Gibraltar", "Greece", "Greenland", "Grenada", "Guadeloupe", "Guam", "Guatemala", "Guinea", "Guinea-Bissau", "Guyana", "Haiti", "Heard and Mc Donald Islands", "Holy See (Vatican City State)", "Honduras", "Hong Kong", "Hungary", "Iceland", "India", "Indonesia", "Iran (Islamic Republic of)", "Iraq", "Ireland", "Israel", "Italy", "Jamaica", "Japan", "Jordan", "Kazakhstan", "Kenya", "Kiribati", "Korea, Democratic People's Republic of", "Korea, Republic of", "Kuwait", "Kyrgyzstan", "Lao, People's Democratic Republic", "Latvia", "Lebanon", "Lesotho", "Liberia", "Libyan Arab Jamahiriya", "Liechtenstein", "Lithuania", "Luxembourg", "Macau", "Macedonia, The Former Yugoslav Republic of", "Madagascar", "Malawi", "Malaysia", "Maldives", "Mali", "Malta", "Marshall Islands", "Martinique", "Mauritania", "Mauritius", "Mayotte", "Mexico", "Micronesia, Federated States of", "Moldova, Republic of", "Monaco", "Mongolia", "Montserrat", "Morocco", "Mozambique", "Myanmar", "Namibia", "Nauru", "Nepal", "Netherlands", "Netherlands Antilles", "New Caledonia", "New Zealand", "Nicaragua", "Niger", "Nigeria", "Niue", "Norfolk Island", "Northern Mariana Islands", "Norway", "Oman", "Pakistan", "Palau", "Panama", "Papua New Guinea", "Paraguay", "Peru", "Philippines", "Pitcairn", "Poland", "Portugal", "Puerto Rico", "Qatar", "Reunion", "Romania", "Russian Federation", "Rwanda", "Saint Kitts and Nevis", "Saint Lucia", "Saint Vincent and the Grenadines", "Samoa", "San Marino", "Sao Tome and Principe", "Saudi Arabia", "Senegal", "Seychelles", "Sierra Leone", "Singapore", "Slovakia (Slovak Republic)", "Slovenia", "Solomon Islands", "Somalia", "South Africa", "South Georgia and the South Sandwich Islands", "Spain", "Sri Lanka", "St. Helena", "St. Pierre and Miquelon", "Sudan", "Suriname", "Svalbard and Jan Mayen Islands", "Swaziland", "Sweden", "Switzerland", "Syrian Arab Republic", "Taiwan, Province of China", "Tajikistan", "Tanzania, United Republic of", "Thailand", "Togo", "Tokelau", "Tonga", "Trinidad and Tobago", "Tunisia", "Turkey", "Turkmenistan", "Turks and Caicos Islands", "Tuvalu", "Uganda", "Ukraine", "United Arab Emirates", "United Kingdom", "United States", "United States Minor Outlying Islands", "Uruguay", "Uzbekistan", "Vanuatu", "Venezuela", "Vietnam", "Virgin Islands (British)", "Virgin Islands (U.S.)", "Wallis and Futuna Islands", "Western Sahara", "Yemen", "Yugoslavia", "Zambia", "Zimbabwe");
                $extra = array(
                    'id'            => 'pais'
                );
                echo '<div class="select-wrapper">' . form_dropdown('pais', $options, $Usuario[0]->pais, $extra) . '</div>';
                ?>
			</div>
           	<div class="6u$ 12u$(xsmall)">
                <?php
                $options = array('Administrador', 'Operador', 'Proveedor', 'Importador');
                $extra = array(
                    'id'            => 'tipo_usuario'
                );
                echo '<div class="select-wrapper">' . form_dropdown('tipo_usuario', $options, $Usuario[0]->tipo_usuario, $extra) . '</div>';
                ?>
			</div>

			<div class="12u$">
				<ul class="actions">
					<li>
                        <?php echo form_submit('guardar', 'Guardar', 'class="special"'); ?>
                    </li>
					<li>
                        <?php echo form_reset('cancelar', 'Cancelar'); ?>
                    </li>
                    <li>
                        <a href="<?php echo base_url('usuario'); ?>" class="button special">
                            Regresar
                        </a>
                    </li>
				</ul>
			</div>
		</div>
	<?php echo form_close(); ?>
</section>