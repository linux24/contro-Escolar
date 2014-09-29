  // SOLO PERMITE INGRESAR LETRAS

  function sololetras (e) {

  	var key=e.keyCode || e.which;
  	var tecla = String.fromCharCode(key).toLowerCase();
  	var letras = "áéíóúabcdefghijklmnñopqrstuvwxyz";
  	var especiales = [8,37,39,46];
  	var tecla_especial=false

  	for( var i in especiales){

if(key == especiales[i]){

tecla_especial=false;
break;

}
  	}

if(letras.indexOf(tecla) == -1 && !tecla_especial){
	return false;

}
 

  }
 
 //SOLO PERMITE INGRESAR NUMEROS

 function soloNumeros (e) {

  	var key=e.keyCode || e.which;
  	var tecla = String.fromCharCode(key).toLowerCase();
  	var numeros ="0123456789";
  	var especiales = [8,37,39,46];
  	var tecla_especial=false

  	for( var i in especiales){

if(key == especiales[i]){

tecla_especial=false;
break;

}
  	}

if(numeros.indexOf(tecla) == -1 && !tecla_especial){
	return false;

}
 

  }