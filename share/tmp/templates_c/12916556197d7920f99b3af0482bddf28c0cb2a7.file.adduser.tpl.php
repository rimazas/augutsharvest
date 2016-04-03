<?php /* Smarty version Smarty-3.1-DEV, created on 2016-04-02 11:20:34
         compiled from "C:\www\augustharvest\share\admin\templates\adduser.tpl" */ ?>
<?php /*%%SmartyHeaderCode:35456ffab0239dfa4-54541117%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '12916556197d7920f99b3af0482bddf28c0cb2a7' => 
    array (
      0 => 'C:\\www\\augustharvest\\share\\admin\\templates\\adduser.tpl',
      1 => 1459595196,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '35456ffab0239dfa4-54541117',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'groups' => 0,
    'user' => 0,
    'password' => 0,
    'passwordagain' => 0,
    'firstname' => 0,
    'lastname' => 0,
    'email' => 0,
    'active' => 0,
    'onegroup' => 0,
    'sel_groups' => 0,
    'users' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_56ffab02440069_13332898',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56ffab02440069_13332898')) {function content_56ffab02440069_13332898($_smarty_tpl) {?><?php if (!is_callable('smarty_function_form_start')) include 'C:\\www\\augustharvest\\share\\plugins\\function.form_start.php';
if (!is_callable('smarty_function_tab_header')) include 'C:\\www\\augustharvest\\share\\admin/plugins\\function.tab_header.php';
if (!is_callable('smarty_function_tab_start')) include 'C:\\www\\augustharvest\\share\\admin/plugins\\function.tab_start.php';
if (!is_callable('smarty_function_cms_help')) include 'C:\\www\\augustharvest\\share\\admin/plugins\\function.cms_help.php';
if (!is_callable('smarty_function_html_options')) include 'C:\\www\\augustharvest\\share\\lib\\smarty\\plugins\\function.html_options.php';
if (!is_callable('smarty_function_tab_end')) include 'C:\\www\\augustharvest\\share\\admin/plugins\\function.tab_end.php';
if (!is_callable('smarty_function_form_end')) include 'C:\\www\\augustharvest\\share\\plugins\\function.form_end.php';
?><div class="pagecontainer">
    <h3 class="invisible"><?php echo lang('adduser');?>
</h3>

    <?php echo smarty_function_form_start(array('url'=>'adduser.php'),$_smarty_tpl);?>

    <?php echo smarty_function_tab_header(array('name'=>'user','label'=>lang('profile')),$_smarty_tpl);?>

    <?php if (isset($_smarty_tpl->tpl_vars['groups']->value)) {?>
        <?php echo smarty_function_tab_header(array('name'=>'groups','label'=>lang('groups')),$_smarty_tpl);?>

    <?php }?>
    <?php echo smarty_function_tab_header(array('name'=>'settings','label'=>lang('settings')),$_smarty_tpl);?>


    <?php echo smarty_function_tab_start(array('name'=>'user'),$_smarty_tpl);?>

    <!-- user -->
    <div class="pageoverflow">
        <p class="pagetext">
            <label for="username">*<?php echo lang('name');?>
:</label>&nbsp;<?php echo smarty_function_cms_help(array('realm'=>'admin','key'=>'info_adduser_username','title'=>lang('name')),$_smarty_tpl);?>

        </p>
        <p class="pageinput">
            <input id="username" type="text" name="user" maxlength="255" value="<?php echo $_smarty_tpl->tpl_vars['user']->value;?>
" class="standard"/>
        </p>
    </div>
    <div class="pageoverflow">
        <p class="pagetext">
            <label for="password">*<?php echo lang('password');?>
:</label>&nbsp;<?php echo smarty_function_cms_help(array('realm'=>'admin','key'=>'info_edituser_password','title'=>lang('password')),$_smarty_tpl);?>

        </p>
        <p class="pageinput">
            <input type="password" id="password" name="password" maxlength="100" value="<?php echo $_smarty_tpl->tpl_vars['password']->value;?>
" class="standard"/>
        </p>
    </div>
    <div class="pageoverflow">
        <p class="pagetext">
            <label for="passwordagain">*<?php echo lang('passwordagain');?>
:</label>&nbsp;<?php echo smarty_function_cms_help(array('realm'=>'admin','key'=>'info_edituser_passwordagain','title'=>lang('passwordagain')),$_smarty_tpl);?>

        </p>
        <p class="pageinput">
            <input type="password" id="passwordagain" name="passwordagain" maxlength="100" value="<?php echo $_smarty_tpl->tpl_vars['passwordagain']->value;?>
" class="standard"/>
        </p>
    </div>
    <div class="pageoverflow">
        <p class="pagetext">
            <label for="firstname"><?php echo lang('firstname');?>
:</label>&nbsp;<?php echo smarty_function_cms_help(array('key2'=>'help_myaccount_firstname','title'=>lang('firstname')),$_smarty_tpl);?>

        </p>
        <p class="pageinput">
            <input type="text" id="firstname" name="firstname" maxlength="50" value="<?php echo $_smarty_tpl->tpl_vars['firstname']->value;?>
" class="standard"/>
        </p>
    </div>
    <div class="pageoverflow">
        <p class="pagetext">
            <label for="lastname"><?php echo lang('lastname');?>
:</label>&nbsp;<?php echo smarty_function_cms_help(array('key2'=>'help_myaccount_lastname','title'=>lang('lastname')),$_smarty_tpl);?>

        </p>
        <p class="pageinput">
            <input type="text" id="lastname" name="lastname" maxlength="50" value="<?php echo $_smarty_tpl->tpl_vars['lastname']->value;?>
" class="standard"/>
        </p>
    </div>
    <div class="pageoverflow">
        <p class="pagetext">
            <label for="email"><?php echo lang('email');?>
:</label>&nbsp;<?php echo smarty_function_cms_help(array('key2'=>'help_myaccount_email','title'=>lang('email')),$_smarty_tpl);?>

        </p>
        <p class="pageinput">
            <input type="text" id="email" name="email" maxlength="255" value="<?php echo $_smarty_tpl->tpl_vars['email']->value;?>
" class="standard"/>
        </p>
    </div>
    <div class="pageoverflow">
        <p class="pagetext">
            <?php echo lang('active');?>
:&nbsp;<?php echo smarty_function_cms_help(array('realm'=>'admin','key'=>'info_user_active','title'=>lang('active')),$_smarty_tpl);?>

        </p>
        <p class="pageinput">
            <input type="checkbox" class="pagecheckbox" name="active" value="1"<?php if ($_smarty_tpl->tpl_vars['active']->value==1) {?> checked="checked"<?php }?>/>
        </p>
    </div>

    <?php if (isset($_smarty_tpl->tpl_vars['groups']->value)) {?>
    <!-- groups -->
    <?php echo smarty_function_tab_start(array('name'=>'groups'),$_smarty_tpl);?>

    <div class="pageverflow">
        <p class="pagetext">
            <?php echo lang('groups');?>
:&nbsp;<?php echo smarty_function_cms_help(array('realm'=>'admin','key'=>'info_membergroups','title'=>lang('groups')),$_smarty_tpl);?>

        </p>
        <div class="pageinput">
            <div class="group_memberships clear">
                <table class="pagetable">
                    <thead>
                        <tr>
                            <th class="pageicon"></th>
                            <th><?php echo lang('name');?>
</th>
                            <th><?php echo lang('description');?>
</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php  $_smarty_tpl->tpl_vars['onegroup'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['onegroup']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['groups']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['onegroup']->key => $_smarty_tpl->tpl_vars['onegroup']->value) {
$_smarty_tpl->tpl_vars['onegroup']->_loop = true;
?>
                        <tr>
                            <td>
                            <input type="checkbox" name="sel_groups[]" id="g<?php echo $_smarty_tpl->tpl_vars['onegroup']->value->id;?>
" value="<?php echo $_smarty_tpl->tpl_vars['onegroup']->value->id;?>
" <?php if (in_array($_smarty_tpl->tpl_vars['onegroup']->value->id,$_smarty_tpl->tpl_vars['sel_groups']->value)) {?>checked="checked"<?php }?>/> </td>
                            <td><label for="g<?php echo $_smarty_tpl->tpl_vars['onegroup']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['onegroup']->value->name;?>
</label></td>
                            <td><?php echo $_smarty_tpl->tpl_vars['onegroup']->value->description;?>
</td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <?php }?>

    <!-- settings -->
    <?php echo smarty_function_tab_start(array('name'=>'settings'),$_smarty_tpl);?>

    <div class="pageoverflow">
        <p class="pagetext">
            <?php echo lang('copyusersettings');?>
:&nbsp;<?php echo smarty_function_cms_help(array('realm'=>'admin','key'=>'info_copyusersettings','title'=>lang('copyusersettings')),$_smarty_tpl);?>

        </p>
        <p class="pageinput">
            <select name="copyusersettings">
                <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['users']->value),$_smarty_tpl);?>

            </select>
        </p>
    </div>
    <?php echo smarty_function_tab_end(array(),$_smarty_tpl);?>


    <div class="pageoverflow">
        <input type="submit" id="submit" name="submit" value="<?php echo lang('submit');?>
"/>
        <input type="submit" name="cancel" value="<?php echo lang('cancel');?>
"/>
    </div>
    <?php echo smarty_function_form_end(array(),$_smarty_tpl);?>

</div><?php }} ?>
