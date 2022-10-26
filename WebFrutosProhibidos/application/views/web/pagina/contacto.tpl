{strip}
<section class="sect-contacto">
	<div class="container height">
		<div class="row height align-items-end">
			<div class="col-lg-12">
				<h1 class="sect-contacto-title">CONTACTO</h1>
				<p class="sect-contacto-title2"><a href="{$base_url}home">Inicio</a> / <span>Contacto</span></p>
			</div>
		</div>
	</div>
</section>
<section>
	<div id="map" style="width: 100%; height: 400px;"></div>
</section>
<section class="sect-contacto2">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="sect-contacto-numero">
					<h3>Celular:<strong> (+51) 988 541 137</strong></h3>
				</div>
			</div>
			<div class="col-lg-3">
				<div class="contenedor-datos">
					<div class="contenedor-datos2">
						<i class="fa fa-map-marker"></i>
						<h6>Dirección</h6>
						<div class="contenedor-datos2-centerv">
							<div class="datos2-v">
								<p>Manzana E Lote 5 Cooperativa las Vertientes, Villa el Salvador</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-3">
				<div class="contenedor-datos">
					<div class="contenedor-datos2">
						<i class="fa fa-mobile"></i>
						<h6>Celular</h6>
						<div class="contenedor-datos2-centerv">
							<div class="datos2-v">
								<p>(+51) 988 541 137</p>
							</div>
						</div>
						
					</div>
				</div>
			</div>
			<div class="col-lg-3">
				<div class="contenedor-datos">
					<div class="contenedor-datos2">
						<i class="fa fa-envelope-o"></i>
						<h6>Correo</h6>
						<div class="contenedor-datos2-centerv">
							<div class="datos2-v">
								<p>percyguillermo<br>@elfrutoprohibido.com.pe</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-3">
				<div class="contenedor-datos">
					<div class="contenedor-datos2">
						<i class="fa fa-clock-o"></i>
						<h6>Horario</h6>
						<div class="contenedor-datos2-centerv">
							<div class="datos2-v">
								<p>Lun-Vi: 8:00 - 17:00 </br> Sábado: 9:00 - 14:00</p>
							</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="contact-bgcont2">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="conc1-fmras1bg1">
					<h2 class="titl-conc1-t1">Contacto</h2>
					<form action="formulario/enviar2" class="formulario" method="POST">
						<span class="respuesta"></span>
						<div class="row">
							<div class="col-sm-4">
								<div class="form-group">
									<div class="e2e-frmCnt">
										<input type="text" name="name" value="" id="name" placeholder="Nombres" minlength="3" maxlength="100" style="" class="form-control e2e-inpfrm" autocomplete="off">
										<span aria-hidden="true" class="fa fa-user e2e-frmIcon"></span>
									</div>
								</div>
								<div class="form-group">
									<div class="e2e-frmCnt">
										<input type="email" name="email" value="" id="email" placeholder="E-mail" minlength="10" maxlength="100" style="" class="form-control e2e-inpfrm" autocomplete="off">
										<span aria-hidden="true" class="fa fa-at e2e-frmIcon"></span>
									</div>
								</div>
								<div class="form-group">
									<div class="e2e-frmCnt">
										<input type="text" name="phone" value="" id="phone" placeholder="Celular" minlength="7" maxlength="25" style="" class="form-control e2e-inpfrm" autocomplete="off">
										<span aria-hidden="true" class="fa fa-phone e2e-frmIcon"></span>
									</div>
								</div>
							</div>
							<div class="col-sm-8">
								<div class="form-group">
									<div class="e2e-frmCnt">
										<textarea name="message" cols="40" rows="6" id="message" placeholder="Mensaje" style="resize: none;" class="form-control e2e-txtareafrm messageContactoWeb"></textarea>
										<span aria-hidden="true" class="fa fa-commenting-o e2e-frmIcon"></span>
									</div>
								</div>
								<button title="View Detail" class="btn frmbtnflt">Enviar</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</section>
{/strip}