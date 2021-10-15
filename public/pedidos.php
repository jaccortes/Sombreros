<?php
    require_once("productoModel.php");
	$ProdObj=new productoModel();
	$Prod=$ProdObj->getProductos();	
?>
<!DOCTYPE html>
<html lang="en">
	<!-- cabecera de pagina -->
	<head>
		<!-- titulo de la pagina -->
		<title>Sombreros Vueltiaos - Pedidos</title>
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
				</nav>
			</header>
			<!-- seccion de servicios de la pagina -->
			<section class="producto-section" id="services">
				<div name="dinterna4" id="dinterna4" class="dinterna4">
					<div class="alert alert-success" style="font-size:20px;font-weight: bold;" role="alert">
						1. Registre su Pedido
					</div>
					<div class="form-row">
						<div class="form-group col-md-12">					
							<table class="table">
								<thead class="thead-dark">
									<tr>
									   <th scope="col">Cantidad</th>
									   <th scope="col">Producto</th>
									   <th scope="col">Valor Unidad</th>
									   <th scope="col">Sub-Total</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>
											<input type="text" id="cant1" name="cant1">
										</td>
										<td>
											<select name="select_pro1" id="select_pro1">
											<option value=""></option>  
											<?php foreach($Prod as $key1 => $valor1){ ?>
											<option value="valu1"><?php echo $valor1['pro_nombre']; ?></option>
											<?php } ?>
											</select>	
										</td>
										<td>
											<input type="text" id="valu1" name="valu1">
										</td>
										<td>
											<input type="text" id="valt1" name="valt1" value="0">
										</td>
									</tr>
									<tr>
										<td>
											<input type="text" id="cant2" name="cant2">
										</td>
										<td>
											<select name="select_pro2" id="select_pro2">
											<option value=""></option>
											<?php foreach($Prod as $key2 => $valor2){ ?>
											<option value="valu2"><?php echo $valor2['pro_nombre']; ?></option>
											<?php } ?>
											</select>	                    
										</td>
										<td>
											<input type="text" id="valu2" name="valu2">
										</td>
										<td>
											<input type="text" id="valt2" name="valt2" value="0">
										</td>
									</tr>    
									<tr>
										<td>
											<input type="text" id="cant3" name="cant3">
										</td>
										<td>
											<select name="select_pro3" id="select_pro3">
											<option value=""></option>
											<?php foreach($Prod as $key3 => $valor3){ ?>
											<option value="valu3"><?php echo $valor3['pro_nombre']; ?></option>
											<?php } ?>
											</select>	                         
										</td>
										<td>
											<input type="text" id="valu3" name="valu3">
										</td>
										<td>
											<input type="text" id="valt3" name="valt3" value="0">
										</td>
									</tr>    
									<tr>
										<td>
											<input type="text" id="cant4" name="cant4">
										</td>
										<td>
											<select name="select_pro4" id="select_pro4">
											<option value=""></option>                        
											<?php foreach($Prod as $key4 => $valor4){ ?>
											<option value="valu4"><?php echo $valor4['pro_nombre']; ?></option>
											<?php } ?>
											</select>	                          
										</td>
										<td>
											<input type="text" id="valu4" name="valu4">
										</td>
										<td>
											<input type="text" id="valt4" name="valt4" value="0">
										</td>
									</tr>  
			
								</tbody>
							</table>
							<div class="container">
								<div class="row">
									<div class="col-sm">
									</div>
									<div class="col-sm">
										<div class="alert alert-success" role="alert">
											<span style="font-size:20px;font-weight: bold;">TOTAL</span>&nbsp;&nbsp;&nbsp;
											<br><br>
											<div style="font-size:24px;background-color:#FF6600;" id="totalx" name="totalx"></div>
											<br>
										</div>	
									</div>	
								</div>
							</div>
						</div>
					</div>
				</div>
				<div name="rinterna5" id="rinterna5" class="rinterna5">
					<div class="alert alert-success" style="font-size:20px;font-weight: bold;" role="alert">
						2. Ingrese los Datos de Envio
					</div>

						<div class="form-row">
							<div class="form-group col-md-6">
								<label for="inputnombre" style="color:white;">Nombre Cliente</label>
								<input type="text" class="form-control" name="inputnombre" id="inputnombre" placeholder="Nombre del Cliente">
							</div>
							<div class="form-group col-md-6">
								<label for="inputdireccion" style="color:white;">Dirección de Entrega</label>
								<input type="text" class="form-control" name="inputdireccion" id="inputdireccion" placeholder="Direccion de Entrega">
							</div>
						</div>
						<div class="form-row">
							<div class="form-group col-md-6">
								<label for="inputtelefono" style="color:white;">Teléfono</label>
								<input type="text" class="form-control" name="inputtelefono" id="inputtelefono" placeholder="Numero Teléfono Ceular">
							</div>
							<div class="form-group col-md-6">
								<label for="inputcedula" style="color:white;">Cédula</label>		
								<input type="text" class="form-control" name="inputcedula" id="inputcedula" placeholder="Cédula">
							</div>
						</div>

						<input type="submit" class="btn btn-warning" onclick="crearpedido()" value="CREAR PEDIDO">
				</div>
				</br></br>
				<div id="resultado" name="resultado"></div>	
			</section>
			<!-- seccion de pie de pagina del sitio -->
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
