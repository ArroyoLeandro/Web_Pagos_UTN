<?php
	echo "<header id='titulo'>
			<h3>Estacionamiento</h3>
			<i class='fas fa-car fa-5x'></i>
			</header>
			<article>
				<form action='mp.php' method='get'>
					<h1>45.00</h1>
				<h5>Importe a pagar</h5>
					<button type='submit' name='pagar-cuota' class='btn' value='cuota'>Pagar</button>
					<div class='error'><a href='index.php?reportar-error=reportar-error'>Reportar error</a></div>
				</form>
			</article>";
?>