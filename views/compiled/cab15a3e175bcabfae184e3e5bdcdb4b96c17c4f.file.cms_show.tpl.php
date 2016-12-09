<?php /* Smarty version Smarty-3.1.18, created on 2016-12-09 12:07:14
         compiled from "views\cms_show.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1310558482c638b85c8-91082435%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cab15a3e175bcabfae184e3e5bdcdb4b96c17c4f' => 
    array (
      0 => 'views\\cms_show.tpl',
      1 => 1481281631,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1310558482c638b85c8-91082435',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_58482c6391d933_46310972',
  'variables' => 
  array (
    'result' => 0,
    'oneItem' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58482c6391d933_46310972')) {function content_58482c6391d933_46310972($_smarty_tpl) {?><style>
    td {
    border: 1px solid black;}
</style>
<table>
 <?php  $_smarty_tpl->tpl_vars['oneItem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['oneItem']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['result']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['oneItem']->key => $_smarty_tpl->tpl_vars['oneItem']->value) {
$_smarty_tpl->tpl_vars['oneItem']->_loop = true;
?>
 <tr>
     <td><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['schoolname'];?>
</td>    
     <td><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['adress'];?>
</td>
     <td><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['zipcode'];?>
</td>
     <td><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['district'];?>
</td>
     <td><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['telnr'];?>
</td>
     <td><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['email'];?>
</td>
     <td><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['website'];?>
</td>
     <td><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['openday'];?>
</td>
     <td><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['infonight'];?>
</td>
     <td><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['private'];?>
</td>
     <td><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['level'];?>
</td>
     <td><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['concept'];?>
</td>
     <td><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['specials'];?>
</td>
     <td><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['tto'];?>
</td>
     <td><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['sports'];?>
</td>
     <td><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['tech'];?>
</td>
     <td><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['spanish'];?>
</td>
     <td><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['vso'];?>
</td>
     <td><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['vmboB'];?>
</td>
     <td><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['vmboK'];?>
</td>
     <td><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['vmboT'];?>
</td>
     <td><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['havo'];?>
</td>
     <td><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['vwo'];?>
</td>
     <td><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['gymnasium'];?>
</td>
     <td><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['basis'];?>
</td>
     <td><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['art'];?>
</td>
    </tr>
    <th><a href="?action=admin&cms_action=edit&id=<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['ID'];?>
">edit</a></th>
    <th><a href="?action=admin&cms_action=delete&id=<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['ID'];?>
">delete</a></th>
   <?php } ?>
</table>
<a href="?action=admin&cms_action=insert">add new</a>
<?php }} ?>
