function btnPress(value){
	var campo = document.getElementById("user");
	var valor = campo.value;
	campo.value = valor+value;
}

function btnBorrar(){
	var campo = document.getElementById("user");

	var longitud = campo.value.length;
	
	campo.value = campo.value.substring(0,longitud-1);

}