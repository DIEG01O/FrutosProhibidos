<?php /* Smarty version 3.1.27, created on 2022-03-04 12:53:54
         compiled from "/home/logosper/public_html/plantillas/new/plantilla_4/application/views/web/pagina/galeria.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:18256696326222361252a4b7_70134034%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6309111860229e21edde13ab66b859f0f7107b5d' => 
    array (
      0 => '/home/logosper/public_html/plantillas/new/plantilla_4/application/views/web/pagina/galeria.tpl',
      1 => 1530122560,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18256696326222361252a4b7_70134034',
  'variables' => 
  array (
    'base_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_6222361254dc19_43913757',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_6222361254dc19_43913757')) {
function content_6222361254dc19_43913757 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '18256696326222361252a4b7_70134034';
?>
<section class="sect-servicios"><div class="container height"><div class="row height align-items-end"><div class="col-lg-12"><h1 class="sect-servicios-title">GALERÍA</h1><p class="sect-servicios-title2"><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
home">Home</a> / <span>Galería</span></p></div></div></div></section><section class="sect_galeria"><div class="container"><div class="row"><div class="col-lg-12"><div class="box_portafolio" data-ref="mixitup-container2"><nav class="head_navigation"><ul class="controls2"><!--li><a class="control" data-filter="all">TODO</a></li--><li><a class="control" data-filter=".foto">MANTENIMIENTO DE MOTORES</a></li><li><a class="control" data-filter=".culata">MANTENIMIENTO DE CULATA</a></li><li><a class="control" data-filter=".total">MANTENIMIENTO TOTAL</a></li><!--li><a class="control" data-sort="default:asc">Asc</a></li><li><a class="control" data-sort="default:desc">Desc</a></li--></ul></nav><div class="content_mixitup"><ul class="list_mixitup" id="gallery-multimedia"><li class="item2 foto" data-ref="mixitup-target"><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
public/img/galeria/galeria1.jpg" data-facebook-share-url="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
public/img/galeria/galeria1.jpg"><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
public/img/galeria/galeria1.jpg" width="100%"></a></li><li class="item2 foto" data-ref="mixitup-target"><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
public/img/galeria/galeria2.jpg" data-facebook-share-url="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
public/img/galeria/galeria2.jpg"><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
public/img/galeria/galeria2.jpg" width="100%"></a></li><li class="item2 foto culata" data-ref="mixitup-target"><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
public/img/galeria/galeria3.jpg" data-facebook-share-url="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
public/img/galeria/galeria3.jpg"><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
public/img/galeria/galeria3.jpg" width="100%"></a></li><li class="item2 foto total culata" data-ref="mixitup-target"><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
public/img/galeria/galeria4.jpg" data-facebook-share-url="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
public/img/galeria/galeria4.jpg"><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
public/img/galeria/galeria1.jpg" width="100%"></a></li></ul></div></div></div></div></div></section><?php }
}
?>