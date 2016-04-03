<?php /* Smarty version Smarty-3.1-DEV, created on 2016-04-02 11:20:56
         compiled from "module_file_tpl:DesignManager;admin_defaultadmin_tpltype_tooltip.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2595356ffab18220183-01732767%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0ec8b89e68bb63bc1645f26c975e672f72a5640d' => 
    array (
      0 => 'module_file_tpl:DesignManager;admin_defaultadmin_tpltype_tooltip.tpl',
      1 => 1459595199,
      2 => 'module_file_tpl',
    ),
  ),
  'nocache_hash' => '2595356ffab18220183-01732767',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'type_id' => 0,
    'list_all_types' => 0,
    'mod' => 0,
    'tpltype' => 0,
    'org' => 0,
    'coretypename' => 0,
    'tmp' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_56ffab18240791_95379456',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56ffab18240791_95379456')) {function content_56ffab18240791_95379456($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_summarize')) include 'C:\\www\\augustharvest\\share\\plugins\\modifier.summarize.php';
?><?php if (isset($_smarty_tpl->tpl_vars['tpltype'])) {$_smarty_tpl->tpl_vars['tpltype'] = clone $_smarty_tpl->tpl_vars['tpltype'];
$_smarty_tpl->tpl_vars['tpltype']->value = $_smarty_tpl->tpl_vars['list_all_types']->value[$_smarty_tpl->tpl_vars['type_id']->value]; $_smarty_tpl->tpl_vars['tpltype']->nocache = null; $_smarty_tpl->tpl_vars['tpltype']->scope = 0;
} else $_smarty_tpl->tpl_vars['tpltype'] = new Smarty_variable($_smarty_tpl->tpl_vars['list_all_types']->value[$_smarty_tpl->tpl_vars['type_id']->value], null, 0);?><strong><?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('prompt_id');?>
:</strong>&nbsp;<?php echo $_smarty_tpl->tpl_vars['type_id']->value;?>
<br/><strong><?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('prompt_name');?>
:</strong>&nbsp;<?php echo $_smarty_tpl->tpl_vars['tpltype']->value->get_name();?>
<br/><?php if (isset($_smarty_tpl->tpl_vars['org'])) {$_smarty_tpl->tpl_vars['org'] = clone $_smarty_tpl->tpl_vars['org'];
$_smarty_tpl->tpl_vars['org']->value = $_smarty_tpl->tpl_vars['tpltype']->value->get_originator(); $_smarty_tpl->tpl_vars['org']->nocache = null; $_smarty_tpl->tpl_vars['org']->scope = 0;
} else $_smarty_tpl->tpl_vars['org'] = new Smarty_variable($_smarty_tpl->tpl_vars['tpltype']->value->get_originator(), null, 0);?><?php if ($_smarty_tpl->tpl_vars['org']->value==$_smarty_tpl->tpl_vars['coretypename']->value) {?><?php if (isset($_smarty_tpl->tpl_vars['org'])) {$_smarty_tpl->tpl_vars['org'] = clone $_smarty_tpl->tpl_vars['org'];
$_smarty_tpl->tpl_vars['org']->value = 'Core'; $_smarty_tpl->tpl_vars['org']->nocache = null; $_smarty_tpl->tpl_vars['org']->scope = 0;
} else $_smarty_tpl->tpl_vars['org'] = new Smarty_variable('Core', null, 0);?><?php }?><strong><?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('prompt_originator');?>
:</strong>&nbsp;<?php echo $_smarty_tpl->tpl_vars['org']->value;?>
<br/><?php if (isset($_smarty_tpl->tpl_vars['tmp'])) {$_smarty_tpl->tpl_vars['tmp'] = clone $_smarty_tpl->tpl_vars['tmp'];
$_smarty_tpl->tpl_vars['tmp']->value = $_smarty_tpl->tpl_vars['tpltype']->value->get_description(); $_smarty_tpl->tpl_vars['tmp']->nocache = null; $_smarty_tpl->tpl_vars['tmp']->scope = 0;
} else $_smarty_tpl->tpl_vars['tmp'] = new Smarty_variable($_smarty_tpl->tpl_vars['tpltype']->value->get_description(), null, 0);?><?php if ($_smarty_tpl->tpl_vars['tmp']->value!='') {?><strong><?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('prompt_description');?>
:</strong>&nbsp;<?php echo smarty_modifier_summarize($_smarty_tpl->tpl_vars['tpltype']->value->get_description());?>
<?php }?><?php }} ?>
