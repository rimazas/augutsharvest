<?php /* Smarty version Smarty-3.1-DEV, created on 2016-04-02 11:19:49
         compiled from "module_file_tpl:CMSContentManager;admin_listsettings_tab.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1791856ffaad5b7f443-85112237%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '618a7dc8cb94907d463c6b42b684af4825d2610f' => 
    array (
      0 => 'module_file_tpl:CMSContentManager;admin_listsettings_tab.tpl',
      1 => 1459595198,
      2 => 'module_file_tpl',
    ),
  ),
  'nocache_hash' => '1791856ffaad5b7f443-85112237',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'actionid' => 0,
    'mod' => 0,
    'namecolumnopts' => 0,
    'list_namecolumn' => 0,
    'visible_column_opts' => 0,
    'list_visiblecolumns' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_56ffaad5b9dee8_43073566',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56ffaad5b9dee8_43073566')) {function content_56ffaad5b9dee8_43073566($_smarty_tpl) {?><?php if (!is_callable('smarty_function_form_start')) include 'C:\\www\\augustharvest\\share\\plugins\\function.form_start.php';
if (!is_callable('smarty_function_cms_help')) include 'C:\\www\\augustharvest\\share\\admin/plugins\\function.cms_help.php';
if (!is_callable('smarty_function_html_options')) include 'C:\\www\\augustharvest\\share\\lib\\smarty\\plugins\\function.html_options.php';
if (!is_callable('smarty_function_form_end')) include 'C:\\www\\augustharvest\\share\\plugins\\function.form_end.php';
?><?php echo smarty_function_form_start(array('action'=>'admin_listsettings_tab'),$_smarty_tpl);?>

<div class="pageoverflow">
	<p class="pagetext"></p>
	<p class="pageinput">
		<input type="submit" name="<?php echo $_smarty_tpl->tpl_vars['actionid']->value;?>
submit" value="<?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('submit');?>
" accesskey="s"/>
	</p>
</div>
<div class="pageoverflow">
	<p class="pagetext"><label for="namecolumn"><?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('prompt_list_namecolumn');?>
:</label>&nbsp;<?php echo smarty_function_cms_help(array('key2'=>'help_listsettings_namecolumn','title'=>$_smarty_tpl->tpl_vars['mod']->value->Lang('prompt_list_namecolumn')),$_smarty_tpl);?>
</p>
	<p class="pageinput">
		<select id="namecolumn" name="<?php echo $_smarty_tpl->tpl_vars['actionid']->value;?>
list_namecolumn">
			<?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['namecolumnopts']->value,'selected'=>$_smarty_tpl->tpl_vars['list_namecolumn']->value),$_smarty_tpl);?>

		</select></p>
</div>
<div class="pageoverflow">
	<p class="pagetext"><label for="visiblecolumns"><?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('prompt_list_visiblecolumns');?>
:</label>&nbsp;<?php echo smarty_function_cms_help(array('key2'=>'help_listsettings_visiblecolumns','title'=>$_smarty_tpl->tpl_vars['mod']->value->Lang('prompt_list_visiblecolumns')),$_smarty_tpl);?>
</p>
	<p class="pageinput">
		<select id="visiblecolumns" name="<?php echo $_smarty_tpl->tpl_vars['actionid']->value;?>
list_visiblecolumns[]" multiple="multiple" size="5">
			<?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['visible_column_opts']->value,'selected'=>$_smarty_tpl->tpl_vars['list_visiblecolumns']->value),$_smarty_tpl);?>

		</select></p>
</div>
<?php echo smarty_function_form_end(array(),$_smarty_tpl);?>
<?php }} ?>
