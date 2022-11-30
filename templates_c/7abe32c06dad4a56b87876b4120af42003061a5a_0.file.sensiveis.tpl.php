<?php
/* Smarty version 4.0.3, created on 2022-11-30 19:55:50
  from '/home/carlos/projetos/seg_info/templates/sensiveis.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.3',
  'unifunc' => 'content_6387df76800214_45722649',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7abe32c06dad4a56b87876b4120af42003061a5a' => 
    array (
      0 => '/home/carlos/projetos/seg_info/templates/sensiveis.tpl',
      1 => 1669848948,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6387df76800214_45722649 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1476571306387df767e25e6_03817857', 'main');
?>



<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "layout.tpl");
}
/* {block 'main'} */
class Block_1476571306387df767e25e6_03817857 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'main' => 
  array (
    0 => 'Block_1476571306387df767e25e6_03817857',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<center>
<h1>Lists das tabelas login e cartões</h1>
</center>
<br>
<br>
<?php echo $_smarty_tpl->tpl_vars['msg']->value;?>

<h3>Tabelas de logins com senha SHA1</h3>
<table class="table">
<thead>
<tr>
<th>Login</th><th>Senha</th><th>Email</th><th>Nome</th>
</tr>
</thead>
   <?php
$__section_k_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['usuarios']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_k_0_total = $__section_k_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_k'] = new Smarty_Variable(array());
if ($__section_k_0_total !== 0) {
for ($__section_k_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] = 0; $__section_k_0_iteration <= $__section_k_0_total; $__section_k_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']++){
?>
        <tr>
        <td> <?php echo $_smarty_tpl->tpl_vars['usuarios']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] : null)]['login'];?>
 </td><td> <?php echo $_smarty_tpl->tpl_vars['usuarios']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] : null)]['senha'];?>
 </td><td>  <?php echo $_smarty_tpl->tpl_vars['usuarios']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] : null)]['email'];?>
 </td><td> <?php echo $_smarty_tpl->tpl_vars['usuarios']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] : null)]['nome'];?>
 </td>
        </tr>
<?php
}
}
?>
</table>

<br>
<br>
<hr>
<br>

<h3>Tabelas de cartões com dados criptografados</h3>
<table class="table">
<thead>
<tr>
<th>Titular</th><th>Número</th><th>Validade</th><th>Código Segurança</th>
</tr>
</thead>
   <?php
$__section_i_1_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['cartoes']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_1_total = $__section_i_1_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_1_total !== 0) {
for ($__section_i_1_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_1_iteration <= $__section_i_1_total; $__section_i_1_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
        <tr>
        <td> <?php echo $_smarty_tpl->tpl_vars['cartoes']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['titular'];?>
 </td><td>  <?php echo $_smarty_tpl->tpl_vars['cartoes']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['numero'];?>
 </td><td>  <?php echo $_smarty_tpl->tpl_vars['cartoes']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['validade'];?>
 </td><td>  <?php echo $_smarty_tpl->tpl_vars['cartoes']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['codigo_seguranca'];?>
 </td>
        </tr>
<?php
}
}
?>
</table>

<br>
<br>
<hr>
<br>

<h3>Tabelas de cartões com dados descriptografados</h3>
<table class="table">
<thead>
<tr>
<th>Titular</th><th>Número</th><th>Validade</th><th>Código Segurança</th>
</tr>
</thead>
   <?php
$__section_l_2_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['decriptografado']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_l_2_total = $__section_l_2_loop;
$_smarty_tpl->tpl_vars['__smarty_section_l'] = new Smarty_Variable(array());
if ($__section_l_2_total !== 0) {
for ($__section_l_2_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_l']->value['index'] = 0; $__section_l_2_iteration <= $__section_l_2_total; $__section_l_2_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_l']->value['index']++){
?>
        <tr>
        <td> <?php echo $_smarty_tpl->tpl_vars['decriptografado']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_l']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_l']->value['index'] : null)]['titular'];?>
 </td><td>  <?php echo $_smarty_tpl->tpl_vars['decriptografado']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_l']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_l']->value['index'] : null)]['numero'];?>
 </td><td>  <?php echo $_smarty_tpl->tpl_vars['decriptografado']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_l']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_l']->value['index'] : null)]['validade'];?>
 </td><td>  <?php echo $_smarty_tpl->tpl_vars['decriptografado']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_l']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_l']->value['index'] : null)]['codigo_seguranca'];?>
 </td>
        </tr>
<?php
}
}
?>
</table>
<?php
}
}
/* {/block 'main'} */
}
