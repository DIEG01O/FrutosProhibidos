<?php /* Smarty version 3.1.27, created on 2022-03-04 12:54:17
         compiled from "/home/logosper/public_html/plantillas/new/plantilla_4/application/views/web/pagina/contacto.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:194618343962223629db4623_10538697%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '33630de8fd29675074711d2ab141d6fa009a18fc' => 
    array (
      0 => '/home/logosper/public_html/plantillas/new/plantilla_4/application/views/web/pagina/contacto.tpl',
      1 => 1529616216,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '194618343962223629db4623_10538697',
  'variables' => 
  array (
    'base_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_62223629dd05c4_28749901',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_62223629dd05c4_28749901')) {
function content_62223629dd05c4_28749901 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '194618343962223629db4623_10538697';
?>
<section class="sect-contacto"><div class="container height"><div class="row height align-items-end"><div class="col-lg-12"><h1 class="sect-contacto-title">CONTACTO</h1><p class="sect-contacto-title2"><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
home">Home</a> / <span>Contacto</span></p></div></div></div></section><section><div id="map" style="width: 100%; height: 400px;"></div></section><section class="sect-contacto2"><div class="container"><div class="row"><div class="col-lg-12"><div class="sect-contacto-numero"><h3>Celular:<strong> (+51) 993765495</strong></h3><p>Si tiene alguna pregunta o comentario sobre nosotros o su vehículo, complete un formulario de solicitud de contacto a continuación. O si lo prefiere, puede comunicarse con nosotros a la siguiente dirección:</p></div></div><div class="col-lg-3"><div class="contenedor-datos"><div class="contenedor-datos2"><i class="fa fa-map-marker"></i><h6>Dirección</h6><p>Av. Los alisos Cdra 5 </br> Los Olivos - Lima</p></div></div></div><div class="col-lg-3"><div class="contenedor-datos"><div class="contenedor-datos2"><i class="fa fa-mobile"></i><h6>Celular</h6><p>(+51) 993 765 495</br> (01) 523 7734</p></div></div></div><div class="col-lg-3"><div class="contenedor-datos"><div class="contenedor-datos2"><i class="fa fa-envelope-o"></i><h6>Correo</h6><p>ventas@exportando-online.com</p></div></div></div><div class="col-lg-3"><div class="contenedor-datos"><div class="contenedor-datos2"><i class="fa fa-clock-o"></i><h6>Horario</h6><p>Lun-Vi: 8:00 - 17:00 </br> Sábado: 9:00 - 14:00</p></div></div></div></div></div></section><section class="contact-bgcont2"><div class="container"><div class="row"><div class="col-md-12"><div class="conc1-fmras1bg1"><h2 class="titl-conc1-t1">Contacto</h2><form action="#" class="formulario" method="POST"><span class="respuesta"></span><div class="row"><div class="col-sm-4"><div class="form-group"><div class="e2e-frmCnt"><input type="text" name="name" value="" id="name" placeholder="Nombres" minlength="3" maxlength="100" style="" class="form-control e2e-inpfrm" autocomplete="off"><span aria-hidden="true" class="fa fa-user e2e-frmIcon"></span></div></div><div class="form-group"><div class="e2e-frmCnt"><input type="email" name="email" value="" id="email" placeholder="E-mail" minlength="10" maxlength="100" style="" class="form-control e2e-inpfrm" autocomplete="off"><span aria-hidden="true" class="fa fa-at e2e-frmIcon"></span></div></div><div class="form-group"><div class="e2e-frmCnt"><input type="text" name="phone" value="" id="phone" placeholder="Celular" minlength="7" maxlength="25" style="" class="form-control e2e-inpfrm" autocomplete="off"><span aria-hidden="true" class="fa fa-phone e2e-frmIcon"></span></div></div></div><div class="col-sm-8"><div class="form-group"><div class="e2e-frmCnt"><textarea name="message" cols="40" rows="6" id="message" placeholder="Mensaje" style="resize: none;" class="form-control e2e-txtareafrm messageContactoWeb"></textarea><span aria-hidden="true" class="fa fa-commenting-o e2e-frmIcon"></span></div></div><button title="View Detail" class="btn frmbtnflt">Enviar</button></div></div></form></div></div></div></div></section><?php }
}
?>