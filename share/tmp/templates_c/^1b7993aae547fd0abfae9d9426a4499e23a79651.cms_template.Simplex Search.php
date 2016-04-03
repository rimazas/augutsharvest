<?php /* Smarty version Smarty-3.1-DEV, created on 2016-04-02 11:07:08
         compiled from "cms_template:Simplex Search" */ ?>
<?php /*%%SmartyHeaderCode:1453656ffa7dcbac815-78725271%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1b7993aae547fd0abfae9d9426a4499e23a79651' => 
    array (
      0 => 'cms_template:Simplex Search',
      1 => '1459595220',
      2 => 'cms_template',
    ),
  ),
  'nocache_hash' => '1453656ffa7dcbac815-78725271',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'startform' => 0,
    'search_actionid' => 0,
    'searchprompt' => 0,
    'searchtext' => 0,
    'hidden' => 0,
    'endform' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_56ffa7dcbb9ec2_23687514',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56ffa7dcbb9ec2_23687514')) {function content_56ffa7dcbb9ec2_23687514($_smarty_tpl) {?><div class='five-col search noprint' role='search'>
    <?php echo $_smarty_tpl->tpl_vars['startform']->value;?>

        <label for='<?php echo $_smarty_tpl->tpl_vars['search_actionid']->value;?>
searchinput' class='visuallyhidden'><?php echo $_smarty_tpl->tpl_vars['searchprompt']->value;?>
:</label>
        <input type='search' class='search-input' id='<?php echo $_smarty_tpl->tpl_vars['search_actionid']->value;?>
searchinput' name='<?php echo $_smarty_tpl->tpl_vars['search_actionid']->value;?>
searchinput' size='20' maxlength='50' value='' placeholder='<?php echo $_smarty_tpl->tpl_vars['searchtext']->value;?>
' /><i class='icon-search' aria-hidden='true'></i>
        <?php if (isset($_smarty_tpl->tpl_vars['hidden']->value)) {?><?php echo $_smarty_tpl->tpl_vars['hidden']->value;?>
<?php }?>
    <?php echo $_smarty_tpl->tpl_vars['endform']->value;?>

</div><?php }} ?>
