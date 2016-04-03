<?php /* Smarty version Smarty-3.1-DEV, created on 2016-04-02 11:19:56
         compiled from "C:\www\augustharvest\share\admin\templates\siteprefs.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1545556ffaadc2d3171-29327810%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '43ded1c05f39646747bc1513dd575422cec8029b' => 
    array (
      0 => 'C:\\www\\augustharvest\\share\\admin\\templates\\siteprefs.tpl',
      1 => 1459595196,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1545556ffaadc2d3171-29327810',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tab' => 0,
    'formurl' => 0,
    'SECURE_PARAM_NAME' => 0,
    'CMS_USER_KEY' => 0,
    'sitename' => 0,
    'languages' => 0,
    'frontendlang' => 0,
    'wysiwyg' => 0,
    'frontendwysiwyg' => 0,
    'metadata' => 0,
    'themes' => 0,
    'logintheme' => 0,
    'defaultdateformat' => 0,
    'thumbnail_width' => 0,
    'thumbnail_height' => 0,
    'search_modules' => 0,
    'search_module' => 0,
    'pretty_urls' => 0,
    'yesno' => 0,
    'content_autocreate_urls' => 0,
    'content_autocreate_flaturls' => 0,
    'content_mandatory_urls' => 0,
    'all_contenttypes' => 0,
    'disallowed_contenttypes' => 0,
    'all_attributes' => 0,
    'basic_attributes' => 0,
    'content_imagefield_path' => 0,
    'content_thumbnailfield_path' => 0,
    'contentimage_path' => 0,
    'content_cssnameisblockname' => 0,
    'enablesitedownmessage' => 0,
    'use_wysiwyg' => 0,
    'textarea_sitedownmessage' => 0,
    'sitedownexcludeadmins' => 0,
    'sitedownexcludes' => 0,
    'lang_info_sitedownexcludes' => 0,
    'maileritems' => 0,
    'mailprefs' => 0,
    'secure_opts' => 0,
    'allow_browser_cache' => 0,
    'browser_cache_expiry' => 0,
    'auto_clear_cache_age' => 0,
    'global_umask' => 0,
    'testresults' => 0,
    'enablenotifications' => 0,
    'lock_timeout' => 0,
    'pseudocron_options' => 0,
    'pseudocron_granularity' => 0,
    'adminlog_options' => 0,
    'adminlog_lifetime' => 0,
    'checkversion' => 0,
    'use_smartycache' => 0,
    'use_smartycompilecheck' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_56ffaadc4cb9e8_39869285',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56ffaadc4cb9e8_39869285')) {function content_56ffaadc4cb9e8_39869285($_smarty_tpl) {?><?php if (!is_callable('smarty_function_tab_header')) include 'C:\\www\\augustharvest\\share\\admin/plugins\\function.tab_header.php';
if (!is_callable('smarty_function_tab_start')) include 'C:\\www\\augustharvest\\share\\admin/plugins\\function.tab_start.php';
if (!is_callable('smarty_function_cms_help')) include 'C:\\www\\augustharvest\\share\\admin/plugins\\function.cms_help.php';
if (!is_callable('smarty_function_html_options')) include 'C:\\www\\augustharvest\\share\\lib\\smarty\\plugins\\function.html_options.php';
if (!is_callable('smarty_function_cms_html_options')) include 'C:\\www\\augustharvest\\share\\plugins\\function.cms_html_options.php';
if (!is_callable('smarty_cms_function_cms_yesno')) include 'C:\\www\\augustharvest\\share\\plugins\\function.cms_yesno.php';
if (!is_callable('smarty_function_tab_end')) include 'C:\\www\\augustharvest\\share\\admin/plugins\\function.tab_end.php';
?><div class="pagecontainer">

<script type="text/javascript">
$(document).ready(function(){
  $(document).on('click','[name=submit]',function(){
    return confirm('<?php echo strtr(lang('siteprefs_confirm'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
');
  });
});
</script>

<?php echo smarty_function_tab_header(array('name'=>'general','label'=>lang('general_settings'),'active'=>$_smarty_tpl->tpl_vars['tab']->value),$_smarty_tpl);?>

<?php echo smarty_function_tab_header(array('name'=>'editcontent','label'=>lang('editcontent_settings'),'active'=>$_smarty_tpl->tpl_vars['tab']->value),$_smarty_tpl);?>

<?php echo smarty_function_tab_header(array('name'=>'sitedown','label'=>lang('sitedown_settings'),'active'=>$_smarty_tpl->tpl_vars['tab']->value),$_smarty_tpl);?>

<?php echo smarty_function_tab_header(array('name'=>'mail','label'=>lang('mail_settings'),'active'=>$_smarty_tpl->tpl_vars['tab']->value),$_smarty_tpl);?>

<?php echo smarty_function_tab_header(array('name'=>'setup','label'=>lang('setup'),'active'=>$_smarty_tpl->tpl_vars['tab']->value),$_smarty_tpl);?>

<?php echo smarty_function_tab_header(array('name'=>'smarty','label'=>lang('smarty_settings'),'active'=>$_smarty_tpl->tpl_vars['tab']->value),$_smarty_tpl);?>



<?php echo smarty_function_tab_start(array('name'=>'general'),$_smarty_tpl);?>

	<form id="siteprefform_general" method="post" action="<?php echo $_smarty_tpl->tpl_vars['formurl']->value;?>
">
		<div>
			<input type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['SECURE_PARAM_NAME']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['CMS_USER_KEY']->value;?>
"/>
			<input type="hidden" name="active_tab" value="general" />
			<input type="hidden" name="editsiteprefs" value="true" />
		</div>
		<div class="pageoverflow">
			<p class="pageinput">
				<input type="submit" name="submit" value="<?php echo lang('submit');?>
" class="pagebutton" />
				<input type="submit" name="cancel" value="<?php echo lang('cancel');?>
" class="pagebutton" />
			</p>
			<br />
		</div>
		<div class="pageoverflow">
			<p class="pagetext"><label for="sitename"><?php echo lang('sitename');?>
:</label></p>
			<p class="pageinput"><input type="text" id="sitename" class="pagesmalltextarea" name="sitename" size="30" value="<?php echo $_smarty_tpl->tpl_vars['sitename']->value;?>
" />&nbsp;<?php echo smarty_function_cms_help(array('key2'=>'siteprefs_sitename','title'=>lang('sitename')),$_smarty_tpl);?>
</p>
		</div>
		<div class="pageoverflow">
			<p class="pagetext"><label for="frontendlang"><?php echo lang('frontendlang');?>
:</label></p>
			<p class="pageinput">
				<select id="frontendlang" name="frontendlang" style="vertical-align: middle;">
					<?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['languages']->value,'selected'=>$_smarty_tpl->tpl_vars['frontendlang']->value),$_smarty_tpl);?>

				</select>&nbsp;<?php echo smarty_function_cms_help(array('key2'=>'siteprefs_frontendlang','title'=>lang('frontendlang')),$_smarty_tpl);?>

			</p>
		</div>
		<div class="pageoverflow">
			<p class="pagetext"><label for="frontendwysiwyg"><?php echo lang('frontendwysiwygtouse');?>
:</label></p>
			<p class="pageinput">
				<select id="frontendwysiwyg" name="frontendwysiwyg">
					<?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['wysiwyg']->value,'selected'=>$_smarty_tpl->tpl_vars['frontendwysiwyg']->value),$_smarty_tpl);?>

				</select>&nbsp;<?php echo smarty_function_cms_help(array('key2'=>'siteprefs_frontendwysiwyg','title'=>lang('frontendwysiwygtouse')),$_smarty_tpl);?>

			</p>
		</div>
		<div class="pageoverflow">
			<p class="pagetext"><label for="globalmetadata"><?php echo lang('globalmetadata');?>
:</label>&nbsp;<?php echo smarty_function_cms_help(array('key2'=>'siteprefs_globalmetadata','title'=>lang('globalmetadata')),$_smarty_tpl);?>
</p>
			<p class="pageinput"><textarea id="globalmetadata" class="pagesmalltextarea" name="metadata" cols="80" rows="20"><?php echo $_smarty_tpl->tpl_vars['metadata']->value;?>
</textarea></p>
		</div>
		<?php if (isset($_smarty_tpl->tpl_vars['themes']->value)) {?>
			<div class="pageoverflow">
				<p class="pagetext"><label for="logintheme"><?php echo lang('master_admintheme');?>
:</label></p>
				<p class="pageinput">
					<select id="logintheme" name="logintheme">
						<?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['themes']->value,'selected'=>$_smarty_tpl->tpl_vars['logintheme']->value),$_smarty_tpl);?>

					</select>&nbsp;<?php echo smarty_function_cms_help(array('key2'=>'siteprefs_logintheme','title'=>lang('master_admintheme')),$_smarty_tpl);?>

				</p>
			</div>
		<?php }?>
		<div class="pageoverflow">
			<p class="pagetext"><label for="defaultdateformat"><?php echo lang('date_format_string');?>
:</label></p>
			<p class="pageinput">
				<input class="pagenb" id="defaultdateformat" type="text" name="defaultdateformat" size="20" maxlength="255" value="<?php echo $_smarty_tpl->tpl_vars['defaultdateformat']->value;?>
"/>&nbsp;<?php echo smarty_function_cms_help(array('key2'=>'siteprefs_dateformat','title'=>lang('date_format_string')),$_smarty_tpl);?>

			</p>
		</div>
		<div class="pageoverflow">
			<p class="pagetext"><label for="thumbnail_width"><?php echo lang('thumbnail_width');?>
:</label></p>
			<p class="pageinput">
				<input class="pagenb" id="thumbnail_width" type="text" name="thumbnail_width" size="3" maxlength="3" value="<?php echo $_smarty_tpl->tpl_vars['thumbnail_width']->value;?>
"/>
				&nbsp;<?php echo smarty_function_cms_help(array('key2'=>'siteprefs_thumbwidth','title'=>lang('thumbnail_width')),$_smarty_tpl);?>

			</p>
		</div>
		<div class="pageoverflow">
			<p class="pagetext"><label for="thumbnail_height"><?php echo lang('thumbnail_height');?>
:</label></p>
			<p class="pageinput">
				<input id="thumbnail_height" class="pagenb" type="text" name="thumbnail_height" size="3" maxlength="3" value="<?php echo $_smarty_tpl->tpl_vars['thumbnail_height']->value;?>
"/>
				&nbsp;<?php echo smarty_function_cms_help(array('key2'=>'siteprefs_thumbheight','title'=>lang('thumbnail_height')),$_smarty_tpl);?>

			</p>
		</div>
		<?php if (isset($_smarty_tpl->tpl_vars['search_modules']->value)) {?>
			<p class="pagetext"><label for="search_module"><?php echo lang('search_module');?>
:</label></p>
			<p class="pageinput">
				<select id="search_module" name="search_module">
					<?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['search_modules']->value,'selected'=>$_smarty_tpl->tpl_vars['search_module']->value),$_smarty_tpl);?>

				</select>&nbsp;<?php echo smarty_function_cms_help(array('key2'=>'settings_searchmodule','title'=>lang('search_module')),$_smarty_tpl);?>

			</p>
		<?php }?>
		<div class="pageoverflow">
			<br />
			<p class="pageinput">
				<input type="submit" name="submit" value="<?php echo lang('submit');?>
" class="pagebutton" />
				<input type="submit" name="cancel" value="<?php echo lang('cancel');?>
" class="pagebutton" />
			</p>
		</div>
	</form>


<?php echo smarty_function_tab_start(array('name'=>'editcontent'),$_smarty_tpl);?>

	<form id="siteprefform_editcontent" method="post" action="<?php echo $_smarty_tpl->tpl_vars['formurl']->value;?>
">
		<div>
			<input type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['SECURE_PARAM_NAME']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['CMS_USER_KEY']->value;?>
"/>
			<input type="hidden" name="active_tab" value="editcontent" />
			<input type="hidden" name="editsiteprefs" value="true" />
		</div>
		<?php if (!$_smarty_tpl->tpl_vars['pretty_urls']->value) {?>
			<div class="warning" style="display: block;"><?php echo lang('warn_nosefurl');?>
&nbsp;&nbsp;<?php echo smarty_function_cms_help(array('key2'=>'settings_nosefurl','title'=>lang('warn_nosefurl')),$_smarty_tpl);?>
</div>
		<?php }?>
		<div class="pageoverflow">
			<p class="pageinput">
				<input type="submit" name="submit" value="<?php echo lang('submit');?>
" class="pagebutton"  />
				<input type="submit" name="cancel" value="<?php echo lang('cancel');?>
" class="pagebutton"  />
			</p>
			<br />
		</div>
		<?php if ($_smarty_tpl->tpl_vars['pretty_urls']->value) {?>
			<div class="pageoverflow">
				<p class="pagetext"><label for="content_autocreate_urls"><?php echo lang('content_autocreate_urls');?>
:</label></p>
				<p class="pageinput">
					<select id="content_autocreate_urls" name="content_autocreate_urls">
						<?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['yesno']->value,'selected'=>$_smarty_tpl->tpl_vars['content_autocreate_urls']->value),$_smarty_tpl);?>

					</select>&nbsp;<?php echo smarty_function_cms_help(array('key2'=>'settings_autocreate_url','title'=>lang('content_autocreate_urls')),$_smarty_tpl);?>

				</p>
			</div>
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['pretty_urls']->value) {?>
			<div class="pageoverflow">
				<p class="pagetext"><label for="content_autocreate_flaturls"><?php echo lang('content_autocreate_flaturls');?>
:</label></p>
				<p class="pageinput">
					<select id="content_autocreate_flaturls" name="content_autocreate_flaturls">
						<?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['yesno']->value,'selected'=>$_smarty_tpl->tpl_vars['content_autocreate_flaturls']->value),$_smarty_tpl);?>

					</select>&nbsp;<?php echo smarty_function_cms_help(array('key2'=>'settings_autocreate_flaturls','title'=>lang('content_autocreate_flaturls')),$_smarty_tpl);?>

				</p>
			</div>
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['pretty_urls']->value) {?>
			<div class="pageoverflow">
				<p class="pagetext"><label for="content_mandatory_urls"><?php echo lang('content_mandatory_urls');?>
:</label></p>
				<p class="pageinput">
					<select id="content_mandatory_urls" name="content_mandatory_urls">
						<?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['yesno']->value,'selected'=>$_smarty_tpl->tpl_vars['content_mandatory_urls']->value),$_smarty_tpl);?>

					</select>&nbsp;<?php echo smarty_function_cms_help(array('key2'=>'settings_mandatory_urls','title'=>lang('content_mandatory_urls')),$_smarty_tpl);?>

				</p>
			</div>
		<?php }?>
		<div class="pageoverflow">
			<p class="pagetext"><label for="disallowed_contenttypes"><?php echo lang('disallowed_contenttypes');?>
:</label>&nbsp;<?php echo smarty_function_cms_help(array('key2'=>'settings_badtypes','title'=>lang('disallowed_contenttypes')),$_smarty_tpl);?>
</p>
			<p class="pageinput">
				<select id="disallowed_contenttypes" name="disallowed_contenttypes[]" multiple="multiple" size="5">
					<?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['all_contenttypes']->value,'selected'=>$_smarty_tpl->tpl_vars['disallowed_contenttypes']->value),$_smarty_tpl);?>

				</select>
			</p>
		</div>
		<div class="pageoverflow">
			<p class="pagetext"><label for="basic_attributes"><?php echo lang('basic_attributes');?>
:</label>&nbsp;<?php echo smarty_function_cms_help(array('key2'=>'settings_basicattribs','title'=>lang('basic_attributes')),$_smarty_tpl);?>
</p>
			<p class="pageinput">
				<select id="basic_attributes" class="multicolumn" name="basic_attributes[]" multiple="multiple" size="5">
					<?php echo smarty_function_cms_html_options(array('options'=>$_smarty_tpl->tpl_vars['all_attributes']->value,'selected'=>$_smarty_tpl->tpl_vars['basic_attributes']->value),$_smarty_tpl);?>

				</select>
			</p>
		</div>
		<div class="pageoverflow">
			<p class="pagetext"><label for="imagefield_path"><?php echo lang('content_imagefield_path');?>
:</label></p>
			<p class="pageinput">
				<input id="imagefield_path" type="text" name="content_imagefield_path" size="50" maxlength="255" value="<?php echo $_smarty_tpl->tpl_vars['content_imagefield_path']->value;?>
"/>
				&nbsp;<?php echo smarty_function_cms_help(array('key2'=>'settings_imagefield_path','title'=>lang('content_imagefield_path')),$_smarty_tpl);?>

			</p>
		</div>
		<div class="pageoverflow">
			<p class="pagetext"><label for="thumbfield_path"><?php echo lang('content_thumbnailfield_path');?>
:</label></p>
			<p class="pageinput">
				<input id="thumbfield_path" type="text" name="content_thumbnailfield_path" size="50" maxlength="255" value="<?php echo $_smarty_tpl->tpl_vars['content_thumbnailfield_path']->value;?>
"/>&nbsp;<?php echo smarty_function_cms_help(array('key2'=>'settings_thumbfield_path','title'=>lang('content_thumbnailfield_path')),$_smarty_tpl);?>

			</p>
		</div>
		<div class="pageoverflow">
			<p class="pagetext"><label for="contentimage_path"><?php echo lang('contentimage_path');?>
:</label></p>
			<p class="pageinput">
				<input type="text" id="contentimage_path" name="contentimage_path" size="50" maxlength="255" value="<?php echo $_smarty_tpl->tpl_vars['contentimage_path']->value;?>
"/>
				&nbsp;<?php echo smarty_function_cms_help(array('key2'=>'settings_contentimage_path','title'=>lang('contentimage_path')),$_smarty_tpl);?>

			</p>
		</div>
		<div class="pageoverflow">
			<p class="pagetext"><label for="cssnameisblockname"><?php echo lang('cssnameisblockname');?>
:</label></p>
			<p class="pageinput">
                                <select id="cssnameisblockname" name="content_cssnameisblockname">
                                <?php echo smarty_cms_function_cms_yesno(array('selected'=>$_smarty_tpl->tpl_vars['content_cssnameisblockname']->value),$_smarty_tpl);?>

				</select>
				&nbsp;<?php echo smarty_function_cms_help(array('key2'=>'settings_cssnameisblockname','title'=>lang('cssnameisblockname')),$_smarty_tpl);?>

			</p>
		</div>
		<div class="pageoverflow">
			<br />
			<p class="pageinput">
				<input type="submit" name="submit" value="<?php echo lang('submit');?>
" class="pagebutton" />
				<input type="submit" name="cancel" value="<?php echo lang('cancel');?>
" class="pagebutton" />
			</p>
		</div>
	</form>


<?php echo smarty_function_tab_start(array('name'=>'sitedown'),$_smarty_tpl);?>

	<form id="siteprefform_sitedown" method="post" action="<?php echo $_smarty_tpl->tpl_vars['formurl']->value;?>
">
		<div>
			<input type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['SECURE_PARAM_NAME']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['CMS_USER_KEY']->value;?>
"/>
			<input type="hidden" name="active_tab" value="sitedown" />
			<input type="hidden" name="editsiteprefs" value="true" />
		</div>
		<div class="information" style="display: block;"><?php echo lang('info_settings_sitedown');?>
</div>
		<div class="pageoverflow">
			<p class="pageinput">
				<input type="submit" name="submit" value="<?php echo lang('submit');?>
" class="pagebutton"  />
				<input type="submit" name="cancel" value="<?php echo lang('cancel');?>
" class="pagebutton"  />
			</p>
			<br />
		</div>

		<div class="pageoverflow">
			<p class="pagetext"><label for="enablesitedown"><?php echo lang('enablesitedown');?>
:</label> <?php echo smarty_function_cms_help(array('key2'=>'settings_enablesitedown','title'=>lang('enablesitedown')),$_smarty_tpl);?>
</p>
			<p class="pageinput">
				<select id="enablesitedown" name="enablesitedownmessage">
					<?php echo smarty_cms_function_cms_yesno(array('selected'=>$_smarty_tpl->tpl_vars['enablesitedownmessage']->value),$_smarty_tpl);?>

				</select>
		</div>
		<div class="pageoverflow">
			<p class="pagetext"><label for="usewysiwyg"><?php echo lang('enablewysiwyg');?>
:</label> <?php echo smarty_function_cms_help(array('key2'=>'settings_enablewysiwyg','title'=>lang('enablewysiwyg')),$_smarty_tpl);?>
</p>
			<p class="pageinput">
				<select id="enablewysiwyg" name="use_wysiwyg">
					<?php echo smarty_cms_function_cms_yesno(array('selected'=>$_smarty_tpl->tpl_vars['use_wysiwyg']->value),$_smarty_tpl);?>

				</select>
		</div>
		<div class="pageoverflow">
			<p class="pagetext"><?php echo lang('sitedownmessage');?>
: <?php echo smarty_function_cms_help(array('key2'=>'settings_sitedownmessage','title'=>lang('sitedownmessage')),$_smarty_tpl);?>
</p>
			<p class="pageinput"><?php echo $_smarty_tpl->tpl_vars['textarea_sitedownmessage']->value;?>
</p>
		</div>
		<div class="pageoverflow">
			<p class="pagetext"><?php echo lang('sitedownexcludeadmins');?>
: <?php echo smarty_function_cms_help(array('key2'=>'settings_sitedownexcludeadmins','title'=>lang('sitedownexcludeadmins')),$_smarty_tpl);?>
</p>
			<p class="pageinput">
				<select id="sitedownexcludeadmins" name="sitedownexcludeadmins">
					<?php echo smarty_cms_function_cms_yesno(array('selected'=>$_smarty_tpl->tpl_vars['sitedownexcludeadmins']->value),$_smarty_tpl);?>

				</select>
			</p>
		</div>
		<div class="pageoverflow">
			<p class="pagetext"><label for="sitedownexcludes"><?php echo lang('sitedownexcludes');?>
:</label> <?php echo smarty_function_cms_help(array('key2'=>'settings_sitedownexcludes','title'=>lang('sitedownexcludes')),$_smarty_tpl);?>
</p>
			<p class="pageinput">
				<input id="sitedownexcludes" type="text" name="sitedownexcludes" size="50" maxlength="255" value="<?php echo $_smarty_tpl->tpl_vars['sitedownexcludes']->value;?>
" />
				<br /><strong><?php echo lang('your_ipaddress');?>
:</strong>&nbsp;<span style="color: red;"><?php echo cms_utils::get_real_ip();?>
</span><br/><?php echo $_smarty_tpl->tpl_vars['lang_info_sitedownexcludes']->value;?>

			</p>
		</div>
		<div class="pageoverflow">
			<br />
			<p class="pageinput">
				<input type="submit" name="submit" value="<?php echo lang('submit');?>
" class="pagebutton" />
				<input type="submit" name="cancel" value="<?php echo lang('cancel');?>
" class="pagebutton" />
			</p>
		</div>
	</form>


<?php echo smarty_function_tab_start(array('name'=>'mail'),$_smarty_tpl);?>

<script type="text/javascript">
function on_mailer()
{
  var v = $('#mailer').val();
  if( v == 'mail' ) {
    $('#set_smtp').find('input,select').attr('disabled','disabled');
    $('#set_sendmail').find('input,select').attr('disabled','disabled');
  }
  else if( v == 'smtp' ) {
    $('#set_smtp').find('input,select').removeAttr('disabled');
    $('#set_sendmail').find('input,select').attr('disabled','disabled');
  }
  else if( v == 'sendmail' ) {
    $('#set_smtp').find('input,select').attr('disabled','disabled');
    $('#set_sendmail').find('input,select').removeAttr('disabled');
  }
}
$(document).ready(function(){
  $(document).on('click', '#mailertest', function(e){
    $('#testpopup').dialog({
      width: 'auto',
      modal: true
    });
    return false;
  });

  $(document).on('click', '#testcancel', function(e){
    $('#testpopup').dialog('close');
    return false;
  });
  $(document).on('click','#testsend', function(e){
    $('#testpopup').dialog('close');
    $(this).closest('form').submit();
  });

  $('#mailer').change(function(){
    on_mailer();
  });
  on_mailer();
});
</script>

	<div id="testpopup" title="<?php echo lang('title_mailtest');?>
" style="display: none;">
		<form id="siteprefform_mail" method="post" action="<?php echo $_smarty_tpl->tpl_vars['formurl']->value;?>
">
			<div>
				<input type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['SECURE_PARAM_NAME']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['CMS_USER_KEY']->value;?>
"/>
				<input type="hidden" name="active_tab" value="mail" />
				<input type="hidden" name="testmail" value="1"/>
			</div>
			<div class="information"><?php echo lang('info_mailtest');?>
</div>
			<div class="pageoverflow">
				<p class="pagetext"><label for="testaddress"><?php echo lang('settings_testaddress');?>
:</label>&nbsp;</p>
				<p class="pageinput">
					<input type="text" id="testaddress" name="mailtest_testaddress" size="50" maxlength="255"/>
					&nbsp;<?php echo smarty_function_cms_help(array('key2'=>'settings_mailtest_testaddress','title'=>lang('settings_testaddress')),$_smarty_tpl);?>

				</p>
			</div>
			<div class="pageoverflow">
				<p class="pagetext"></p>
				<p class="pageinput">
					<input id="testsend" type="submit" name="sendtest" value="<?php echo lang('sendtest');?>
"/>
					<input id="testcancel" type="submit" value="<?php echo lang('cancel');?>
"/>
				</p>
			</div>
		</form>
	</div>

	<form id="siteprefform_mail" method="post" action="<?php echo $_smarty_tpl->tpl_vars['formurl']->value;?>
">
		<div>
			<input type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['SECURE_PARAM_NAME']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['CMS_USER_KEY']->value;?>
"/>
			<input type="hidden" name="active_tab" value="mail" />
			<input type="hidden" name="editsiteprefs" value="true" />
		</div>
		<div class="pageoverflow">
			<p class="pageinput">
				<input type="submit" name="submit" value="<?php echo lang('submit');?>
" class="pagebutton"  />
				<input id="mailertest" type="submit" name="testemail" value="<?php echo lang('test');?>
" class="pagebutton"  />
				<input type="submit" name="cancel" value="<?php echo lang('cancel');?>
" class="pagebutton"  />
			</p>
			<br />
		</div>

		<fieldset id="set_general">
			<legend><?php echo lang('general_settings');?>
:</legend>
				<div class="pageoverflow">
					<p class="pagetext"><label for="mailer"><?php echo lang('settings_mailer');?>
:</labei></p>
					<p class="pageinput">
						<select id="mailer" name="mailprefs_mailer">
							<?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['maileritems']->value,'selected'=>$_smarty_tpl->tpl_vars['mailprefs']->value['mailer']),$_smarty_tpl);?>

						</select>&nbsp;<?php echo smarty_function_cms_help(array('key2'=>'settings_mailprefs_mailer','title'=>lang('settings_mailer')),$_smarty_tpl);?>

					</p>
				</div>
				<div class="pageoverflow">
					<p class="pagetext"><label for="from"><?php echo lang('settings_mailfrom');?>
:</label></p>
					<p class="pageinput">
						<input type="text" id="from" name="mailprefs_from" value="<?php echo $_smarty_tpl->tpl_vars['mailprefs']->value['from'];?>
" size="50" maxlength="255"/>
						&nbsp;<?php echo smarty_function_cms_help(array('key2'=>'settings_mailprefs_from','title'=>lang('settings_mailfrom')),$_smarty_tpl);?>

					</p>
				</div>
				<div class="pageoverflow">
					<p class="pagetext"><label for="fromuser"><?php echo lang('settings_mailfromuser');?>
:</label></p>
					<p class="pageinput">
						<input type="text" id="fromuser" name="mailprefs_fromuser" value="<?php echo $_smarty_tpl->tpl_vars['mailprefs']->value['fromuser'];?>
" size="50" maxlength="255"/>
						&nbsp;<?php echo smarty_function_cms_help(array('key2'=>'settings_mailprefs_fromuser','title'=>lang('settings_mailfromuser')),$_smarty_tpl);?>

					</p>
				</div>
		</fieldset>

		<fieldset id="set_smtp">
			<legend><?php echo lang('smtp_settings');?>
:</legend>
				<div class="pageoverflow">
					<p class="pagetext"><label for="host"><?php echo lang('settings_smtphost');?>
:</label></p>
					<p class="pageinput">
						<input type="text" id="host" name="mailprefs_host" value="<?php echo $_smarty_tpl->tpl_vars['mailprefs']->value['host'];?>
" size="50" maxlength="255"/>
						&nbsp;<?php echo smarty_function_cms_help(array('key2'=>'settings_mailprefs_smtphost','title'=>lang('settings_smtphost')),$_smarty_tpl);?>

					</p>
				</div>

				<div class="pageoverflow">
					<p class="pagetext"><label for="port"><?php echo lang('settings_smtpport');?>
:</label></p>
					<p class="pageinput">
						<input type="text" id="port" name="mailprefs_port" value="<?php echo $_smarty_tpl->tpl_vars['mailprefs']->value['port'];?>
" size="6" maxlength="8"/>
						&nbsp;<?php echo smarty_function_cms_help(array('key2'=>'settings_mailprefs_smtpport','title'=>lang('settings_smtpport')),$_smarty_tpl);?>

					</p>
				</div>

				<div class="pageoverflow">
					<p class="pagetext"><label for="timeout"><?php echo lang('settings_smtptimeout');?>
:</label></p>
					<p class="pageinput">
						<input type="text" id="timeout" name="mailprefs_timeout" value="<?php echo $_smarty_tpl->tpl_vars['mailprefs']->value['timeout'];?>
" size="6" maxlength="8"/>
						&nbsp;<?php echo smarty_function_cms_help(array('key2'=>'settings_mailprefs_smtptimeout','title'=>lang('settings_smtptimeout')),$_smarty_tpl);?>

					</p>
				</div>

				<fieldset>
					<legend><?php echo lang('settings_authentication');?>
:</legend>
					<div class="pageoverflow">
						<p class="pagetext"><label for="smtpauth"><?php echo lang('settings_smtpauth');?>
:</label></p>
						<p class="pageinput">
							<select id="smtpauth" name="mailprefs_smtpauth">
								<?php echo smarty_cms_function_cms_yesno(array('selected'=>$_smarty_tpl->tpl_vars['mailprefs']->value['smtpauth']),$_smarty_tpl);?>

							</select>&nbsp;<?php echo smarty_function_cms_help(array('key2'=>'settings_mailprefs_smtpauth','title'=>lang('settings_smtpauth')),$_smarty_tpl);?>

						</p>
					</div>

					<div class="pageoverflow">
						<p class="pagetext"><label for="secure"><?php echo lang('settings_authsecure');?>
:</label></p>
						<p class="pageinput">
							<select id="secure" name="mailprefs_secure">
								<?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['secure_opts']->value,'selected'=>$_smarty_tpl->tpl_vars['mailprefs']->value['secure']),$_smarty_tpl);?>

							</select>&nbsp;<?php echo smarty_function_cms_help(array('key2'=>'settings_mailprefs_smtpsecure','title'=>lang('settings_authsecure')),$_smarty_tpl);?>

						</p>
					</div>

					<div class="pageoverflow">
						<p class="pagetext"><label for="username"><?php echo lang('settings_authusername');?>
:</label></p>
						<p class="pageinput">
							<input type="text" id="username" name="mailprefs_username" value="<?php echo $_smarty_tpl->tpl_vars['mailprefs']->value['username'];?>
" size="50" maxlength="255"/>
							&nbsp;<?php echo smarty_function_cms_help(array('key2'=>'settings_mailprefs_smtpusername','title'=>lang('settings_authusername')),$_smarty_tpl);?>

						</p>
					</div>

					<div class="pageoverflow">
						<p class="pagetext"><label for="password"><?php echo lang('settings_authpassword');?>
:</label></p>
						<p class="pageinput">
							<input type="password" id="password" name="mailprefs_password" value="<?php echo $_smarty_tpl->tpl_vars['mailprefs']->value['password'];?>
" size="50" maxlength="50"/>
							&nbsp;<?php echo smarty_function_cms_help(array('key2'=>'settings_mailprefs_smtppassword','title'=>lang('settings_authpassword')),$_smarty_tpl);?>

						</p>
					</div>
				</fieldset>
		</fieldset>

		<fieldset id="set_sendmail">
			<legend><?php echo lang('sendmail_settings');?>
:</legend>
				<div class="pageoverflow">
					<p class="pagetext"><label for="sendmail"><?php echo lang('settings_sendmailpath');?>
:</label></p>
					<p class="pageinput">
						<input type="text" id="sendmail" name="mailprefs_sendmail" value="<?php echo $_smarty_tpl->tpl_vars['mailprefs']->value['sendmail'];?>
" size="50" maxlength="255"/>
						&nbsp;<?php echo smarty_function_cms_help(array('key2'=>'settings_mailprefs_sendmail','title'=>lang('settings_sendmailpath')),$_smarty_tpl);?>

					</p>
				</div>
		</fieldset>
		<div class="pageoverflow">
			<br />
			<p class="pageinput">
				<input type="submit" name="submit" value="<?php echo lang('submit');?>
" class="pagebutton" />
				<input type="submit" name="cancel" value="<?php echo lang('cancel');?>
" class="pagebutton" />
			</p>
		</div>
	</form>


<?php echo smarty_function_tab_start(array('name'=>'setup'),$_smarty_tpl);?>

	<form id="siteprefform_setup" method="post" action="<?php echo $_smarty_tpl->tpl_vars['formurl']->value;?>
">
		<div>
			<input type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['SECURE_PARAM_NAME']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['CMS_USER_KEY']->value;?>
"/>
			<input type="hidden" name="active_tab" value="setup" />
			<input type="hidden" name="editsiteprefs" value="true" />
		</div>
		<div class="pageoverflow">
			<p class="pageinput">
				<input type="submit" name="submit" value="<?php echo lang('submit');?>
" class="pagebutton"  />
				<input type="submit" name="cancel" value="<?php echo lang('cancel');?>
" class="pagebutton"  />
			</p>
			<br />
		</div>

		<fieldset>
			<legend><?php echo lang('browser_cache_settings');?>
:&nbsp;</legend>
				<div class="pageoverflow">
					<p class="pagetext"><label for="allow_browser_cache"><?php echo lang('allow_browser_cache');?>
:</label></p>
					<p class="pageinput">
						<select name="allow_browser_cache">
							<?php echo smarty_cms_function_cms_yesno(array('selected'=>$_smarty_tpl->tpl_vars['allow_browser_cache']->value),$_smarty_tpl);?>

						</select>&nbsp;<?php echo smarty_function_cms_help(array('key2'=>'settings_browsercache','title'=>lang('allow_browser_cache')),$_smarty_tpl);?>

					</p>
				</div>
				<div class="pageoverflow">
					<p class="pagetext"><label for="browser_expiry"><?php echo lang('browser_cache_expiry');?>
:</label></p>
					<p class="pageinput">
						<input type="text" id="browser_expiry" name="browser_cache_expiry" value="<?php echo $_smarty_tpl->tpl_vars['browser_cache_expiry']->value;?>
" size="6" maxlength="10"/>
						&nbsp;<?php echo smarty_function_cms_help(array('key2'=>'settings_browsercache_expiry','title'=>lang('browser_cache_expiry')),$_smarty_tpl);?>

					</p>
				</div>
		</fieldset>

		<fieldset>
			<legend><?php echo lang('server_cache_settings');?>
:&nbsp;</legend>
				<div class="pageoverflow">
					<p class="pagetext"><label for="autoclearcache2"><?php echo lang('autoclearcache2');?>
:</label></p>
					<p class="pageinput">
						<input id="autoclearcache2" type="text" name="auto_clear_cache_age" size="4" value="<?php echo $_smarty_tpl->tpl_vars['auto_clear_cache_age']->value;?>
" maxlength="4"/>&nbsp;<?php echo smarty_function_cms_help(array('key2'=>'settings_autoclearcache','title'=>lang('autoclearcache2')),$_smarty_tpl);?>

					</p>
				</div>
		</fieldset>
		<fieldset>
			<legend><?php echo lang('general_operation_settings');?>
:&nbsp;</legend>
				<div class="pageoverflow">
					<p class="pagetext"><label for="umask"><?php echo lang('global_umask');?>
:</label></p>
					<p class="pageinput">
						<input id="umask" type="text" class="pagesmalltextarea" name="global_umask" size="4" value="<?php echo $_smarty_tpl->tpl_vars['global_umask']->value;?>
" />
						&nbsp;<?php echo smarty_function_cms_help(array('key2'=>'settings_umask','title'=>lang('global_umask')),$_smarty_tpl);?>

					</p>
				</div>
				<?php if (isset($_smarty_tpl->tpl_vars['testresults']->value)) {?>
					<div class="pageoverflow">
						<p class="pagetext"><?php echo lang('results');?>
</p>
						<p class="pageinput"><strong><?php echo $_smarty_tpl->tpl_vars['testresults']->value;?>
</strong></p>
					</div>
				<?php }?>
				<div class="pageoverflow">
					<p class="pagetext">&nbsp;</p>
					<p class="pageinput"><input type="submit" name="testumask" value="<?php echo lang('test');?>
" class="pagebutton"  /></p>
				</div>
				<div class="pageoverflow">
					<p class="pagetext"><label for="notifications"><?php echo lang('admin_enablenotifications');?>
:</label></p>
					<p class="pageinput">
						<select id="notifications" name="enablenotifications">
							<?php echo smarty_cms_function_cms_yesno(array('selected'=>$_smarty_tpl->tpl_vars['enablenotifications']->value),$_smarty_tpl);?>

						</select>&nbsp;<?php echo smarty_function_cms_help(array('key2'=>'settings_enablenotifications','title'=>lang('admin_enablenotifications')),$_smarty_tpl);?>

				</div>
				<div class="pageoverflow">
					<p class="pagetext"><label for="notifications"><?php echo lang('admin_lock_timeout');?>
:</label></p>
					<p class="pageinput">
					        <input type="text" name="lock_timeout" size="3" value="<?php echo $_smarty_tpl->tpl_vars['lock_timeout']->value;?>
"/>
						&nbsp;<?php echo smarty_function_cms_help(array('key2'=>'settings_lock_timeout','title'=>lang('admin_lock_timeout')),$_smarty_tpl);?>

				</div>
				<div class="pageoverflow">
					<p class="pagetext"><label for="pseudocron"><?php echo lang('pseudocron_granularity');?>
:</label></p>
					<p class="pageinput">
						<select id="pseudocron" name="pseudocron_granularity">
							<?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['pseudocron_options']->value,'selected'=>$_smarty_tpl->tpl_vars['pseudocron_granularity']->value),$_smarty_tpl);?>

						</select>&nbsp;<?php echo smarty_function_cms_help(array('key2'=>'settings_pseudocron_granularity','title'=>lang('pseudocron_granularity')),$_smarty_tpl);?>

					</p>
				</div>
				<div class="pageoverflow">
					<p class="pagetext"><label for="adminlog"><?php echo lang('adminlog_lifetime');?>
:</label></p>
					<p class="pageinput">
						<select id="adminlog" name="adminlog_lifetime">
							<?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['adminlog_options']->value,'selected'=>$_smarty_tpl->tpl_vars['adminlog_lifetime']->value),$_smarty_tpl);?>

						</select>&nbsp;<?php echo smarty_function_cms_help(array('key2'=>'settings_adminlog_lifetime','title'=>lang('adminlog_lifetime')),$_smarty_tpl);?>

					</p>
				</div>
				<div class="pageoverflow">
					<p class="pagetext"><label for="checkversion"><?php echo lang('checkversion');?>
:</label></p>
					<p class="pageinput">
						<select id="checkversion" name="checkversion">
							<?php echo smarty_cms_function_cms_yesno(array('options'=>$_smarty_tpl->tpl_vars['checkversion']->value,'selected'=>$_smarty_tpl->tpl_vars['checkversion']->value),$_smarty_tpl);?>

						</select>&nbsp;<?php echo smarty_function_cms_help(array('key2'=>'settings_checkversion','title'=>lang('checkversion')),$_smarty_tpl);?>

					</p>
				</div>
		</fieldset>
		<div class="pageoverflow">
			<br />
			<p class="pageinput">
				<input type="submit" name="submit" value="<?php echo lang('submit');?>
" class="pagebutton" />
				<input type="submit" name="cancel" value="<?php echo lang('cancel');?>
" class="pagebutton" />
			</p>
		</div>
	</form>


<?php echo smarty_function_tab_start(array('name'=>'smarty'),$_smarty_tpl);?>

	<form id="siteprefform_setup" method="post" action="<?php echo $_smarty_tpl->tpl_vars['formurl']->value;?>
">
		<div>
			<input type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['SECURE_PARAM_NAME']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['CMS_USER_KEY']->value;?>
"/>
			<input type="hidden" name="active_tab" value="smarty" />
			<input type="hidden" name="editsiteprefs" value="true" />
		</div>
		<div class="pageoverflow">
			<p class="pageinput">
				<input type="submit" name="submit" value="<?php echo lang('submit');?>
" class="pagebutton"  />
				<input type="submit" name="cancel" value="<?php echo lang('cancel');?>
" class="pagebutton"  />
			</p>
			<br />
		</div>

		<div class="pageoverflow">
			<p class="pagetext"><label for="smartycache"><?php echo lang('prompt_use_smartycaching');?>
:</label></p>
			<p class="pageinput">
				<select id="smartycache" name="use_smartycache">
					<?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['yesno']->value,'selected'=>$_smarty_tpl->tpl_vars['use_smartycache']->value),$_smarty_tpl);?>

				</select>&nbsp;<?php echo smarty_function_cms_help(array('key2'=>'settings_smartycaching','title'=>lang('prompt_use_smartycaching')),$_smarty_tpl);?>

			</p>
		</div>
		<div class="pageoverflow">
			<p class="pagetext"><label for="compilecheck"><?php echo lang('prompt_smarty_compilecheck');?>
:</label></p>
			<p class="pageinput">
				<select for="compilecheck" name="use_smartycompilecheck">
					<?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['yesno']->value,'selected'=>$_smarty_tpl->tpl_vars['use_smartycompilecheck']->value),$_smarty_tpl);?>

				</select>&nbsp;<?php echo smarty_function_cms_help(array('key2'=>'settings_smartycompilecheck','title'=>lang('prompt_smarty_compilecheck')),$_smarty_tpl);?>

			</p>
		</div>
	</form>
<?php echo smarty_function_tab_end(array(),$_smarty_tpl);?>


</div>
<?php }} ?>
