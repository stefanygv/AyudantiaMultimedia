<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset ="UTF-8">
	<title> DOCUMENT </title>
</head>
<body>
	
	<button onclick ="ejecutarAjax()">Presioname </button>

	<script src="js/jquery.min.js"></script> 
    <script> 
     function ejecutarAjax (){
     	$.ajax({
     		url: 'procesar.php',
     		
     		data: {param1: 'value1'},
     	})
     	.done(function() {
     		alert("success");
     	})
     	.fail(function() {
     		alert("error");
     	})
     	.always(function() {
     		alert("complete");
     	});
     	
     	//alert("Antes de ajax");



    	//$.ajax({
  		//	method: "GET",
  		//	url: "procesar.php",
  			//data: { name: "John", location: "Boston" }
		//})
  		//.done(function( msg ) { //cuando la fx se comlplete haga algo, llamada anonima :fx que se ejecuta en el momento//
    	//alert( "Ajax TERMINO" );
        // })

  		//.fail(function() {
  			//alert ("Ajax Fallo");
  		//});
  
		
 		}

     </script>
    
</body>
</html>