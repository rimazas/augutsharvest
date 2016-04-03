<?php /* Smarty version Smarty-3.1-DEV, created on 2016-04-02 11:20:31
         compiled from "C:\www\augustharvest\share\admin\templates\listusers.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1028556ffaaffd033d0-53656257%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '651a83aa729e9e3ef3a6ef4915a68d004707b418' => 
    array (
      0 => 'C:\\www\\augustharvest\\share\\admin\\templates\\listusers.tpl',
      1 => 1459595196,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1028556ffaaffd033d0-53656257',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'urlext' => 0,
    'users' => 0,
    'user' => 0,
    'can_edit' => 0,
    'my_userid' => 0,
    'userlist' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_56ffaaffdbbf32_47806595',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56ffaaffdbbf32_47806595')) {function content_56ffaaffdbbf32_47806595($_smarty_tpl) {?><?php if (!is_callable('smarty_function_form_start')) include 'C:\\www\\augustharvest\\share\\plugins\\function.form_start.php';
if (!is_callable('smarty_function_admin_icon')) include 'C:\\www\\augustharvest\\share\\admin/plugins\\function.admin_icon.php';
if (!is_callable('smarty_function_cycle')) include 'C:\\www\\augustharvest\\share\\lib\\smarty\\plugins\\function.cycle.php';
if (!is_callable('smarty_function_html_options')) include 'C:\\www\\augustharvest\\share\\lib\\smarty\\plugins\\function.html_options.php';
if (!is_callable('smarty_function_form_end')) include 'C:\\www\\augustharvest\\share\\plugins\\function.form_end.php';
?><script type="text/javascript">
$(document).ready(function() {

    $('#sel_all').cmsms_checkall();

    $('.toggleactive').click(function(){
        return confirm('<?php echo strtr(lang('confirm_toggleuseractive'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
');
    });

    $(document).on('click', '#bulksubmit', function(){
        return confirm('<?php echo strtr(lang('confirm_bulkuserop'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
');
    });

    $(document).on('click', '.js-delete', function(){
        return confirm('<?php echo strtr(lang('confirm_delete_user'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
');
    });

    $('#withselected, #bulksubmit').attr('disabled','disabled');
    $('#bulksubmit').button({ 'disabled' : true });
    $('#sel_all, .multiselect').on('click',function(){
        if( !$(this).is(':checked') ) {
            $('#withselected').attr('disabled','disabled');
            $('#bulksubmit').attr('disabled','disabled');
            $('#bulksubmit').button({ 'disabled' : true });
        } else {
            $('#withselected').removeAttr('disabled');
            $('#bulksubmit').removeAttr('disabled');
            $('#bulksubmit').button({ 'disabled' : false });
        }
    });

    $('#withselected').change(function(){
        var v = $(this).val();

        if (v === 'copyoptions') {
            $('#userlist').show();
        } else if  (v === 'delete') {
            return confirm('<?php echo strtr(lang('confirm_delete_user'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
');
        } else {
            $('#userlist').hide();
        }
    });
});
</script>
<h3 class="invisible"><?php echo lang('currentusers');?>
</h3><?php echo smarty_function_form_start(array('url'=>'listusers.php'),$_smarty_tpl);?>
<div class="pageoptions"><a href="adduser.php<?php echo $_smarty_tpl->tpl_vars['urlext']->value;?>
" title="<?php echo lang('info_adduser');?>
"><?php echo smarty_function_admin_icon(array('icon'=>'newobject.gif','class'=>'systemicon'),$_smarty_tpl);?>
&nbsp;<?php echo lang('adduser');?>
</a></div><table class="pagetable"><thead><tr><th><?php echo lang('username');?>
</th><th style="text-align: center;"><?php echo lang('active');?>
</th><th class="pageicon"></th><th class="pageicon"></th><th class="pageicon"><input type="checkbox" id="sel_all" value="1" title="<?php echo lang('selectall');?>
"/></th></tr></thead><tbody><?php  $_smarty_tpl->tpl_vars['user'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['user']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['users']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['user']->key => $_smarty_tpl->tpl_vars['user']->value) {
$_smarty_tpl->tpl_vars['user']->_loop = true;
?><tr class="<?php echo smarty_function_cycle(array('values'=>'row1,row2'),$_smarty_tpl);?>
"><?php if (isset($_smarty_tpl->tpl_vars['can_edit'])) {$_smarty_tpl->tpl_vars['can_edit'] = clone $_smarty_tpl->tpl_vars['can_edit'];
$_smarty_tpl->tpl_vars['can_edit']->value = 1; $_smarty_tpl->tpl_vars['can_edit']->nocache = null; $_smarty_tpl->tpl_vars['can_edit']->scope = 0;
} else $_smarty_tpl->tpl_vars['can_edit'] = new Smarty_variable(1, null, 0);?><?php if (!$_smarty_tpl->tpl_vars['user']->value->access_to_user) {?><?php if (isset($_smarty_tpl->tpl_vars['can_edit'])) {$_smarty_tpl->tpl_vars['can_edit'] = clone $_smarty_tpl->tpl_vars['can_edit'];
$_smarty_tpl->tpl_vars['can_edit']->value = 0; $_smarty_tpl->tpl_vars['can_edit']->nocache = null; $_smarty_tpl->tpl_vars['can_edit']->scope = 0;
} else $_smarty_tpl->tpl_vars['can_edit'] = new Smarty_variable(0, null, 0);?><?php }?><td><?php if ($_smarty_tpl->tpl_vars['can_edit']->value) {?><a href="edituser.php<?php echo $_smarty_tpl->tpl_vars['urlext']->value;?>
&amp;user_id=<?php echo $_smarty_tpl->tpl_vars['user']->value->id;?>
" title="<?php echo lang('edituser');?>
"><?php echo $_smarty_tpl->tpl_vars['user']->value->username;?>
</a><?php } else { ?><span title="<?php echo lang('info_noedituser');?>
"><?php echo $_smarty_tpl->tpl_vars['user']->value->username;?>
</span><?php }?></td><td style="text-align: center;"><?php if ($_smarty_tpl->tpl_vars['can_edit']->value&&$_smarty_tpl->tpl_vars['user']->value->id!=$_smarty_tpl->tpl_vars['my_userid']->value) {?><a href="listusers.php<?php echo $_smarty_tpl->tpl_vars['urlext']->value;?>
&amp;toggleactive=<?php echo $_smarty_tpl->tpl_vars['user']->value->id;?>
" title="<?php echo lang('info_user_active2');?>
" class="toggleactive"><?php if ($_smarty_tpl->tpl_vars['user']->value->active) {?><?php echo smarty_function_admin_icon(array('icon'=>'true.gif'),$_smarty_tpl);?>
<?php } else { ?><?php echo smarty_function_admin_icon(array('icon'=>'false.gif'),$_smarty_tpl);?>
<?php }?></a><?php }?></td><td><?php if ($_smarty_tpl->tpl_vars['can_edit']->value) {?><a href="edituser.php<?php echo $_smarty_tpl->tpl_vars['urlext']->value;?>
&amp;user_id=<?php echo $_smarty_tpl->tpl_vars['user']->value->id;?>
" title="<?php echo lang('edituser');?>
"><?php echo smarty_function_admin_icon(array('icon'=>'edit.gif'),$_smarty_tpl);?>
</a><?php }?></td><td><?php if ($_smarty_tpl->tpl_vars['can_edit']->value&&$_smarty_tpl->tpl_vars['user']->value->id!=$_smarty_tpl->tpl_vars['my_userid']->value) {?><a class="js-delete" href="deleteuser.php<?php echo $_smarty_tpl->tpl_vars['urlext']->value;?>
&amp;user_id=<?php echo $_smarty_tpl->tpl_vars['user']->value->id;?>
" title="<?php echo lang('deleteuser');?>
"><?php echo smarty_function_admin_icon(array('icon'=>'delete.gif'),$_smarty_tpl);?>
</a><?php }?></td><td><?php if ($_smarty_tpl->tpl_vars['can_edit']->value&&$_smarty_tpl->tpl_vars['user']->value->id!=$_smarty_tpl->tpl_vars['my_userid']->value) {?><input class="multiselect" type="checkbox" name="multiselect[]" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->id;?>
" title="<?php echo lang('info_selectuser');?>
"/><?php }?></td></tr><?php } ?></tbody></table><div class="pageoptions"><div style="width: 40%; float: left;"><a href="adduser.php<?php echo $_smarty_tpl->tpl_vars['urlext']->value;?>
" title="<?php echo lang('info_adduser');?>
"><?php echo smarty_function_admin_icon(array('icon'=>'newobject.gif'),$_smarty_tpl);?>
&nbsp;<?php echo lang('adduser');?>
</a></div><div style="width: 40%; float: right; text-align: right;"><label for="withselected"><?php echo lang('selecteditems');?>
:</label>&nbsp;<select name="bulkaction" id="withselected"><option value="delete"><?php echo lang('delete');?>
</option><option value="clearoptions"><?php echo lang('clearusersettings');?>
</option><option value="copyoptions"><?php echo lang('copyusersettings2');?>
</option><option value="disable"><?php echo lang('disable');?>
</option><option value="enable"><?php echo lang('enable');?>
</option></select>&nbsp;<div id="userlist" style="display: none;"><label for="userlist_sub"><?php echo lang('copyfromuser');?>
:</label>&nbsp;<select name="userlist" id="userlist_sub"><?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['userlist']->value),$_smarty_tpl);?>
</select>&nbsp;</div><input type="submit" id="bulksubmit" name="bulk" value="<?php echo lang('submit');?>
"/></div></div><?php echo smarty_function_form_end(array(),$_smarty_tpl);?>
<?php }} ?>
