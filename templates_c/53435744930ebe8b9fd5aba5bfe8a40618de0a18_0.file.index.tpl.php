<?php
/* Smarty version 4.0.3, created on 2022-11-30 16:30:05
  from '/home/carlos/projetos/seg_info/templates/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.3',
  'unifunc' => 'content_6387af3d194b22_04632667',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '53435744930ebe8b9fd5aba5bfe8a40618de0a18' => 
    array (
      0 => '/home/carlos/projetos/seg_info/templates/index.tpl',
      1 => 1669835282,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6387af3d194b22_04632667 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10763633726387af3d1941f6_19014756', 'main');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "layout.tpl");
}
/* {block 'main'} */
class Block_10763633726387af3d1941f6_19014756 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'main' => 
  array (
    0 => 'Block_10763633726387af3d1941f6_19014756',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<?php echo $_smarty_tpl->tpl_vars['msg']->value;?>

<div class="container">
  <div class="row">
	<div id="sobre" class="col-md-6">
	  <h4 class="mt-1 display-4" style="font-size: 40px;">Login</h4>
	<div class="container">
	  <form action="index.php" method="POST">
	    <label for="Login">Login</label>
	    <input type="text" id="Login" name="login" required>

	    <label for="senha">Senha</label>
	    <input type="password" id="senha" name="senha" required>
	   <br> 
	   <br> 
	    <input type="submit" name="submit" value="Submit">
	  </form>
	</div>

	</div>
  </div>
</div>

<?php
}
}
/* {/block 'main'} */
}
