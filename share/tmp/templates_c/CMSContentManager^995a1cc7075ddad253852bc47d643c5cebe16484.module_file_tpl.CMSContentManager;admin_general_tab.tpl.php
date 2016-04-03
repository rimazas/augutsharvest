<?php /* Smarty version Smarty-3.1-DEV, created on 2016-04-02 11:19:49
         compiled from "module_file_tpl:CMSContentManager;admin_general_tab.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2808956ffaad5b05356-29198774%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '995a1cc7075ddad253852bc47d643c5cebe16484' => 
    array (
      0 => 'module_file_tpl:CMSContentManager;admin_general_tab.tpl',
      1 => 1459595198,
      2 => 'module_file_tpl',
    ),
  ),
  'nocache_hash' => '2808956ffaad5b05356-29198774',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'actionid' => 0,
    'mod' => 0,
    'locktimeout' => 0,
    'lockrefresh' => 0,
    'template_list_opts' => 0,
    'template_list_mode' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_56ffaad5b5bde4_42312565',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56ffaad5b5bde4_42312565')) {function content_56ffaad5b5bde4_42312565($_smarty_tpl) {?><?php if (!is_callable('smarty_function_form_start')) include 'C:\\www\\augustharvest\\share\\plugins\\function.form_start.php';
if (!is_callable('smarty_function_cms_help')) include 'C:\\www\\augustharvest\\share\\admin/plugins\\function.cms_help.php';
if (!is_callable('smarty_function_html_options')) include 'C:\\www\\augustharvest\\share\\lib\\smarty\\plugins\\function.html_options.php';
if (!is_callable('smarty_function_form_end')) include 'C:\\www\\augustharvest\\share\\plugins\\function.form_end.php';
?><?php echo smarty_function_form_start(array('action'=>'admin_general_tab'),$_smarty_tpl);?>

<div class="pageoverflow">
  <p class="pagetext"></p>
  <p class="pageinput">
    <input type="submit" name="<?php echo $_smarty_tpl->tpl_vars['actionid']->value;?>
submit" value="<?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('submit');?>
" accesskey="s"/>
  </p>
</div>
<div class="pageoverflow">
  <p class="pagetext"><label for="locktimeout"><?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('prompt_locktimeout');?>
:</label>&nbsp;<?php echo smarty_function_cms_help(array('key2'=>'help_general_locktimeout','title'=>$_smarty_tpl->tpl_vars['mod']->value->Lang('prompt_locktimeout')),$_smarty_tpl);?>
</p>
  <p class="pageinput">
    <input type="text" name="<?php echo $_smarty_tpl->tpl_vars['actionid']->value;?>
locktimeout" value="<?php echo $_smarty_tpl->tpl_vars['locktimeout']->value;?>
" size="3" maxlength="3"/>
  </p>
</div>
<div class="pageoverflow">
  <p class="pagetext"><label for="lockrefresh"><?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('prompt_lockrefresh');?>
:</label>&nbsp;<?php echo smarty_function_cms_help(array('key2'=>'help_general_lockrefresh','title'=>$_smarty_tpl->tpl_vars['mod']->value->Lang('prompt_lockrefresh')),$_smarty_tpl);?>
</p>
  <p class="pageinput">
    <input type="text" name="<?php echo $_smarty_tpl->tpl_vars['actionid']->value;?>
lockrefresh" value="<?php echo $_smarty_tpl->tpl_vars['lockrefresh']->value;?>
" size="4" maxlength="4"/>
  </p>
</div>
<div class="pageoverflow">
  <p class="pagetext"><label for="lockrefresh"><?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('prompt_template_list_mode');?>
:</label>&nbsp;<?php echo smarty_function_cms_help(array('key2'=>'help_general_templatelistmode','title'=>$_smarty_tpl->tpl_vars['mod']->value->Lang('prompt_template_list_mode')),$_smarty_tpl);?>
</p>
  <p class="pageinput">
    <select name="<?php echo $_smarty_tpl->tpl_vars['actionid']->value;?>
template_list_mode">
    <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['template_list_opts']->value,'selected'=>$_smarty_tpl->tpl_vars['template_list_mode']->value),$_smarty_tpl);?>

    </select>
  </p>
</div>
<?php echo smarty_function_form_end(array(),$_smarty_tpl);?>
<?php }} ?>
