$( document ).ready(function() {


	$('#btnNavBarPrincipal').click(function() {
		$('#menuPrincipalMovil').css("left", "0px")
	})
	$('#btnCerrarMenuPrincipal').click(function() {
		$('#menuPrincipalMovil').css("left", "-100%")
	})

	$( "#btnMostrarBuscador" ).click(function() {
  		$("#inputBuscador").toggle("display", "block");
	});

});
 