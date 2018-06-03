<?php
	echo "<header id='titulo'>
			<h3>Seleccione una opción a pagar</h3>
			</header>
			<article>
				<form action='index.php' method='get'>
					<button type='submit' name='libreta' class='btn' value='libreta'>Libreta</button>
					<button type='submit' name='apuntes' class='btn' value='apuntes'>Apuntes</button>
					<button type='submit' name='deudas' class='btn' value='deudas'>Deudas</button>
					<div class='error'><a href='index.php?reportar-error=reportar-error'>Reportar error</a></div>
				</form>
			</article>";
?>