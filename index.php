<!DOCTYPE html>
<html lang="es-AR">
<head>
<meta charset="utf-8"> 
<title>UTN - FRGP</title>
<!--GoogleFonts-->
<link href="https://fonts.googleapis.com/css?family=Lato|Roboto|Tajawal" rel="stylesheet">
<!--FontAwesome-->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
<!--Styles-->
<link rel="stylesheet" type="text/css" href="style.css">
<!--JS-->
<script type="text/javascript">
function btnPress(value){
	var campo = document.getElementById("dni");
	var valor = campo.value;
	campo.value = valor+value;
}

function btnBorrar(){
	var campo = document.getElementById("dni");
	var longitud = campo.value.length;	
	campo.value = campo.value.substring(0,longitud-1);
}
</script>
</head>

<body>
<?php include 'includes/navbar.php';?>	

<section>
	<div id="logo-utn"><img src="images/logo-utn.png"></div>
	<?php if(isset($_GET["cuota"])){
			include 'includes/cuota.php';
		}else if(isset($_GET["estacionamiento"])){
			include 'includes/estacionamiento.php';
		}else if(isset($_GET["otros"])){
			include 'includes/otros.php';
		}else if(isset($_GET["pagar-cuota"])){
			include 'includes/pagar-cuota.php';
		}else if(isset($_GET["pagar-estacionamiento"])){
			include 'includes/pagar-estacionamiento.php';
		}else if(isset($_GET["reportar-error"])){
			include 'includes/reportar-error.php';
		}else{
			include 'includes/index.php';
		}
		?>
	
	<!--End article-->
</section>
<!--End section--> 
<a class='inicio-flotante' href='index.php'>volver</i></a>
</body>

</html>