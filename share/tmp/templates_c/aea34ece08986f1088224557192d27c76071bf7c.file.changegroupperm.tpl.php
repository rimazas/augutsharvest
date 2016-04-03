<?php /* Smarty version Smarty-3.1-DEV, created on 2016-04-02 11:20:44
         compiled from "C:\www\augustharvest\share\admin\templates\changegroupperm.tpl" */ ?>
<?php /*%%SmartyHeaderCode:708856ffab0ccefac1-42847930%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'aea34ece08986f1088224557192d27c76071bf7c' => 
    array (
      0 => 'C:\\www\\augustharvest\\share\\admin\\templates\\changegroupperm.tpl',
      1 => 1459595196,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '708856ffab0ccefac1-42847930',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'message' => 0,
    'filter_action' => 0,
    'cms_secure_param_name' => 0,
    'cms_user_key' => 0,
    'selectgroup' => 0,
    'allgroups' => 0,
    'thisgroup' => 0,
    'disp_group' => 0,
    'apply' => 0,
    'form_start' => 0,
    'hidden' => 0,
    'hidden2' => 0,
    'submit' => 0,
    'cancel' => 0,
    'title_permission' => 0,
    'group_list' => 0,
    'perms' => 0,
    'currow' => 0,
    'perm' => 0,
    'gid' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_56ffab0cd7aea9_93221064',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56ffab0cd7aea9_93221064')) {function content_56ffab0cd7aea9_93221064($_smarty_tpl) {?><?php if (!is_callable('smarty_function_cms_help')) include 'C:\\www\\augustharvest\\share\\admin/plugins\\function.cms_help.php';
if (!is_callable('smarty_function_cycle')) include 'C:\\www\\augustharvest\\share\\lib\\smarty\\plugins\\function.cycle.php';
?><?php if (isset($_smarty_tpl->tpl_vars['message']->value)) {?>
<p class="pageheader"><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</p>
<?php }?>

<div class="information"><?php echo lang('info_changegroupperms');?>
<?php echo smarty_function_cms_help(array('key2'=>'help_group_permissions','title'=>lang('info_changegroupperms')),$_smarty_tpl);?>
</div>

<div class="pageoverflow">
<form method="post" action="<?php echo $_smarty_tpl->tpl_vars['filter_action']->value;?>
">
<div class="hidden">
  <input type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['cms_secure_param_name']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['cms_user_key']->value;?>
" />
</div>
	<b><?php echo $_smarty_tpl->tpl_vars['selectgroup']->value;?>
:</b>&nbsp;
        <select name="groupsel" id="groupsel">
	<?php  $_smarty_tpl->tpl_vars['thisgroup'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['thisgroup']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['allgroups']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['thisgroup']->key => $_smarty_tpl->tpl_vars['thisgroup']->value) {
$_smarty_tpl->tpl_vars['thisgroup']->_loop = true;
?>
           <?php if ($_smarty_tpl->tpl_vars['thisgroup']->value->id==$_smarty_tpl->tpl_vars['disp_group']->value) {?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['thisgroup']->value->id;?>
" selected="selected"><?php echo $_smarty_tpl->tpl_vars['thisgroup']->value->name;?>
</option>
           <?php } else { ?>
		<option value="<?php echo $_smarty_tpl->tpl_vars['thisgroup']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['thisgroup']->value->name;?>
</option>
           <?php }?>
	<?php } ?>
	</select>&nbsp;
        <input type="submit" name="filter" value="<?php echo $_smarty_tpl->tpl_vars['apply']->value;?>
"/>
</form>
</div><br />

<?php echo $_smarty_tpl->tpl_vars['form_start']->value;?>

<div class="hidden">
  <input type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['cms_secure_param_name']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['cms_user_key']->value;?>
" />
</div>
<div class="pageoverflow">
  <p class="pageoptions">
    <?php echo $_smarty_tpl->tpl_vars['hidden']->value;?>
<?php echo $_smarty_tpl->tpl_vars['hidden2']->value;?>

    <?php echo $_smarty_tpl->tpl_vars['submit']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['cancel']->value;?>

  </p>
</div>
<table class="pagetable scrollable" id="permtable">
  <thead>
  <tr>
    <th><?php echo $_smarty_tpl->tpl_vars['title_permission']->value;?>
</th>
	<?php  $_smarty_tpl->tpl_vars['thisgroup'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['thisgroup']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['group_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['thisgroup']->key => $_smarty_tpl->tpl_vars['thisgroup']->value) {
$_smarty_tpl->tpl_vars['thisgroup']->_loop = true;
?>
		<?php if ($_smarty_tpl->tpl_vars['thisgroup']->value->id!=-1) {?><th class="g<?php echo $_smarty_tpl->tpl_vars['thisgroup']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['thisgroup']->value->name;?>
</th><?php }?>
	<?php } ?>
 </tr>
  </thead>
  <tbody>
  <?php  $_smarty_tpl->tpl_vars['perm'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['perm']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['perms']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['perm']->key => $_smarty_tpl->tpl_vars['perm']->value) {
$_smarty_tpl->tpl_vars['perm']->_loop = true;
?>
    <?php echo smarty_function_cycle(array('values'=>'row1,row2','assign'=>'currow'),$_smarty_tpl);?>

    <tr class="<?php echo $_smarty_tpl->tpl_vars['currow']->value;?>
">
 		<td><?php echo $_smarty_tpl->tpl_vars['perm']->value->name;?>
</td>
		<?php  $_smarty_tpl->tpl_vars['thisgroup'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['thisgroup']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['group_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['thisgroup']->key => $_smarty_tpl->tpl_vars['thisgroup']->value) {
$_smarty_tpl->tpl_vars['thisgroup']->_loop = true;
?>
			<?php if ($_smarty_tpl->tpl_vars['thisgroup']->value->id!=-1) {?>
			<?php if (isset($_smarty_tpl->tpl_vars["gid"])) {$_smarty_tpl->tpl_vars["gid"] = clone $_smarty_tpl->tpl_vars["gid"];
$_smarty_tpl->tpl_vars["gid"]->value = $_smarty_tpl->tpl_vars['thisgroup']->value->id; $_smarty_tpl->tpl_vars["gid"]->nocache = null; $_smarty_tpl->tpl_vars["gid"]->scope = 0;
} else $_smarty_tpl->tpl_vars["gid"] = new Smarty_variable($_smarty_tpl->tpl_vars['thisgroup']->value->id, null, 0);?>
			<td class="g<?php echo $_smarty_tpl->tpl_vars['thisgroup']->value->id;?>
"><input type="checkbox" name="pg_<?php echo $_smarty_tpl->tpl_vars['perm']->value->id;?>
_<?php echo $_smarty_tpl->tpl_vars['gid']->value;?>
" value="1"<?php if (isset($_smarty_tpl->tpl_vars['perm']->value->group[$_smarty_tpl->tpl_vars['gid']->value])||$_smarty_tpl->tpl_vars['gid']->value==1) {?> checked="checked"<?php }?> <?php if ($_smarty_tpl->tpl_vars['gid']->value==1) {?> disabled="disabled"<?php }?> /></td>
			<?php }?>
		<?php } ?>
    </tr>
  <?php } ?>
  </tbody>
</table>

<div class="pageoverflow">
  <p class="pageoptions">
    <?php echo $_smarty_tpl->tpl_vars['hidden']->value;?>

    <?php echo $_smarty_tpl->tpl_vars['submit']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['cancel']->value;?>

  </p>
</div>
</form><?php }} ?>
