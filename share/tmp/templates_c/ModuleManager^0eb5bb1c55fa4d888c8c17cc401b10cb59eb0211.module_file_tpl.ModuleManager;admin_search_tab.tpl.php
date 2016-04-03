<?php /* Smarty version Smarty-3.1-DEV, created on 2016-04-02 11:19:45
         compiled from "module_file_tpl:ModuleManager;admin_search_tab.tpl" */ ?>
<?php /*%%SmartyHeaderCode:473656ffaad1551ae4-73321617%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0eb5bb1c55fa4d888c8c17cc401b10cb59eb0211' => 
    array (
      0 => 'module_file_tpl:ModuleManager;admin_search_tab.tpl',
      1 => 1459595201,
      2 => 'module_file_tpl',
    ),
  ),
  'nocache_hash' => '473656ffaad1551ae4-73321617',
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
    'advanced' => 0,
    'status' => 0,
    'stale_img' => 0,
    'warn_img' => 0,
    'new_img' => 0,
    'formstart' => 0,
    'ModuleManager' => 0,
    'actionid' => 0,
    'term' => 0,
    'formend' => 0,
    'search_data' => 0,
    'rowclass' => 0,
    'entry' => 0,
  ),
  'has_nocache_code' => 0,
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_56ffaad15ddf35_73568814',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56ffaad15ddf35_73568814')) {function content_56ffaad15ddf35_73568814($_smarty_tpl) {?><?php if (!is_callable('smarty_function_cycle')) include 'C:\\www\\augustharvest\\share\\lib\\smarty\\plugins\\function.cycle.php';
if (!is_callable('smarty_modifier_cms_escape')) include 'C:\\www\\augustharvest\\share\\plugins\\modifier.cms_escape.php';
if (!is_callable('smarty_modifier_date_format')) include 'C:\\www\\augustharvest\\share\\lib\\smarty\\plugins\\modifier.date_format.php';
?><script type="text/javascript">
$(document).ready(function(){
  <?php if (!$_smarty_tpl->tpl_vars['advanced']->value) {?>$('#advhelp').hide();<?php }?>
  $('#advanced').click(function(){
    $('#advhelp').toggle();
  });
});
</script>

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


<?php echo $_smarty_tpl->tpl_vars['formstart']->value;?>

<fieldset>
<legend><?php echo $_smarty_tpl->tpl_vars['ModuleManager']->value->Lang('search_input');?>
:</legend>
<div class="pageoverflow">
  <p class="pagetext"><label for="searchterm"><?php echo $_smarty_tpl->tpl_vars['ModuleManager']->value->Lang('searchterm');?>
:</label></p>
  <p class="pageinput">
    <input id="searchterm" type="text" name="<?php echo $_smarty_tpl->tpl_vars['actionid']->value;?>
term" size="50" value="<?php echo $_smarty_tpl->tpl_vars['term']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['ModuleManager']->value->Lang('title_searchterm');?>
" placeholder="<?php echo $_smarty_tpl->tpl_vars['ModuleManager']->value->Lang('entersearchterm');?>
"/>&nbsp;
    <input type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['actionid']->value;?>
advanced" value="0"/>
    <input type="checkbox" id="advanced" name="<?php echo $_smarty_tpl->tpl_vars['actionid']->value;?>
advanced" value="1" <?php if ($_smarty_tpl->tpl_vars['advanced']->value) {?>checked="checked"<?php }?> title="<?php echo $_smarty_tpl->tpl_vars['ModuleManager']->value->Lang('title_advancedsearch');?>
"/>&nbsp;<label for="advanced"><?php echo $_smarty_tpl->tpl_vars['ModuleManager']->value->Lang('prompt_advancedsearch');?>
</label>
    <span id="advhelp" style="display: none;"><br/><?php echo $_smarty_tpl->tpl_vars['ModuleManager']->value->Lang('advancedsearch_help');?>
</span>
  </p>
</div>

<div class="pageoverflow">
  <p class="pagetext"></p>
  <p class="pageinput">
    <input type="submit" name="<?php echo $_smarty_tpl->tpl_vars['actionid']->value;?>
submit" value="<?php echo $_smarty_tpl->tpl_vars['ModuleManager']->value->Lang('submit');?>
"/>
  </p>
</div>
</fieldset>
<?php echo $_smarty_tpl->tpl_vars['formend']->value;?>


<?php if (isset($_smarty_tpl->tpl_vars['search_data']->value)) {?>
<fieldset>
<legend><?php echo $_smarty_tpl->tpl_vars['ModuleManager']->value->Lang('search_results');?>
:</legend>
<table class="pagetable scrollable">
	<thead>
		<tr>
			<th></th>
			<th><?php echo $_smarty_tpl->tpl_vars['ModuleManager']->value->Lang('nametext');?>
</th>
			<th><span title="<?php echo $_smarty_tpl->tpl_vars['ModuleManager']->value->Lang('title_modulelastversion');?>
"><?php echo $_smarty_tpl->tpl_vars['ModuleManager']->value->Lang('vertext');?>
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
 $_from = $_smarty_tpl->tpl_vars['search_data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
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
</fieldset>
<?php }?><?php }} ?>
