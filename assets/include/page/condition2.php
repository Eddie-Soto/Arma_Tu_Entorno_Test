<?php



//vars

include('../sessions.php');

include('../../../functions.php');



Valite_environment();
?>


	<!-- //Escolar -->
	<!-- if ($environment == "personal") { -->

		

			<!-- <h2>Condición mínima para <strong>Armar tu entorno Personal</strong><span tabindex="0" role="button" data-html="true" data-toggle="popover" data-trigger="focus" data-placement="bottom" title="<b>Entorno Personal</b>" data-content='<div class="text-justify"><img src="img/office.png" alt="Personal" style="float: left; padding: 0 10px 0 0"><small>Es el ambiente que acompaña y caracteriza a cada individuo. Cada persona elige cómo construir su entorno, en el que intervienen aspectos como hábitos de alimentación, actividades, prácticas deportivas, imagen personal, y la forma cómo se interactúa con cada espacio físico.</small></div>'>

					<i style="color:#333; cursor: pointer;" class="fa fa-info-circle" aria-hidden="true" data-toggle="tooltip" data-placement="left" title="Información sobre el entorno"></i></span></h2>

			<hr class="line-format">

			<div class="form-group">

				<?php
				if ($country_abi == 10) {
				?>
					<p class="help-block padding-bottom"><small><i class="color-green fa <?php if (Valite_personal_environment_one() == 0) {
																								echo "fa-circle-o";
																							} else {
																								echo "fa-check-circle-o";
																							} ?> fa-2x" aria-hidden="true"></i>&nbsp;&nbsp;<strong><span class="color-green">1°</span> Escoge al menos 5 unidades.</strong></small><br /><span style="font-size: 15px;"><small><u>Ten en cuenta que los productos adicionales que no pertenezcan al Entorno Personal <strong>no aplican para el descuento especial</strong>, a pesar de que ya se haya cumplido la condición o regla del entorno.</u></small></span></p>
				<?php
				} else {
				?>

					<p class="help-block padding-bottom"><small><i class="color-green fa <?php if (Valite_personal_environment_one() == 0) {
																								echo "fa-circle-o";
																							} else {
																								//echo "fa-check-circle-o";
																								var_dump(Valite_personal_environment_one());
																							} ?> fa-2x" aria-hidden="true"></i>&nbsp;&nbsp;<strong><span class="color-green">1°</span> Escoge al menos 5 unidades de cualquier producto de las marcas abajo relacionadas. Puedes combinar o puede ser de la misma referencia.</strong></small><br /><span style="font-size: 15px;"><small><u>Ten en cuenta que los productos adicionales que no pertenezcan al Entorno Personal <strong>no aplican para el descuento especial</strong>, a pesar de que ya se haya cumplido la condición o regla del entorno.</u></small></span></p>
				<?php
				}
				?>
				<div class="form-group">

					<div class="row">
						<!-- CHILE ejemplo para ocultar una seccion en el enorno personal 
				-->
						<div class="col-lg-4 col-sm-4 col-xs-4 col-md-4">
							<div style="cursor: pointer;"><img src="img/environment/personal-1.png" onclick="Send_product_search('KENKO BALANCE')" class="img-responsive center-block" alt="KENKO BALANCE"></div>
						</div>

						<div class="col-lg-4 col-sm-4 col-xs-4 col-md-4">
							<div style="cursor: pointer;"><img src="img/environment/personal-3.png" onclick="Send_product_search('KENKOTHERM')" class="img-responsive center-block" alt="KENKO THERM"></div>
						</div>

						<div class="col-lg-4 col-sm-4 col-xs-4 col-md-4">
							<div style="cursor: pointer;"><img src="img/environment/personal-6.png" onclick="Send_product_search('SLEEP MASK')" class="img-responsive center-block" alt="KENKO SLEEP"></div>
						</div>


					</div>

				</div>

				<div class="form-group">

					<div class="row">





						<div class="col-lg-4 col-sm-4 col-xs-4 col-md-4">
							<div style="cursor: pointer;" data-toggle="modal" data-target="#modal-kenko-fashion"><img src="img/environment/personal-7.png" onclick="Send_product_search('KENKO FASHION')" class="img-responsive center-block" alt="KENKO FASHION"></div>
						</div>

						<div class="col-lg-4 col-sm-4 col-xs-4 col-md-4">
							<div style="cursor: pointer;"><img src="img/environment/personal-5.png" onclick="Send_product_search('PIMAG BOTELLA DEPORTIVA')" class="img-responsive center-block" alt="PIMAG"></div>
						</div>

						<div class="col-lg-4 col-sm-4 col-xs-4 col-md-4" <?php if ($country_abi == 10) { ?>style="display: none;" <?php } ?>>
							<div style="cursor: pointer;"><img src="img/environment/personal-4.png" onclick="Send_product_search('TRUE ELEMENTS')" class="img-responsive center-block" alt="TRUE ELEMENTS"></div>
						</div>



					</div>

				</div>

			<!-- </div>
			<p class="page-header">*Los productos en paquetes, partes, repuestos y/o piezas no aplican para descuento en Arma tu Entorno.</p> --> -->


		<!-- Funcionalida popover -->

		<script>
			$(function() {

				// Enables popover

				$('[data-toggle="popover"]').popover({

					container: 'body'

				});

			});
		</script>

		<!-- Funcionalida popover -->

		<!-- Funcionalidad tooltip-->

		<script>
			$(function() {

				$('[data-toggle="tooltip"]').tooltip()

			})
		</script>

		<!-- Funcionalidad tooltip-->