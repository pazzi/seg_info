<?php
/* Smarty version 4.0.3, created on 2022-11-30 19:29:50
  from '/home/carlos/projetos/seg_info/templates/cadastrar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.3',
  'unifunc' => 'content_6387d95ea9cb20_28326480',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '66a1b52651f3c11f09d09d76969288351532113c' => 
    array (
      0 => '/home/carlos/projetos/seg_info/templates/cadastrar.tpl',
      1 => 1669847141,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6387d95ea9cb20_28326480 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1399948056387d95ea99b21_19759007', 'main');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "layout.tpl");
}
/* {block 'main'} */
class Block_1399948056387d95ea99b21_19759007 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'main' => 
  array (
    0 => 'Block_1399948056387d95ea99b21_19759007',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<?php echo $_smarty_tpl->tpl_vars['msg']->value;?>

	  <h4 class="mt-1 display-4" style="font-size: 40px;">Login</h4>
<div class="container">
  <div class="row">
	<div id="sobre" class="col-md-8">
	<div class="container">
	  <form action="cadastrar.php" method="POST">
	    <label for="Login">Cadastramento de usuários</label>
	    <input type="text" id="Login" name="login" required>

	    <label for="senha">Senha</label>
	    <input type="password" id="senha" name="senha" required>

	    <label for="senha">Nome</label>
	    <input type="text" id="nome" name="nome" required>

	    <label for="email">E-Mail</label>
	    <input type="text" id="email" name="email" required>
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
