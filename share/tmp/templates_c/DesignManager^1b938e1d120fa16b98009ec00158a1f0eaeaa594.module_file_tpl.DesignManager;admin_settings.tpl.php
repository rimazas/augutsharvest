<?php /* Smarty version Smarty-3.1-DEV, created on 2016-04-02 11:19:54
         compiled from "module_file_tpl:DesignManager;admin_settings.tpl" */ ?>
<?php /*%%SmartyHeaderCode:606056ffaada9b62d2-76025917%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1b938e1d120fa16b98009ec00158a1f0eaeaa594' => 
    array (
      0 => 'module_file_tpl:DesignManager;admin_settings.tpl',
      1 => 1459595199,
      2 => 'module_file_tpl',
    ),
  ),
  'nocache_hash' => '606056ffaada9b62d2-76025917',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'actionid' => 0,
    'mod' => 0,
    'lock_timeout' => 0,
    'lock_refresh' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_56ffaadaa03533_39297374',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56ffaadaa03533_39297374')) {function content_56ffaadaa03533_39297374($_smarty_tpl) {?><?php if (!is_callable('smarty_function_form_start')) include 'C:\\www\\augustharvest\\share\\plugins\\function.form_start.php';
if (!is_callable('smarty_function_cms_help')) include 'C:\\www\\augustharvest\\share\\admin/plugins\\function.cms_help.php';
if (!is_callable('smarty_function_form_end')) include 'C:\\www\\augustharvest\\share\\plugins\\function.form_end.php';
?><?php echo smarty_function_form_start(array(),$_smarty_tpl);?>

<div class="pageoverflow">
  <p class="pagetext"></p>
  <p class="pageinput">
    <input type="submit" name="<?php echo $_smarty_tpl->tpl_vars['actionid']->value;?>
submit" value="<?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('submit');?>
"/>
  </p>
</div>
<fieldset>
  <legend><?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('prompt_locksettings');?>
:</legend>
  <div class="pageoverflow">
    <p class="pagetext"><label for="locktimeout"><?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('lock_timeout');?>
:</label>&nbsp;<?php echo smarty_function_cms_help(array('key2'=>'help_locktimeout','title'=>$_smarty_tpl->tpl_vars['mod']->value->Lang('lock_timeout')),$_smarty_tpl);?>
</p>
    <p class="pageinput">
      <input id="locktimeout" type="text" name="<?php echo $_smarty_tpl->tpl_vars['actionid']->value;?>
lock_timeout" value="<?php echo $_smarty_tpl->tpl_vars['lock_timeout']->value;?>
" size="3" maxlength="3"/>
    </p>
  </div>
  <div class="pageoverflow">
    <p class="pagetext"><label for="lockrefresh"><?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('lock_refresh');?>
:</label>&nbsp;<?php echo smarty_function_cms_help(array('key2'=>'help_lockrefresh','title'=>$_smarty_tpl->tpl_vars['mod']->value->Lang('lock_refresh')),$_smarty_tpl);?>
</p>
    <p class="pageinput">
      <input id="lockrefresh" type="text" name="<?php echo $_smarty_tpl->tpl_vars['actionid']->value;?>
lock_refresh" value="<?php echo $_smarty_tpl->tpl_vars['lock_refresh']->value;?>
" size="4" maxlength="4"/>
    </p>
  </div>
</fieldset>
<?php echo smarty_function_form_end(array(),$_smarty_tpl);?>
<?php }} ?>
