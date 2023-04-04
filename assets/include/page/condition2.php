<?php



//vars

include('../sessions.php');

include('../../../functions.php');



Valite_environment();
?>


	<!-- //Escolar -->
	<!-- if ($environment == "personal") { -->
		<div class="contenedor" style="margin-top:2rem;">
			<div>
				<img src="https://storage.googleapis.com/proyectos_latam/Incorporacionweb/images_varios_micrositios/ate/ate1.png" 
				alt=""
				style="width: 40%;">
			</div>
			<p class="text_one_ate mb-3 mt-3">Adquiere mínimo 3 productos de las marcas Kenko Balance, Kenko Fashion, Kenkotherm y disfruta del 15% de descuento. </p>
			<div class="buttons_ate">
				<button class="btn btn-default btn-lg btn-block" onclick="Send_product_search('KENKO FASHION')"> <img class="img_btn" src="https://storage.googleapis.com/proyectos_latam/Incorporacionweb/images_varios_micrositios/ate/kenko-fashion.png" alt=""></button>
				<button class="btn btn-default btn-lg btn-block" onclick="Send_product_search('KENKO BALANCE')"> <img class="img_btn" src="https://storage.googleapis.com/proyectos_latam/Incorporacionweb/images_varios_micrositios/ate/kenko-balance.png" alt=""></button>
				<button class="btn btn-default btn-lg btn-block" onclick="Send_product_search('KENKO THERM')"> <img class="img_btn" src="https://storage.googleapis.com/proyectos_latam/Incorporacionweb/images_varios_micrositios/ate/kenko-therm.png" alt=""></button>

			</div>

			<p class="text_two_ate mt-3 mb-3">*Los códigos en paquetes, sets, partes, repuestos y/o piezas no aplican para el descuento especial en accesorios.</p>
		</div>
		

	

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