<?php /* Smarty version Smarty-3.1-DEV, created on 2016-04-02 11:16:08
         compiled from "module_file_tpl:FileManager;newdir.tpl" */ ?>
<?php /*%%SmartyHeaderCode:435456ffa9f8d1f1d8-95752424%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e2f566efaf576c09742f2ff50f175c0d9a2acd22' => 
    array (
      0 => 'module_file_tpl:FileManager;newdir.tpl',
      1 => 1459595200,
      2 => 'module_file_tpl',
    ),
  ),
  'nocache_hash' => '435456ffa9f8d1f1d8-95752424',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'startform' => 0,
    'mod' => 0,
    'actionid' => 0,
    'newdirname' => 0,
    'submit' => 0,
    'cancel' => 0,
    'endform' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_56ffa9f8d56907_35458422',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56ffa9f8d56907_35458422')) {function content_56ffa9f8d56907_35458422($_smarty_tpl) {?><?php echo $_smarty_tpl->tpl_vars['startform']->value;?>

<div class="pageoverflow">
  <p class="pagetext"><label for="newdir"><?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('newdir');?>
:</label></p>
  <p class="pageinput"><input type="text" name="<?php echo $_smarty_tpl->tpl_vars['actionid']->value;?>
newdirname" id="newdir" value="<?php echo $_smarty_tpl->tpl_vars['newdirname']->value;?>
" size="40"/></p>
</div>

<div class="pageoverflow">
  <p class="pagetext"></p>
  <p class="pageinput"><?php echo $_smarty_tpl->tpl_vars['submit']->value;?>
<?php echo $_smarty_tpl->tpl_vars['cancel']->value;?>
</p>
</div>
<?php echo $_smarty_tpl->tpl_vars['endform']->value;?>
<?php }} ?>
