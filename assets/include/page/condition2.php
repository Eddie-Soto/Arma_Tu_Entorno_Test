<?php



//vars

include('../sessions.php');

include('../../../functions.php');



Valite_environment();
?>


	<!-- //Escolar -->
	<!-- if ($environment == "personal") { -->
		<div class="contenedor">
			<div>
				<img src="https://storage.googleapis.com/proyectos_latam/Incorporacionweb/images_varios_micrositios/ate/ate1.png" 
				alt=""
				style="width: 40%;">
			</div>
			<p>Adquiere mínimo 3 productos de las marcas Kenko Balance, Kenko Fashion, Kenkotherm y disfruta del 15% de descuento. </p>
			<div class="buttons">
				<button> KENKO FASHION</button>
				<button> KENKO BALANCE</button>
				<button> KENKO THERM</button>

			</div>

			<p>*Los códigos en paquetes, sets, partes, repuestos y/o piezas no aplican para el descuento especial en accesorios.</p>
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