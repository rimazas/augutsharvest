<?php /* Smarty version Smarty-3.1-DEV, created on 2016-04-02 11:20:21
         compiled from "C:\www\augustharvest\share\admin\templates\listtags.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2029256ffaaf5d85de1-65836275%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4d6027eea81e4a97c810d45fd10b4692495439e0' => 
    array (
      0 => 'C:\\www\\augustharvest\\share\\admin\\templates\\listtags.tpl',
      1 => 1459595196,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2029256ffaaf5d85de1-65836275',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'header' => 0,
    'subheader' => 0,
    'wiki_url' => 0,
    'image_help_external' => 0,
    'content' => 0,
    'error' => 0,
    'plugins' => 0,
    'rowclass' => 0,
    'one' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_56ffaaf5e22f51_63813944',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56ffaaf5e22f51_63813944')) {function content_56ffaaf5e22f51_63813944($_smarty_tpl) {?><?php if (!is_callable('smarty_function_cycle')) include 'C:\\www\\augustharvest\\share\\lib\\smarty\\plugins\\function.cycle.php';
?><div class="pagecontainer">
  <div class="pageoverflow"><?php echo $_smarty_tpl->tpl_vars['header']->value;?>
</div>
  <?php if (isset($_smarty_tpl->tpl_vars['subheader']->value)) {?>
    <div class="pageheader"><?php echo $_smarty_tpl->tpl_vars['subheader']->value;?>

    <?php if (isset($_smarty_tpl->tpl_vars['wiki_url']->value)&&isset($_smarty_tpl->tpl_vars['image_help_external']->value)) {?>
       <span class="helptext">
         <a class='helpicon' href="<?php echo $_smarty_tpl->tpl_vars['wiki_url']->value;?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['image_help_external']->value;?>
</a><a href="<?php echo $_smarty_tpl->tpl_vars['wiki_url']->value;?>
" target="_blank"><?php echo lang('help');?>
</a> (<?php echo lang('new_window');?>
)
       </span>
    <?php }?>
    </div>
  <?php }?>
  
  <?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
    <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

  <?php } elseif (isset($_smarty_tpl->tpl_vars['error']->value)) {?>
    <div class="pageerrorcontainer"><div class="pageoverflow"><ul class="pageerror"><li><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</li></ul></div></div>
  <?php } elseif (isset($_smarty_tpl->tpl_vars['plugins']->value)) {?>
    <table class="pagetable">
      <thead> 
       <tr>
         <th><span title="<?php echo lang_by_realm('tags','tag_name');?>
"><?php echo lang('name');?>
</span></th>
         <th><span title="<?php echo lang_by_realm('tags','tag_type');?>
"><?php echo lang('type');?>
</span></th>
	 <th class="pagew10"><span title="<?php echo lang_by_realm('tags','tag_adminplugin');?>
"><?php echo lang('adminplugin');?>
</span></th>
         <th class="pagew10"><span title="<?php echo lang_by_realm('tags','tag_cachable');?>
"><?php echo lang('cachable');?>
</span></th>
         <th class="pagew10"><span title="<?php echo lang_by_realm('tags','tag_help');?>
"><?php echo lang('help');?>
</span></th>
         <th class="pagew10"><span title="<?php echo lang_by_realm('tags','tag_about');?>
"><?php echo lang('about');?>
</span></th>
       </tr>
      </thead> 
      <tbody>
      <?php  $_smarty_tpl->tpl_vars['one'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['one']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['plugins']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['one']->key => $_smarty_tpl->tpl_vars['one']->value) {
$_smarty_tpl->tpl_vars['one']->_loop = true;
?>
	<?php echo smarty_function_cycle(array('values'=>"row1,row2",'assign'=>'rowclass'),$_smarty_tpl);?>

	<tr class="<?php echo $_smarty_tpl->tpl_vars['rowclass']->value;?>
">
         <td>
           <?php if (isset($_smarty_tpl->tpl_vars['one']->value['help_url'])) {?>
             <a href="<?php echo $_smarty_tpl->tpl_vars['one']->value['help_url'];?>
" title="<?php echo lang_by_realm('tags','viewhelp');?>
"><?php echo $_smarty_tpl->tpl_vars['one']->value['name'];?>
</a>
           <?php } else { ?>
             <?php echo $_smarty_tpl->tpl_vars['one']->value['name'];?>

           <?php }?>
         </td>
         <td>
            <span title="<?php echo lang_by_realm('tags',$_smarty_tpl->tpl_vars['one']->value['type']);?>
"><?php echo $_smarty_tpl->tpl_vars['one']->value['type'];?>
</span>
         </td>
         <td>
            <?php if (isset($_smarty_tpl->tpl_vars['one']->value['admin'])&&$_smarty_tpl->tpl_vars['one']->value['admin']) {?>
              <span title="<?php echo lang_by_realm('tags','title_admin');?>
"><?php echo lang('yes');?>
</span>
            <?php } else { ?>
              <span title="<?php echo lang_by_realm('tags','title_notadmin');?>
"><?php echo lang('no');?>
</span>
            <?php }?>
         </td>
         <td>
            <?php if (isset($_smarty_tpl->tpl_vars['one']->value['cachable'])&&$_smarty_tpl->tpl_vars['one']->value['cachable']=='yes') {?>
              <span title="<?php echo lang_by_realm('tags','title_cachable');?>
"><?php echo lang('yes');?>
</span>
            <?php } else { ?>
              <span title="<?php echo lang_by_realm('tags','title_notcachable');?>
"><?php echo lang('no');?>
</span>
            <?php }?>
         </td>
         <td>
           <?php if (isset($_smarty_tpl->tpl_vars['one']->value['help_url'])) {?>
             <a href="<?php echo $_smarty_tpl->tpl_vars['one']->value['help_url'];?>
" title="<?php echo lang_by_realm('tags','viewhelp');?>
"><?php echo lang('help');?>
</a>
           <?php }?>
         </td>
         <td>
           <?php if (isset($_smarty_tpl->tpl_vars['one']->value['about_url'])) {?>
             <a href="<?php echo $_smarty_tpl->tpl_vars['one']->value['about_url'];?>
" title="<?php echo lang_by_realm('tags','viewabout');?>
"><?php echo lang('about');?>
</a>
           <?php }?>
         </td>
       </tr>
      <?php } ?>
      </tbody>
    </table>
  <?php }?>
</div><?php }} ?>
