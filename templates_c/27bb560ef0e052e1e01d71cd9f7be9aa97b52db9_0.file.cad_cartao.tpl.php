<?php
/* Smarty version 4.0.3, created on 2022-11-30 19:48:34
  from '/home/carlos/projetos/seg_info/templates/cad_cartao.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.3',
  'unifunc' => 'content_6387ddc2a57af2_54714008',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '27bb560ef0e052e1e01d71cd9f7be9aa97b52db9' => 
    array (
      0 => '/home/carlos/projetos/seg_info/templates/cad_cartao.tpl',
      1 => 1669848472,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6387ddc2a57af2_54714008 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17482503166387ddc2a554c6_55739231', 'main');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "layout.tpl");
}
/* {block 'main'} */
class Block_17482503166387ddc2a554c6_55739231 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'main' => 
  array (
    0 => 'Block_17482503166387ddc2a554c6_55739231',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<?php echo $_smarty_tpl->tpl_vars['msg']->value;?>

 <h4 class="mt-1 display-4" style="font-size: 40px;">Cadastrar Cartões</h4>
<div class="container">
  <div class="row">
	<div id="sobre" class="col-md-8">
	<div class="container">
	  <form action="cad_cartao.php" method="POST">
	    <label for="titular">Titular</label>
	    <input type="text" id="titular" name="titular" required>

	    <label for="numero">Número</label>
	    <input type="text" id="numero" name="numero" required>

	    <label for="validade">Nome</label>
	    <input type="text" id="validade" name="validade" required>

	    <label for="codigo">Código de Segurança</label>
	    <input type="text" id="codigo" name="codigo_seguranca" required>
	   <br> 
	   <br> 
	    <input type="submit" name="submit" value="Submit">
	  </form>
	</div>

	</div>
  </div>
</div>
</div>

<?php
}
}
/* {/block 'main'} */
}
