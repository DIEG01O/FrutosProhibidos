<?php /* Smarty version 3.1.27, created on 2022-10-26 18:16:13
         compiled from "C:\xampp\htdocs\WebFrutosProhibidos\application\views\web\pagina\contacto.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:106800200263595d4dea5785_64375212%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8ec48cc9ea8e95ee3c295dde0d441e9d9d4379e5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\WebFrutosProhibidos\\application\\views\\web\\pagina\\contacto.tpl',
      1 => 1666800513,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '106800200263595d4dea5785_64375212',
  'variables' => 
  array (
    'base_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_63595d4df07062_87757426',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_63595d4df07062_87757426')) {
function content_63595d4df07062_87757426 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '106800200263595d4dea5785_64375212';
?>
<section class="sect-contacto"><div class="container height"><div class="row height align-items-end"><div class="col-lg-12"><h1 class="sect-contacto-title">CONTACTO</h1><p class="sect-contacto-title2"><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
home">Inicio</a> / <span>Contacto</span></p></div></div></div></section><section><div id="map" style="width: 100%; height: 400px;"></div></section><section class="sect-contacto2"><div class="container"><div class="row"><div class="col-lg-12"><div class="sect-contacto-numero"><h3>Celular:<strong> (+51) 988 541 137</strong></h3></div></div><div class="col-lg-3"><div class="contenedor-datos"><div class="contenedor-datos2"><i class="fa fa-map-marker"></i><h6>Dirección</h6><div class="contenedor-datos2-centerv"><div class="datos2-v"><p>Manzana E Lote 5 Cooperativa las Vertientes, Villa el Salvador</p></div></div></div></div></div><div class="col-lg-3"><div class="contenedor-datos"><div class="contenedor-datos2"><i class="fa fa-mobile"></i><h6>Celular</h6><div class="contenedor-datos2-centerv"><div class="datos2-v"><p>(+51) 988 541 137</p></div></div></div></div></div><div class="col-lg-3"><div class="contenedor-datos"><div class="contenedor-datos2"><i class="fa fa-envelope-o"></i><h6>Correo</h6><div class="contenedor-datos2-centerv"><div class="datos2-v"><p>percyguillermo<br>@elfrutoprohibido.com.pe</p></div></div></div></div></div><div class="col-lg-3"><div class="contenedor-datos"><div class="contenedor-datos2"><i class="fa fa-clock-o"></i><h6>Horario</h6><div class="contenedor-datos2-centerv"><div class="datos2-v"><p>Lun-Vi: 8:00 - 17:00 </br> Sábado: 9:00 - 14:00</p></div></div></div></div></div></div></section><section class="contact-bgcont2"><div class="container"><div class="row"><div class="col-md-12"><div class="conc1-fmras1bg1"><h2 class="titl-conc1-t1">Contacto</h2><form action="formulario/enviar2" class="formulario" method="POST"><span class="respuesta"></span><div class="row"><div class="col-sm-4"><div class="form-group"><div class="e2e-frmCnt"><input type="text" name="name" value="" id="name" placeholder="Nombres" minlength="3" maxlength="100" style="" class="form-control e2e-inpfrm" autocomplete="off"><span aria-hidden="true" class="fa fa-user e2e-frmIcon"></span></div></div><div class="form-group"><div class="e2e-frmCnt"><input type="email" name="email" value="" id="email" placeholder="E-mail" minlength="10" maxlength="100" style="" class="form-control e2e-inpfrm" autocomplete="off"><span aria-hidden="true" class="fa fa-at e2e-frmIcon"></span></div></div><div class="form-group"><div class="e2e-frmCnt"><input type="text" name="phone" value="" id="phone" placeholder="Celular" minlength="7" maxlength="25" style="" class="form-control e2e-inpfrm" autocomplete="off"><span aria-hidden="true" class="fa fa-phone e2e-frmIcon"></span></div></div></div><div class="col-sm-8"><div class="form-group"><div class="e2e-frmCnt"><textarea name="message" cols="40" rows="6" id="message" placeholder="Mensaje" style="resize: none;" class="form-control e2e-txtareafrm messageContactoWeb"></textarea><span aria-hidden="true" class="fa fa-commenting-o e2e-frmIcon"></span></div></div><button title="View Detail" class="btn frmbtnflt">Enviar</button></div></div></form></div></div></div></div></section><?php }
}
?>