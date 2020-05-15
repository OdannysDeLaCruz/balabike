<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<script src="https://use.fontawesome.com/f9ad25cd0b.js"></script>
	<link rel="stylesheet" href="css/estilos.css">
	  
    <title>Detalle de productos | BALA BIKE</title>
  </head>
<body>
	<header class="mx-0 py-3 container-fluid" style="background: #333333">
		<section class="row m-auto p-0 d-flex flex-row-reverse flex-lg-row">
			<section class="col-8 col-md-8 col-lg-4 py-2 d-flex align-items-center">
				<a href="index.html">
					<img src="imagenes/bbikeb.png" style="max-width: 60%; width: 350px" alt="...">
				</a>
			</section>
			
			<section class="col-4 col-md-4 col-lg-8 d-flex align-items-center align-lg-items-end  justify-content-start justify-content-lg-end flex-row" style="position: initial;">
				<form class="d-flex align-items-center justify-content-end form-buscar">
					<input class="form-control mr-sm-2" id="inputBuscador" style="display: none; height: 40px;" type="search" placeholder="Search" aria-label="Search">
					<img class="fa fa-search  ml-2 mr-0 mr-lg-3" id="btnMostrarBuscador" src="iconos/buscador.png" style="width: 20px; transform: rotate(-10deg);">
				</form> 
		  		<button class="btn-nav-ba-principal d-lg-none" style="font-size: 18px;" id="btnNavBarPrincipal">
					<!-- <span class="fa fa-bars"></span> -->
					<img src="iconos/menuHamburgesa.png" alt="">
		  		</button>
				<nav class="menu-principal">			  
					<ul class="menu-principal-navbar flex-column flex-lg-row" id="menuPrincipalMovil">
						<span class="btnCerrarMenuPrincipal fa fa-close d-lg-none" id="btnCerrarMenuPrincipal"></span>
						<li class="nav-item mx-1">
							<a class="nav-link text-warning d-none d-lg-block" href="#">|</a>
						</li>	    
					  	<li class="nav-item">		  
							<a class="nav-link pagina-activa" href="productos.html">PRODUCTOS</a>
					  	</li>
					  	<li class="nav-item">
							<a class="nav-link text-warning d-none d-lg-block" href="#">|</a>
					  	</li>
					  	<li class="nav-item">
							<a class="nav-link text-white" href="quienes-somos.html">¿QUÍENES&nbsp;SOMOS?</a>
					  	</li>
					  	<li class="nav-item">
							<a class="nav-link text-warning d-none d-lg-block" href="#">|</a>
					  	</li>
					  	<li class="nav-item">
							<a class="nav-link text-white" href="contacto.html">CONTACTENOS</a>
					  	</li>
				 	</ul>           	
				</nav>
		 	</section>
		</section>
	</header>
	
	<section>		
		<section class="seccion-productosbb seccion-detalles-productos my-2 my-lg-5">
			<h1 class="seccion-productosbb-titulo mb-5 pb-4">BICICLETAS</h1>
			<!-- Detalle de productos -->
			<section class="row detalle ">
				<section class="col-12 col-lg-8 mb-5 detalle-bicicleta-carrusel">
					<!-- Carrusel -->
					<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
						<ol class="carousel-indicators">
						    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
						    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
						    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
						</ol>
					  	<div class="carousel-inner">
						    <div class="carousel-item active">
						      	<img class="d-block w-100" src="imagenes/aventon-mataro-white-1.jpg" alt="aventon-mataro-white">
						    </div>
						    <div class="carousel-item">
						      	<img class="d-block w-100" src="imagenes/bicicleta1.jpg" alt="aventon-mataro-white">
						    </div>
						    <div class="carousel-item">
						      	<img class="d-block w-100" src="imagenes/bicicleta.jpg" alt="aventon-mataro-white">
						    </div>
					  	</div>
						<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
						    <!-- <span class="carousel-control-prev-icon" aria-hidden="true"></span> -->
						    <img src="iconos/flechaIzquierda.png" class="carousel-control-next-icon" aria-hidden="true">
						    <span class="sr-only">Previous</span>
						</a>
					  	<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
					    	<!-- <span class="carousel-control-next-icon" aria-hidden="true"></span> -->
					    	<!-- <span  ></span> -->
					    	<img src="iconos/flechaDerecha.png" class="carousel-control-next-icon" aria-hidden="true">
					    	<span class="sr-only">Next</span>
					  	</a>
					</div>
				</section>
				<section class="row flex-md-row-reverse mx-0 col-12 col-lg-4 detalle-bicicleta m-0">
					<section class="col-12 col-md-6 col-lg-12">
						<h1 class="detalle-bicicleta-titulo">Aventon Mataro White</h1>
						<span class="detalle-bicicleta-precio">$900.000</span>
						<form action="" class="detalle-bicicleta-form">
							<div class="detalle-bicicleta-form-talla">
								<span>Talla</span>
								<ul class="tallas">
									<li>49</li>
									<li>52</li>
									<li>55</li>
									<li>58</li>
									<li>49</li>
								</ul>
							</div>
							<span class="d-flex mb-5">
								<input type="number" value="1" min="1" max="10" class="detalle-bicicleta-form-cantidad">
								<button class="detalle-bicicleta-form-btncomprar">COMPRAR</button>						
								
							</span>
						</form>						
					</section>
					<section class="col-12 col-md-6 col-lg-12">
						<section class="detalle-bicicleta-detalles">
							<h2>DETALLES DE LA BICICLETA</h2>
							<ul>
								<li><strong>Cuadro</strong>: Aventon Mataro. Aleación 6061.</li>
								<li><strong>Horquilla</strong>: De carbono.</li>
								<li><strong>Dirección</strong>: Aventon.</li>
								<li><strong>Ruedas</strong>: Aventon Push.</li>
								<li><strong>Piñón</strong>: 15d.</li>
								<li><strong>Plato</strong>: Aventon Push 48T de aluminio.</li>
								<li><strong>Cubiertas</strong>: Kenda Kriterium 700X25C.</li>
								<li><strong>Sillín</strong>: Aventon.</li>
								<li><strong>Potencia</strong>: Aventon Push.</li>
								<li><strong>Manillar</strong>: Aventon Push OS Pista (40cm largo).</li>
								<li><strong>Frenos</strong>: Delantero y trasero montados.</li>
								<li><strong>Tija de sillín</strong> : Aventon Aero Carbon.</li>
								<li><strong>Pedales</strong>: Alloy Road incluidos.</li>
							</ul>
						</section>
					</section>					
				</section>
			</section>
		</section>
	</section>

	<footer>
		<section class="row">
			<section class="col-12 col-md-6 footer-redes px-4 mb-2 d-flex justify-content-center justify-content-md-start">
				<a href=""><img src="iconos/whatsapp.png" class="mx-4" alt=""></a>
				<a href=""><img src="iconos/facebook.png" class="mx-4" alt=""></a>
				<a href=""><img src="iconos/instagram.png" class="mx-4" alt=""></a>
				<a href=""><img src="iconos/youtube.png" class="mx-4" alt=""></a>
			</section>
			<section class="col-12 col-md-6 footer-text d-flex justify-content-center justify-content-md-end">
				<a href="">CONTACTENOS</a>
				<a href="mail:to">balabike@gmail.com</a>
			</section>
		</section>
	</footer>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	<script src="js/app.js"></script>
  </body>
</html>