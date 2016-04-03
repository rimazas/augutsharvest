<?php /* Smarty version Smarty-3.1-DEV, created on 2016-04-02 11:20:38
         compiled from "C:\www\augustharvest\share\admin\templates\changeusergroup.tpl" */ ?>
<?php /*%%SmartyHeaderCode:894756ffab06ebf293-02063201%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '01cc473ab31c9aaddd8000b94e023b2b74617b11' => 
    array (
      0 => 'C:\\www\\augustharvest\\share\\admin\\templates\\changeusergroup.tpl',
      1 => 1459595196,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '894756ffab06ebf293-02063201',
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
    'submit' => 0,
    'cancel' => 0,
    'group_list' => 0,
    'title_group' => 0,
    'group_count' => 0,
    'tag' => 0,
    'title' => 0,
    'text' => 0,
    'users' => 0,
    'currow' => 0,
    'user' => 0,
    'user_id' => 0,
    'gid' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_56ffab07043eb4_32256422',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56ffab07043eb4_32256422')) {function content_56ffab07043eb4_32256422($_smarty_tpl) {?><?php if (!is_callable('smarty_function_cms_help')) include 'C:\\www\\augustharvest\\share\\admin/plugins\\function.cms_help.php';
if (!is_callable('smarty_function_cycle')) include 'C:\\www\\augustharvest\\share\\lib\\smarty\\plugins\\function.cycle.php';
?><div class="information"><?php echo lang('info_changeusergroup');?>
&nbsp;<?php echo smarty_function_cms_help(array('key2'=>'help_group_permissions','title'=>lang('info_changeusergroup')),$_smarty_tpl);?>
</div>



<?php if (isset($_smarty_tpl->tpl_vars['message']->value)) {?>
<p class="pagemessage"><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</p>
<?php }?>

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
<?php echo (($tmp = @$_smarty_tpl->tpl_vars['hidden']->value)===null||$tmp==='' ? '' : $tmp);?>

<div class="hidden">
  <input type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['cms_secure_param_name']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['cms_user_key']->value;?>
" />
</div>
<div class="pageoptions">
    <?php echo $_smarty_tpl->tpl_vars['submit']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['cancel']->value;?>

</div>
<?php if (isset($_smarty_tpl->tpl_vars['group_count'])) {$_smarty_tpl->tpl_vars['group_count'] = clone $_smarty_tpl->tpl_vars['group_count'];
$_smarty_tpl->tpl_vars['group_count']->value = count($_smarty_tpl->tpl_vars['group_list']->value); $_smarty_tpl->tpl_vars['group_count']->nocache = null; $_smarty_tpl->tpl_vars['group_count']->scope = 0;
} else $_smarty_tpl->tpl_vars['group_count'] = new Smarty_variable(count($_smarty_tpl->tpl_vars['group_list']->value), null, 0);?>
<table class="pagetable" id="permtable">
  <thead>
  <tr>
    <th><?php if (isset($_smarty_tpl->tpl_vars['title_group']->value)) {?><?php echo $_smarty_tpl->tpl_vars['title_group']->value;?>
<?php }?></th>
    <?php  $_smarty_tpl->tpl_vars['thisgroup'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['thisgroup']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['group_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['thisgroup']->key => $_smarty_tpl->tpl_vars['thisgroup']->value) {
$_smarty_tpl->tpl_vars['thisgroup']->_loop = true;
?>
      <?php if ($_smarty_tpl->tpl_vars['thisgroup']->value->id!=-1) {?>
        <?php if (isset($_smarty_tpl->tpl_vars['title'])) {$_smarty_tpl->tpl_vars['title'] = clone $_smarty_tpl->tpl_vars['title'];
$_smarty_tpl->tpl_vars['title']->value = ''; $_smarty_tpl->tpl_vars['title']->nocache = null; $_smarty_tpl->tpl_vars['title']->scope = 0;
} else $_smarty_tpl->tpl_vars['title'] = new Smarty_variable('', null, 0);?>
        <?php if (isset($_smarty_tpl->tpl_vars['text'])) {$_smarty_tpl->tpl_vars['text'] = clone $_smarty_tpl->tpl_vars['text'];
$_smarty_tpl->tpl_vars['text']->value = $_smarty_tpl->tpl_vars['thisgroup']->value->name; $_smarty_tpl->tpl_vars['text']->nocache = null; $_smarty_tpl->tpl_vars['text']->scope = 0;
} else $_smarty_tpl->tpl_vars['text'] = new Smarty_variable($_smarty_tpl->tpl_vars['thisgroup']->value->name, null, 0);?>
        <?php if (isset($_smarty_tpl->tpl_vars['tag'])) {$_smarty_tpl->tpl_vars['tag'] = clone $_smarty_tpl->tpl_vars['tag'];
$_smarty_tpl->tpl_vars['tag']->value = 'span'; $_smarty_tpl->tpl_vars['tag']->nocache = null; $_smarty_tpl->tpl_vars['tag']->scope = 0;
} else $_smarty_tpl->tpl_vars['tag'] = new Smarty_variable('span', null, 0);?>
        <?php if (!$_smarty_tpl->tpl_vars['thisgroup']->value->active) {?>
          <?php if (isset($_smarty_tpl->tpl_vars['tag'])) {$_smarty_tpl->tpl_vars['tag'] = clone $_smarty_tpl->tpl_vars['tag'];
$_smarty_tpl->tpl_vars['tag']->value = 'em'; $_smarty_tpl->tpl_vars['tag']->nocache = null; $_smarty_tpl->tpl_vars['tag']->scope = 0;
} else $_smarty_tpl->tpl_vars['tag'] = new Smarty_variable('em', null, 0);?>
          <?php if (isset($_smarty_tpl->tpl_vars['title'])) {$_smarty_tpl->tpl_vars['title'] = clone $_smarty_tpl->tpl_vars['title'];
$_smarty_tpl->tpl_vars['title']->value = lang('info_group_inactive'); $_smarty_tpl->tpl_vars['title']->nocache = null; $_smarty_tpl->tpl_vars['title']->scope = 0;
} else $_smarty_tpl->tpl_vars['title'] = new Smarty_variable(lang('info_group_inactive'), null, 0);?>
          <?php if (isset($_smarty_tpl->tpl_vars['text'])) {$_smarty_tpl->tpl_vars['text'] = clone $_smarty_tpl->tpl_vars['text'];
$_smarty_tpl->tpl_vars['text']->value = $_smarty_tpl->tpl_vars['thisgroup']->value->name; $_smarty_tpl->tpl_vars['text']->nocache = null; $_smarty_tpl->tpl_vars['text']->scope = 0;
} else $_smarty_tpl->tpl_vars['text'] = new Smarty_variable($_smarty_tpl->tpl_vars['thisgroup']->value->name, null, 0);?>
          <?php if ($_smarty_tpl->tpl_vars['group_count']->value>=5) {?>
            <?php if (isset($_smarty_tpl->tpl_vars['text'])) {$_smarty_tpl->tpl_vars['text'] = clone $_smarty_tpl->tpl_vars['text'];
$_smarty_tpl->tpl_vars['text']->value = ($_smarty_tpl->tpl_vars['thisgroup']->value->name).('!'); $_smarty_tpl->tpl_vars['text']->nocache = null; $_smarty_tpl->tpl_vars['text']->scope = 0;
} else $_smarty_tpl->tpl_vars['text'] = new Smarty_variable(($_smarty_tpl->tpl_vars['thisgroup']->value->name).('!'), null, 0);?>
          <?php } else { ?>
            <?php ob_start();?><?php echo lang('inactive');?>
<?php $_tmp1=ob_get_clean();?><?php if (isset($_smarty_tpl->tpl_vars['text'])) {$_smarty_tpl->tpl_vars['text'] = clone $_smarty_tpl->tpl_vars['text'];
$_smarty_tpl->tpl_vars['text']->value = ($_smarty_tpl->tpl_vars['thisgroup']->value->name).("&nbsp;(".$_tmp1.")"); $_smarty_tpl->tpl_vars['text']->nocache = null; $_smarty_tpl->tpl_vars['text']->scope = 0;
} else $_smarty_tpl->tpl_vars['text'] = new Smarty_variable(($_smarty_tpl->tpl_vars['thisgroup']->value->name).("&nbsp;(".$_tmp1.")"), null, 0);?>
          <?php }?>
        <?php }?>
        <th class="g<?php echo $_smarty_tpl->tpl_vars['thisgroup']->value->id;?>
">
          <<?php echo $_smarty_tpl->tpl_vars['tag']->value;?>
 title="<?php echo $_smarty_tpl->tpl_vars['title']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['text']->value;?>
</<?php echo $_smarty_tpl->tpl_vars['tag']->value;?>
>
        </th>
      <?php }?>
    <?php } ?>
  </tr>
  </thead>
  <tbody>
  <?php  $_smarty_tpl->tpl_vars['user'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['user']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['users']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['user']->key => $_smarty_tpl->tpl_vars['user']->value) {
$_smarty_tpl->tpl_vars['user']->_loop = true;
?>
    <?php echo smarty_function_cycle(array('values'=>'row1,row2','assign'=>'currow'),$_smarty_tpl);?>

    <tr class="<?php echo $_smarty_tpl->tpl_vars['currow']->value;?>
">
 		<td><?php echo $_smarty_tpl->tpl_vars['user']->value->name;?>
</td>
		<?php  $_smarty_tpl->tpl_vars['thisgroup'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['thisgroup']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['group_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['thisgroup']->key => $_smarty_tpl->tpl_vars['thisgroup']->value) {
$_smarty_tpl->tpl_vars['thisgroup']->_loop = true;
?>
                    <?php if ($_smarty_tpl->tpl_vars['user']->value->id==$_smarty_tpl->tpl_vars['user_id']->value) {?>
    		      <?php if ($_smarty_tpl->tpl_vars['thisgroup']->value->id!=-1) {?>
                        <td class="g<?php echo $_smarty_tpl->tpl_vars['thisgroup']->value->id;?>
">--</td>
                      <?php }?>
                    <?php } else { ?>
			<?php if ($_smarty_tpl->tpl_vars['thisgroup']->value->id!=-1) {?>
                          <?php if (($_smarty_tpl->tpl_vars['thisgroup']->value->id==1&&$_smarty_tpl->tpl_vars['user']->value->id==1)) {?>
  			    <td class="g<?php echo $_smarty_tpl->tpl_vars['thisgroup']->value->id;?>
">&nbsp;</td>
                          <?php } else { ?>
			    <?php if (isset($_smarty_tpl->tpl_vars["gid"])) {$_smarty_tpl->tpl_vars["gid"] = clone $_smarty_tpl->tpl_vars["gid"];
$_smarty_tpl->tpl_vars["gid"]->value = $_smarty_tpl->tpl_vars['thisgroup']->value->id; $_smarty_tpl->tpl_vars["gid"]->nocache = null; $_smarty_tpl->tpl_vars["gid"]->scope = 0;
} else $_smarty_tpl->tpl_vars["gid"] = new Smarty_variable($_smarty_tpl->tpl_vars['thisgroup']->value->id, null, 0);?>
			    <td class="g<?php echo $_smarty_tpl->tpl_vars['thisgroup']->value->id;?>
">
                              <input type="checkbox" name="ug_<?php echo $_smarty_tpl->tpl_vars['user']->value->id;?>
_<?php echo $_smarty_tpl->tpl_vars['gid']->value;?>
" value="1"<?php if (isset($_smarty_tpl->tpl_vars['user']->value->group[$_smarty_tpl->tpl_vars['gid']->value])) {?> checked="checked"<?php }?>  />
                            </td>
			  <?php }?>
                        <?php }?>
                     <?php }?>
		<?php } ?>
    </tr>
  <?php } ?>
  </tbody>
</table>

<div class="pageoptions">
    <?php echo $_smarty_tpl->tpl_vars['submit']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['cancel']->value;?>

</div>
</form>
<?php }} ?>
