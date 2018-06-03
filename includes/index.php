<?php
	echo "<header id='titulo'>
			<h3>Seleccione una opci&oacuten a pagar</h3>
			</header>
			<article>
				<form action='index.php' method='get'>
					<button type='submit' name='cuota' class='btn' value='cuota'>Cuota mensual</button>
					<button type='submit' name='estacionamiento' class='btn' value='estacionamiento'>Estacionamiento</button>
					<button type='submit' name='otros' class='btn' value='otros'>Otros pagos</button>
					<div class='error'><a href='index.php?reportar-error=reportar-error'>Reportar error</a></div>
				</form>
			</article>";
?>