<?php /* Smarty version Smarty-3.1.18, created on 2016-12-09 11:39:05
         compiled from "views\edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:238358484d9d6de960-18285223%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1a2f77791ce204354e8b110a5ce8212db9cb8288' => 
    array (
      0 => 'views\\edit.tpl',
      1 => 1481279943,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '238358484d9d6de960-18285223',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_58484d9d7373c9_65032972',
  'variables' => 
  array (
    'result' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58484d9d7373c9_65032972')) {function content_58484d9d7373c9_65032972($_smarty_tpl) {?><form method="post">
  
   <input type="text" name="schoolname" value="<?php echo $_smarty_tpl->tpl_vars['result']->value[0]['schoolname'];?>
">
   <input type="text" name="adress" value="<?php echo $_smarty_tpl->tpl_vars['result']->value[0]['adress'];?>
">
   <input type="submit" name="submit_update">
    
</form>

<?php }} ?>
