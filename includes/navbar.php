<?php
echo "<div class='navbar'>
	<a href='index.php' class='navbar-brand'><img src='images/navbar-brand.png' class='navbar-brand'></a>
	<div class='topnav'>
	<form action='index.php' method='get'>	
		<select name='language' class='select-language' onChange='this.form.submit();'>
			<option value='' selected disabled hidden>Lenguaje</option>
			<option value='ESP'>Español</option>
			<option value='ING'>Inglés</option>
			<option value='GER'>Alemán</option>
		</select>
	<img src='images/language-icon.png' class='navbar-icon'>	
	</form>
	</div>
</div>";
?>