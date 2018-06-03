<?php
	echo "<header id='titulo'>
			<h4>Pago de cuota</h4>
			<h3>DNI: ".$_GET['dni']."</h3>
			<h2>Pepe Pompim</h2>
			</header>
			<article>
				<form action='mp.php' method='get'>
					<h1>2100.00</h1>
				<h5>Importe a pagar</h5>
					<button type='submit' name='pagar-cuota' class='btn' value='cuota'>Pagar</button>
					<div class='error'><a href='index.php?reportar-error=reportar-error'>Reportar error</a></div>
				</form>
			</article>";
?>