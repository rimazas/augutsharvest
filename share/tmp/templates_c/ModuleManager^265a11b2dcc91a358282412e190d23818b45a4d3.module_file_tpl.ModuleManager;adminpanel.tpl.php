<?php /* Smarty version Smarty-3.1-DEV, created on 2016-04-02 11:19:45
         compiled from "module_file_tpl:ModuleManager;adminpanel.tpl" */ ?>
<?php /*%%SmartyHeaderCode:428156ffaad1ad3e11-36570006%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '265a11b2dcc91a358282412e190d23818b45a4d3' => 
    array (
      0 => 'module_file_tpl:ModuleManager;adminpanel.tpl',
      1 => 1459595201,
      2 => 'module_file_tpl',
    ),
  ),
  'nocache_hash' => '428156ffaad1ad3e11-36570006',
  'function' => 
  array (
    'get_module_status_icon' => 
    array (
      'parameter' => 
      array (
      ),
      'compiled' => '',
    ),
  ),
  'variables' => 
  array (
    'header' => 0,
    'letter_urls' => 0,
    'key' => 0,
    'curletter' => 0,
    'url' => 0,
    'ModuleManager' => 0,
    'message' => 0,
    'status' => 0,
    'stale_img' => 0,
    'warn_img' => 0,
    'new_img' => 0,
    'itemcount' => 0,
    'nametext' => 0,
    'vertext' => 0,
    'items' => 0,
    'rowclass' => 0,
    'entry' => 0,
  ),
  'has_nocache_code' => 0,
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_56ffaad1b45431_92333979',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56ffaad1b45431_92333979')) {function content_56ffaad1b45431_92333979($_smarty_tpl) {?><?php if (!is_callable('smarty_function_cycle')) include 'C:\\www\\augustharvest\\share\\lib\\smarty\\plugins\\function.cycle.php';
if (!is_callable('smarty_modifier_cms_escape')) include 'C:\\www\\augustharvest\\share\\plugins\\modifier.cms_escape.php';
if (!is_callable('smarty_modifier_date_format')) include 'C:\\www\\augustharvest\\share\\lib\\smarty\\plugins\\modifier.date_format.php';
?><?php if (isset($_smarty_tpl->tpl_vars['header']->value)) {?>
<h3><?php echo $_smarty_tpl->tpl_vars['header']->value;?>
</h3>
<?php }?>

<p class="pagerows">
<?php  $_smarty_tpl->tpl_vars['url'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['url']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['letter_urls']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['url']->key => $_smarty_tpl->tpl_vars['url']->value) {
$_smarty_tpl->tpl_vars['url']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['url']->key;
?>
  <?php if ($_smarty_tpl->tpl_vars['key']->value==$_smarty_tpl->tpl_vars['curletter']->value) {?>
    <strong><?php echo $_smarty_tpl->tpl_vars['key']->value;?>
</strong>&nbsp;
  <?php } else { ?>
    <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['ModuleManager']->value->Lang('title_letter',$_smarty_tpl->tpl_vars['key']->value);?>
"><?php echo $_smarty_tpl->tpl_vars['key']->value;?>
</a>&nbsp;
  <?php }?>
<?php } ?>
</p>

<?php if (isset($_smarty_tpl->tpl_vars['message']->value)&&$_smarty_tpl->tpl_vars['message']->value!='') {?>
<div class="warning"><p><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</p></div>
<?php }?>

<?php if (!function_exists('smarty_template_function_get_module_status_icon')) {
    function smarty_template_function_get_module_status_icon($_smarty_tpl,$params) {
    $saved_tpl_vars = $_smarty_tpl->tpl_vars;
    foreach ($_smarty_tpl->smarty->template_functions['get_module_status_icon']['parameter'] as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);};
    foreach ($params as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);}?>
<?php if ($_smarty_tpl->tpl_vars['status']->value=='stale') {?><?php echo $_smarty_tpl->tpl_vars['stale_img']->value;?>
<?php } elseif ($_smarty_tpl->tpl_vars['status']->value=='warn') {?><?php echo $_smarty_tpl->tpl_vars['warn_img']->value;?>
<?php } elseif ($_smarty_tpl->tpl_vars['status']->value=='new') {?><?php echo $_smarty_tpl->tpl_vars['new_img']->value;?>
<?php }?>
<?php $_smarty_tpl->tpl_vars = $saved_tpl_vars;
foreach (Smarty::$global_tpl_vars as $key => $value) if(!isset($_smarty_tpl->tpl_vars[$key])) $_smarty_tpl->tpl_vars[$key] = $value;}}?>


<?php if (isset($_smarty_tpl->tpl_vars['itemcount']->value)&&$_smarty_tpl->tpl_vars['itemcount']->value>0) {?>
<table class="pagetable scrollable">
	<thead>
		<tr>
			<th></th>
			<th><?php echo $_smarty_tpl->tpl_vars['nametext']->value;?>
</th>
			<th><span title="<?php echo $_smarty_tpl->tpl_vars['ModuleManager']->value->Lang('title_modulelastversion');?>
"><?php echo $_smarty_tpl->tpl_vars['vertext']->value;?>
</span></th>
			<th><span title="<?php echo $_smarty_tpl->tpl_vars['ModuleManager']->value->Lang('title_modulelastreleasedate');?>
"><?php echo $_smarty_tpl->tpl_vars['ModuleManager']->value->Lang('releasedate');?>
</span></th>
			<th><span title="<?php echo $_smarty_tpl->tpl_vars['ModuleManager']->value->Lang('title_moduletotaldownloads');?>
"><?php echo $_smarty_tpl->tpl_vars['ModuleManager']->value->Lang('downloads');?>
</span></th>
            <th><span title="<?php echo $_smarty_tpl->tpl_vars['ModuleManager']->value->Lang('title_modulestatus');?>
"><?php echo $_smarty_tpl->tpl_vars['ModuleManager']->value->Lang('statustext');?>
</span></th>
			<th>&nbsp;</th>
			<th>&nbsp;</th>
			<th>&nbsp;</th>
		</tr>
	</thead>
	<tbody>
	<?php  $_smarty_tpl->tpl_vars['entry'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['entry']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['entry']->key => $_smarty_tpl->tpl_vars['entry']->value) {
$_smarty_tpl->tpl_vars['entry']->_loop = true;
?>
		<?php echo smarty_function_cycle(array('values'=>"row1,row2",'assign'=>'rowclass'),$_smarty_tpl);?>

	        <tr class="<?php echo $_smarty_tpl->tpl_vars['rowclass']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['entry']->value->age=='new') {?>style="font-weight: bold;"<?php }?>>
		    <td><?php smarty_template_function_get_module_status_icon($_smarty_tpl,array('status'=>$_smarty_tpl->tpl_vars['entry']->value->age));?>
</td>
			<td><span title="<?php echo smarty_modifier_cms_escape(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['entry']->value->description));?>
"><?php echo $_smarty_tpl->tpl_vars['entry']->value->name;?>
</span></td>
			<td><?php echo $_smarty_tpl->tpl_vars['entry']->value->version;?>
</td>
			<td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['entry']->value->date,'%x');?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['entry']->value->downloads;?>
</td>
			<td><?php if ($_smarty_tpl->tpl_vars['entry']->value->candownload) {?>
                              <span title="<?php echo $_smarty_tpl->tpl_vars['ModuleManager']->value->Lang('title_moduleinstallupgrade');?>
"><?php echo $_smarty_tpl->tpl_vars['entry']->value->status;?>
</span>
                            <?php } else { ?>
                               <?php echo $_smarty_tpl->tpl_vars['entry']->value->status;?>

                            <?php }?>
                        </td>
			<td><a href="<?php echo $_smarty_tpl->tpl_vars['entry']->value->depends_url;?>
" title="<?php echo $_smarty_tpl->tpl_vars['ModuleManager']->value->Lang('title_moduledepends');?>
"><?php echo $_smarty_tpl->tpl_vars['ModuleManager']->value->Lang('dependstxt');?>
</a></td>
			<td><a href="<?php echo $_smarty_tpl->tpl_vars['entry']->value->help_url;?>
" title="<?php echo $_smarty_tpl->tpl_vars['ModuleManager']->value->Lang('title_modulehelp');?>
"><?php echo $_smarty_tpl->tpl_vars['ModuleManager']->value->Lang('helptxt');?>
</a></td>
			<td><a href="<?php echo $_smarty_tpl->tpl_vars['entry']->value->about_url;?>
" title="<?php echo $_smarty_tpl->tpl_vars['ModuleManager']->value->Lang('title_moduleabout');?>
"><?php echo $_smarty_tpl->tpl_vars['ModuleManager']->value->Lang('abouttxt');?>
</a></td>
		</tr>
	<?php } ?>
	</tbody>
</table>
<?php }?>
<?php }} ?>
