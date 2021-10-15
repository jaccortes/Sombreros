<!DOCTYPE html>
<html lang="en">
	<!-- cabecera de pagina -->
	<head>
		<!-- titulo de la pagina -->
		<title>Mintic Grupo 5-3</title>
		<meta charset="utf-8">
		<!-- configuracion responsive -->
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- cargue de hoja de estilos -->
		<link href="css\SombrerosVueltiaos.css" rel="stylesheet">
		<!-- cargue del icono de la pagina -->
		<link rel="icon" type="image/ico"href="img\icono.ico">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>	
		<script type="text/javascript" src="sombreros.js"></script>		
	</head>
	<!-- cuerpo de la pagina -->
	<body>
		<main>
			<!-- imagen menu y titulo de la pagina -->
			<header class="imagendelheader">
				<nav>
					<ul>
						<li><a class="active" href="SombrerosVueltiaos">Home</a></li>
						<li><a href="productos">Productos</a></li>
						<li><a href="pedidos">Pedidos</a></li>
						<li><a href="seguimiento">Seguimiento</a></li>
					</ul>
					<div >
						<div class="hero-text">
							<h1 class="h1deheader">Sombreros Vueltiaos</h1>
							<p>Artesanales</p>
						</div>
					</div>
				</nav>
			</header>
			<!-- seccion de servicios de la pagina -->
						<!-- seccion de servicios de la pagina -->
			<section class="producto-section" id="services">
				<div name="dinterna6" id="dinterna6" class="dinterna6">
					<div class="alert alert-success" role="alert">
						INGRESE SU NUMERO DE PEDIDO
					</div></br>
					<div class="input-group input-group-lg">
						<div class="input-group-prepend">
							<span class="input-group-text" id="inputGroup-sizing-lg">PEDIDO # </span>
						</div>
						<input type="text" id="numerodelpedi" name="numerodelpedi" class="form-control">
					</div>
					</br>
					<input type="submit" class="btn btn-success" onclick="buscarpedido()" value="Buscar">
				</br></br>
				</div>
				<div id="resultado" name="resultado"></div>	<div id="resultado2" name="resultado2"></div>	
				<div name="xinterna7" id="xinterna7" class="xinterna7" style="display:none;">
					<div class="alert alert-success" style="font-size:20px;font-weight: bold;" role="alert">
						Actualización de Datos del Cliente
					</div>

						<div class="form-row">
							<div class="form-group col-md-12">
								<label for="inputdireccion" style="color:white;">Dirección de Entrega</label>
								<input type="text" class="form-control" name="inputdireccion" id="inputdireccion" placeholder="Direccion de Entrega">
							</div>
						</div>
						<div class="form-row">
							<div class="form-group col-md-12">
								<label for="inputtelefono" style="color:white;">Teléfono</label>
								<input type="text" class="form-control" name="inputtelefono" id="inputtelefono" placeholder="Numero Teléfono Ceular">
							</div>
						</div>
						<input type="hidden" name="inputhidepedido" id="inputhidepedido" >

						<input type="submit" class="btn btn-warning" onclick="actualizadatos()" value="   ACTUALIZAR DATOS   ">
				</div>				
			</section>
			<footer id="footer-section"><br><br>
				<div class="container-cont">
					<div class="contacto-m">
						<p class="contacto">
							CONTACTO
						</p>
						<p class="titulo-contacto">
							ALEJANDRO CORTES<br>
							Programador & Scrum Master
						</p>
					</div>
					<div class="contacto-m">
						<p class="contacto">
							CONTACTO
						</p>
						<p class="titulo-contacto">
							KEINERS BARRAZA<br>
							Product BackLog & StakeHolder
						</p>
					</div>
					<div class="contacto-m">
						<p class="contacto">
							CONTACTO
						</p>
						<p class="titulo-contacto">
							LUIS BOCANEGRA <br>
							Diseño & Historias de Usuario
						</p>
					</div>			
				</div>
				<div id="p-footer">
					<div class="container-2">
						<div class="copyright">
							<p class="titulo-footer">
								Sitio dedicado a la comercializacion de sombreros vueltiaos con servicio de 
								peddos y envio a domicilio, motivado con el objetivo de conectar a fabricantes 
								con compradores de esta bonita artesania nacional colombiana. Copyright © 2021 All 
								rights reserved.
								<a class="link" href="https://github.com/jaccortes/semana-1-3/" target="_blank"> Repositorio Grupal</a>
							</p>
						</div>
					</div>
				</div>	
			</footer>
		</main>
	</body>
</html>
