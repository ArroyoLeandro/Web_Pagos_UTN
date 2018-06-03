<?php
	echo "<header id='titulo'>
			<h3>Ingrese su dni</h3>
			</header>
			<article>
				<form action='index.php' method='get'>
					<input type='text' name='dni' id='dni' class='input-text' required pattern='[0-9]{7,8}' placeholder='solo numeros'></input>
					<button type='button' class='btn-number' value='1' onclick='btnPress(this.value);'/>1</button>
					<button type='button' class='btn-number' value='2' onclick='btnPress(this.value);'/>2</button>
					<button type='button' class='btn-number' value='3' onclick='btnPress(this.value);'/>3</button>
					<button type='button' class='btn-number' value='4' onclick='btnPress(this.value);'/>4</button>
					<button type='button' class='btn-number' value='5' onclick='btnPress(this.value);'/>5</button>
					<button type='button' class='btn-number' value='6' onclick='btnPress(this.value);'/>6</button>
					<button type='button' class='btn-number' value='7' onclick='btnPress(this.value);'/>7</button>
					<button type='button' class='btn-number' value='8' onclick='btnPress(this.value);'/>8</button>
					<button type='button' class='btn-number' value='9' onclick='btnPress(this.value);'/>9</button>
					<button type='button' class='btn-number red' onclick='btnBorrar();'/><i class='fas fa-arrow-circle-left fa-lg'></i></button>
					<button type='button' class='btn-number' value='0' onclick='btnPress(this.value);'/>0</button>
					<button type='submit' name='pagar-cuota' class='btn-number green' onclick='btnPress(this.value);'/><i class='fas fa-arrow-circle-right fa-lg'></i></button>
					<br>
					<div class='error'><a href='index.php?reportar-error=reportar-error'>Reportar error</a></div>
				</form>
			</article>";
?>