<!DOCTYPE html>
<html>
    <head>
        <title>EVR maestranza industrial</title>
		
		<?php include './includes/head.php';?>
        
    </head>
	
    <body>	
		
		<?php include './includes/header.php';?>
		
		<div class="container-fluid espacio_cont" ></div>
		
		<div class="container">
			<div class="row">
				<div class="col-md-12 title"><strong>Contacto</strong></div>
			</div>		
		</div>
		
		<hr class="container tit">
		
		<div id="cont_contac" class="container-fluid">		
			<!--<div class="container-fluid espacio_cont" ></div>-->				
				<div class="container">
					<div class="row">
						<!--<div class="col-md-12" style="color: 
						#000000"><strong>Contactanos</strong></div>-->
						<div class="col-md-6">
							<div class="row">								
								<div class="col-md-10">
									<!--formulario-->
									<form>								
										<div class="form-group has-success">
											<label for="nombre">Nombre</label>
											<input type="text" class="form-control" name="nombre" id="nombre" placeholder="Ingrese su nombre" required>
										</div>
										<div class="form-group has-success">
											<label for="correo">Email</label>
											<input type="email" class="form-control" name="correo" id="correo" placeholder="Ingrese su correo" required>
										</div>							  			
							  			<div class="form-group has-success">
											<label for="mensaje">Mensaje</label>
											<textarea id="mensaje" placeholder="Detalle su consulta" name="mensaje" class="form-control" rows="8"></textarea>
                                    	</div> 
                                    	<button type="submit" class="btn" style="background: #FFDA0A; color: 
                                    	#000000">Enviar</button> 
									</form>	
									<!--formulario-->	
								</div>
								<div class="col-md-2"></div>
							</div>																					
						</div>						
						<div class="col-md-6 map">
							<p><strong>Calle San Hector 138</strong></p>
							<p><strong>Urb. Santa Luisa - 2da etapa</strong></p>
							<p><strong>Los Olivos</strong></p>
							<p><strong>992845671 / 996354518</strong></p>
							<iframe src="https://www.google.com/maps/d/u/0/embed?mid=1lwTLSxaWpdmnhXfWcMNokinnKhAeMFPA" width="90%" height="244" frameborder="0"></iframe>
						</div>	
									
					</div>
				</div>			
			<div class="espacio_cont"></div>				
		</div>	
		
		<hr>		
		<?php include './includes/footer.php';?>	
        
    </body>
</html>