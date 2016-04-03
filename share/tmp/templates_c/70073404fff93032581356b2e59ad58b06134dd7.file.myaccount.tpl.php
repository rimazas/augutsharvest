<?php /* Smarty version Smarty-3.1-DEV, created on 2016-04-02 11:19:33
         compiled from "C:\www\augustharvest\share\admin\templates\myaccount.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1823656ffaac59b2be2-62053168%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '70073404fff93032581356b2e59ad58b06134dd7' => 
    array (
      0 => 'C:\\www\\augustharvest\\share\\admin\\templates\\myaccount.tpl',
      1 => 1459595196,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1823656ffaac59b2be2-62053168',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tab_start' => 0,
    'manageaccount' => 0,
    'maintab_start' => 0,
    'formurl' => 0,
    'userobj' => 0,
    'tab_end' => 0,
    'managesettings' => 0,
    'advancedtab_start' => 0,
    'old_default_cms_lang' => 0,
    'language_opts' => 0,
    'default_cms_language' => 0,
    'date_format_string' => 0,
    'wysiwyg_opts' => 0,
    'wysiwyg' => 0,
    'syntax_opts' => 0,
    'syntaxhighlighter' => 0,
    'opts' => 0,
    'ce_navdisplay' => 0,
    'default_parent' => 0,
    'indent' => 0,
    'themes_opts' => 0,
    'admintheme' => 0,
    'homepage' => 0,
    'bookmarks' => 0,
    'hide_help_links' => 0,
    'enablenotifications' => 0,
    'module_opts' => 0,
    'ignoredmodules' => 0,
    'tabs_end' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_56ffaac5a8dba8_45343656',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56ffaac5a8dba8_45343656')) {function content_56ffaac5a8dba8_45343656($_smarty_tpl) {?><?php if (!is_callable('smarty_function_cms_help')) include 'C:\\www\\augustharvest\\share\\admin/plugins\\function.cms_help.php';
if (!is_callable('smarty_function_html_options')) include 'C:\\www\\augustharvest\\share\\lib\\smarty\\plugins\\function.html_options.php';
?><script type="text/javascript">
jQuery(document).ready(function(){
  $('.helpicon').click(function(){
    var x = $(this).attr('name');
    $('#'+x).dialog();
  });
});
</script>

<div class="pagecontainer">
<?php echo $_smarty_tpl->tpl_vars['tab_start']->value;?>


<?php if ($_smarty_tpl->tpl_vars['manageaccount']->value) {?>
  <?php echo $_smarty_tpl->tpl_vars['maintab_start']->value;?>

  <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['formurl']->value;?>
">
    <input type="hidden" name="active_tab" value="maintab" />
    <div class="pageoverflow">
		<div class="pageinput">
			<input class="pagebutton" type="submit" name="submit_account" value="<?php echo lang('submit');?>
" />
			<input class="pagebutton" type="submit" name="cancel" value="<?php echo lang('cancel');?>
" />
		</div>
    </div>

    <div class="pageoverflow">
      <p class="pagetext">
        <label for="username">*<?php echo lang('name');?>
:</label>&nbsp;<?php echo smarty_function_cms_help(array('key2'=>'help_myaccount_username','title'=>lang('name')),$_smarty_tpl);?>

      </p>
      <p class="pageinput"><input type="text" id="username" name="user" maxlength="25" value="<?php echo $_smarty_tpl->tpl_vars['userobj']->value->username;?>
" class="standard" /></p>
    </div>

    <div class="pageoverflow">
      <p class="pagetext"><label for="password"><?php echo lang('password');?>
:</label>&nbsp;<?php echo smarty_function_cms_help(array('key2'=>'help_myaccount_password','title'=>lang('password')),$_smarty_tpl);?>
</p>
      <p class="pageinput">
        <input type="password" id="password" name="password" maxlength="25" value="" />&nbsp;<?php echo lang('info_edituser_password');?>

      </p>
    </div>
		
    <div class="pageoverflow">
      <p class="pagetext"><label for="passwordagain"><?php echo lang('passwordagain');?>
:</label>&nbsp;<?php echo smarty_function_cms_help(array('key2'=>'help_myaccount_passwordagain','title'=>lang('passwordagain')),$_smarty_tpl);?>
</p>
      <p class="pageinput"><input type="password" id="passwordagain" name="passwordagain" maxlength="25" value="" class="standard" />&nbsp;<?php echo lang('info_edituser_passwordagain');?>
</p>
    </div>

    <div class="pageoverflow">
      <p class="pagetext"><label for="firstname"><?php echo lang('firstname');?>
:</label>&nbsp;<?php echo smarty_function_cms_help(array('key2'=>'help_myaccount_firstname','title'=>lang('firstname')),$_smarty_tpl);?>
</p>
      <p class="pageinput"><input type="text" id="firstname" name="firstname" maxlength="50" value="<?php echo $_smarty_tpl->tpl_vars['userobj']->value->firstname;?>
" class="standard" /></p>
    </div>

    <div class="pageoverflow">
      <p class="pagetext"><label for="lastname"><?php echo lang('lastname');?>
:</label>&nbsp;<?php echo smarty_function_cms_help(array('key2'=>'help_myaccount_lastname','title'=>lang('lastname')),$_smarty_tpl);?>
</p>
      <p class="pageinput"><input type="text" id="lastname" name="lastname" maxlength="50" value="<?php echo $_smarty_tpl->tpl_vars['userobj']->value->lastname;?>
" class="standard" /></p>
    </div>

    <div class="pageoverflow">
      <p class="pagetext"><label for="email"><?php echo lang('email');?>
:</label>&nbsp;<?php echo smarty_function_cms_help(array('key2'=>'help_myaccount_email','title'=>lang('email')),$_smarty_tpl);?>
</p>
      <p class="pageinput"><input type="text" id="email" name="email" maxlength="255" value="<?php echo $_smarty_tpl->tpl_vars['userobj']->value->email;?>
" class="standard" /></p>
    </div>
  </form>
  <?php echo $_smarty_tpl->tpl_vars['tab_end']->value;?>

<?php }?>

<?php if ($_smarty_tpl->tpl_vars['managesettings']->value) {?>
<?php echo $_smarty_tpl->tpl_vars['advancedtab_start']->value;?>

<form method="post" action="<?php echo $_smarty_tpl->tpl_vars['formurl']->value;?>
">
  <input type="hidden" name="active_tab" value="advtab" />
    <div class="pageoverflow">
      <div class="invisible">
      <input type="hidden" name="edituserprefs" value="true" />
      <input type="hidden" name="old_default_cms_lang" value="<?php echo $_smarty_tpl->tpl_vars['old_default_cms_lang']->value;?>
" />
      </div>	
      <p class="pageinput">			
        <input type="submit" name="submit_prefs" value="<?php echo lang('submit');?>
" class="pagebutton" />
        <input type="submit" name="cancel" value="<?php echo lang('cancel');?>
" class="pagebutton" />
      </p>
    </div>
    <fieldset>
      <legend><?php echo lang('lang_settings_legend');?>
:</legend>
      <div class="pageoverflow">
	<p class="pagetext"><label for="language"><?php echo lang('language');?>
:</label>&nbsp;<?php echo smarty_function_cms_help(array('key2'=>'help_myaccount_language','title'=>lang('language')),$_smarty_tpl);?>
</p>
	<p class="pageinput">
	  <select id="language" name="default_cms_language">
	    <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['language_opts']->value,'selected'=>$_smarty_tpl->tpl_vars['default_cms_language']->value),$_smarty_tpl);?>

	  </select>
	</p>
      </div>

      <div class="pageoverflow">
        <p class="pagetext"><label for="dateformat"><?php echo lang('date_format_string');?>
:</label>&nbsp;<?php echo smarty_function_cms_help(array('key2'=>'help_myaccount_dateformat','title'=>lang('date_format_string')),$_smarty_tpl);?>
</p>
	<p class="pageinput">
 	  <input class="pagenb" size="20" maxlength="255" type="text" name="date_format_string" value="<?php echo $_smarty_tpl->tpl_vars['date_format_string']->value;?>
" />
 	  <?php echo lang('date_format_string_help');?>

	</p>
      </div>
    </fieldset>

    <fieldset>
      <legend><?php echo lang('content_editor_legend');?>
:</legend>
      <div class="pageoverflow">
        <p class="pagetext"><label for="wysiwyg"><?php echo lang('wysiwygtouse');?>
:</label>&nbsp;<?php echo smarty_function_cms_help(array('key2'=>'help_myaccount_wysiwyg','title'=>lang('wysiwygtouse')),$_smarty_tpl);?>
</p>
        <p class="pageinput">
	  <select id="wysiwyg" name="wysiwyg">
	    <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['wysiwyg_opts']->value,'selected'=>$_smarty_tpl->tpl_vars['wysiwyg']->value),$_smarty_tpl);?>

	  </select>
	</p>
      </div>

      <div class="pageoverflow">
	<p class="pagetext"><label for="syntaxh"><?php echo lang('syntaxhighlightertouse');?>
:</label>&nbsp;<?php echo smarty_function_cms_help(array('key2'=>'help_myaccount_syntax','title'=>lang('syntaxhighlightertouse')),$_smarty_tpl);?>
</p>
	<p class="pageinput">
	  <select id="syntaxh" name="syntaxhighlighter">
	    <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['syntax_opts']->value,'selected'=>$_smarty_tpl->tpl_vars['syntaxhighlighter']->value),$_smarty_tpl);?>

	  </select>
	</p>
      </div>

      <div class="pageoverflow">
        <p class="pagetext"><label for="ce_navdisplay"><?php echo lang('ce_navdisplay');?>
:</label>&nbsp;<?php echo smarty_function_cms_help(array('key2'=>'help_myaccount_ce_navdisplay','title'=>lang('ce_navdisplay')),$_smarty_tpl);?>
</p>
        <p class="pageinput">
          <?php $_smarty_tpl->createLocalArrayVariable('opts', null, 0);
$_smarty_tpl->tpl_vars['opts']->value[''] = lang('none');?>
          <?php $_smarty_tpl->createLocalArrayVariable('opts', null, 0);
$_smarty_tpl->tpl_vars['opts']->value['menutext'] = lang('menutext');?>
          <?php $_smarty_tpl->createLocalArrayVariable('opts', null, 0);
$_smarty_tpl->tpl_vars['opts']->value['title'] = lang('title');?>
          <select id="ce_navdisplay" name="ce_navdisplay">
          <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['opts']->value,'selected'=>$_smarty_tpl->tpl_vars['ce_navdisplay']->value),$_smarty_tpl);?>

          </select>
        </p>
      </div>

      <div class="pageoverflow">
        <p class="pagetext"><label for="parent_id"><?php echo lang('defaultparentpage');?>
:</label>&nbsp;<?php echo smarty_function_cms_help(array('key2'=>'help_myaccount_dfltparent','title'=>lang('defaultparentpage')),$_smarty_tpl);?>
</p>
	<p class="pageinput"><?php echo $_smarty_tpl->tpl_vars['default_parent']->value;?>
</p>
      </div>

      <div class="pageoverflow">
	<p class="pagetext"><label for="indent"><?php echo lang('adminindent');?>
:</label>&nbsp;<?php echo smarty_function_cms_help(array('key2'=>'help_myaccount_indent','title'=>lang('adminindent')),$_smarty_tpl);?>
</p>
	<p class="pageinput">
	  <input class="pagenb" type="checkbox" id="indent" name="indent" <?php if ($_smarty_tpl->tpl_vars['indent']->value==true) {?>checked="checked"<?php }?> />
	  <?php echo lang('indent');?>

	</p>
      </div>
      <!-- content display //-->								
    </fieldset>

    <fieldset>
      <legend><?php echo lang('admin_layout_legend');?>
:</legend>
      <div class="pageoverflow">
	<p class="pagetext"><label for="admintheme"><?php echo lang('admintheme');?>
:</label>&nbsp;<?php echo smarty_function_cms_help(array('key2'=>'help_myaccount_admintheme','title'=>lang('admintheme')),$_smarty_tpl);?>
</p>
	<p class="pageinput">
	  <select id="admintheme" name="admintheme">
	    <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['themes_opts']->value,'selected'=>$_smarty_tpl->tpl_vars['admintheme']->value),$_smarty_tpl);?>

	  </select>
	</p>
      </div>

      <div class="pageoverflow">
        <p class="pagetext"><label for="homepage"><?php echo lang('homepage');?>
:</label>&nbsp;<?php echo smarty_function_cms_help(array('key2'=>'help_myaccount_homepage','title'=>lang('homepage')),$_smarty_tpl);?>
</p>
        <p class="pageinput">
	  <?php echo $_smarty_tpl->tpl_vars['homepage']->value;?>

	</p>
      </div>

      <div class="pageoverflow">
	<p class="pagetext"><label for="admincallout"><?php echo lang('admincallout');?>
:</label>&nbsp;<?php echo smarty_function_cms_help(array('key2'=>'help_myaccount_admincallout','title'=>lang('admincallout')),$_smarty_tpl);?>
</p>
	<p class="pageinput">
	  <input class="pagenb" id="admincallout" type="checkbox" name="bookmarks" <?php if ($_smarty_tpl->tpl_vars['bookmarks']->value==true) {?>checked="checked"<?php }?> />
	  <?php echo lang('showbookmarks');?>

	</p>
      </div>

      <div class="pageoverflow">
	<p class="pagetext"><label for="hidehelp"><?php echo lang('hide_help_links');?>
:</label>&nbsp;<?php echo smarty_function_cms_help(array('key2'=>'help_myaccount_hidehelp','title'=>lang('hide_help_links')),$_smarty_tpl);?>
</p>
	<p class="pageinput">
	  <input class="pagenb" id="hidehelp" type="checkbox" name="hide_help_links" <?php if ($_smarty_tpl->tpl_vars['hide_help_links']->value==true) {?>checked="checked"<?php }?> />
	  <?php echo lang('hide_help_links_help');?>

	</p>
      </div>

      <div class="pageoverflow">
        <p class="pagetext"><label for="notifications"><?php echo lang('enablenotifications');?>
:</label>&nbsp;<?php echo smarty_function_cms_help(array('key2'=>'help_myaccount_enablenotifications','title'=>lang('enablenotifications')),$_smarty_tpl);?>
</p>
	<p class="pageinput">
	  <input class="pagenb" type="checkbox" id="notifications" name="enablenotifications" <?php if ($_smarty_tpl->tpl_vars['enablenotifications']->value==1) {?>checked="checked"<?php }?> />
	</p>
      </div>

      <div class="pageoverflow">
	<p class="pagetext"><label for="ignoremodules"><?php echo lang('ignorenotificationsfrommodules');?>
:</label>&nbsp;<?php echo smarty_function_cms_help(array('key2'=>'help_myaccount_ignoremodules','title'=>lang('ignorenotificationsfrommodules')),$_smarty_tpl);?>
</p>
	<p class="pageinput">
	  <select id="ignoremodules" name="ignoredmodules[]" multiple="multiple" size="5">
	    <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['module_opts']->value,'selected'=>$_smarty_tpl->tpl_vars['ignoredmodules']->value),$_smarty_tpl);?>

	  </select>
	</p>
      </div>
    </fieldset>

   <div class="pageoverflow">
     <div class="invisible">
	<input type="hidden" name="edituserprefs" value="true" />
	<input type="hidden" name="old_default_cms_lang" value="<?php echo $_smarty_tpl->tpl_vars['old_default_cms_lang']->value;?>
" />
     </div>
     <p class="pageinput">				
	<input type="submit" name="submit_prefs" value="<?php echo lang('submit');?>
" class="pagebutton" />
	<input type="submit" name="cancel" value="<?php echo lang('cancel');?>
" class="pagebutton" />
     </p>
   </div>		
 </form>
	
<?php echo $_smarty_tpl->tpl_vars['tab_end']->value;?>

<?php }?>

<?php echo $_smarty_tpl->tpl_vars['tabs_end']->value;?>

</div><?php }} ?>
