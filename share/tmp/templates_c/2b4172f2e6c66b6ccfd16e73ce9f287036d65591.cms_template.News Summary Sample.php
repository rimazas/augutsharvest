<?php /* Smarty version Smarty-3.1-DEV, created on 2016-04-02 11:17:12
         compiled from "cms_template:News Summary Sample" */ ?>
<?php /*%%SmartyHeaderCode:1037956ffaa3872f246-13842254%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2b4172f2e6c66b6ccfd16e73ce9f287036d65591' => 
    array (
      0 => 'cms_template:News Summary Sample',
      1 => '1459595219',
      2 => 'cms_template',
    ),
  ),
  'nocache_hash' => '1037956ffaa3872f246-13842254',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cats' => 0,
    'node' => 0,
    'category_name' => 0,
    'pagecount' => 0,
    'pagenumber' => 0,
    'firstpage' => 0,
    'prevpage' => 0,
    'pagetext' => 0,
    'oftext' => 0,
    'nextpage' => 0,
    'lastpage' => 0,
    'items' => 0,
    'entry' => 0,
    'category_label' => 0,
    'author_label' => 0,
    'field' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_56ffaa387aa3f1_83995987',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56ffaa387aa3f1_83995987')) {function content_56ffaa387aa3f1_83995987($_smarty_tpl) {?><?php if (!is_callable('smarty_function_repeat')) include 'C:\\www\\augustharvest\\share\\plugins\\function.repeat.php';
if (!is_callable('smarty_modifier_cms_date_format')) include 'C:\\www\\augustharvest\\share\\plugins\\modifier.cms_date_format.php';
if (!is_callable('smarty_modifier_cms_escape')) include 'C:\\www\\augustharvest\\share\\plugins\\modifier.cms_escape.php';
?><!-- Start News Display Template -->

<ul class="list1">
<?php  $_smarty_tpl->tpl_vars['node'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['node']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cats']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['node']->key => $_smarty_tpl->tpl_vars['node']->value) {
$_smarty_tpl->tpl_vars['node']->_loop = true;
?>
<?php if ($_smarty_tpl->tpl_vars['node']->value['depth']>$_smarty_tpl->tpl_vars['node']->value['prevdepth']) {?>
<?php echo smarty_function_repeat(array('string'=>"<ul>",'times'=>$_smarty_tpl->tpl_vars['node']->value['depth']-$_smarty_tpl->tpl_vars['node']->value['prevdepth']),$_smarty_tpl);?>

<?php } elseif ($_smarty_tpl->tpl_vars['node']->value['depth']<$_smarty_tpl->tpl_vars['node']->value['prevdepth']) {?>
<?php echo smarty_function_repeat(array('string'=>"</li></ul>",'times'=>$_smarty_tpl->tpl_vars['node']->value['prevdepth']-$_smarty_tpl->tpl_vars['node']->value['depth']),$_smarty_tpl);?>

</li>
<?php } elseif ($_smarty_tpl->tpl_vars['node']->value['index']>0) {?></li>
<?php }?>
<li<?php if ($_smarty_tpl->tpl_vars['node']->value['index']==0) {?> class="firstnewscat"<?php }?>>
<?php if ($_smarty_tpl->tpl_vars['node']->value['count']>0) {?>
	<a href="<?php echo $_smarty_tpl->tpl_vars['node']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['node']->value['news_category_name'];?>
</a><?php } else { ?><span><?php echo $_smarty_tpl->tpl_vars['node']->value['news_category_name'];?>
 </span><?php }?>
<?php } ?>
<?php echo smarty_function_repeat(array('string'=>"</li></ul>",'times'=>$_smarty_tpl->tpl_vars['node']->value['depth']-1),$_smarty_tpl);?>
</li>
</ul>


<?php if ($_smarty_tpl->tpl_vars['category_name']->value) {?>
<h1><?php echo $_smarty_tpl->tpl_vars['category_name']->value;?>
</h1>
<?php }?>



<?php if ($_smarty_tpl->tpl_vars['pagecount']->value>1) {?>
  <p>
<?php if ($_smarty_tpl->tpl_vars['pagenumber']->value>1) {?>
<?php echo $_smarty_tpl->tpl_vars['firstpage']->value;?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['prevpage']->value;?>
&nbsp;
<?php }?>
<?php echo $_smarty_tpl->tpl_vars['pagetext']->value;?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['pagenumber']->value;?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['oftext']->value;?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['pagecount']->value;?>

<?php if ($_smarty_tpl->tpl_vars['pagenumber']->value<$_smarty_tpl->tpl_vars['pagecount']->value) {?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['nextpage']->value;?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['lastpage']->value;?>

<?php }?>
</p>
<?php }?>
<?php  $_smarty_tpl->tpl_vars['entry'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['entry']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['entry']->key => $_smarty_tpl->tpl_vars['entry']->value) {
$_smarty_tpl->tpl_vars['entry']->_loop = true;
?>
<div class="NewsSummary">

<?php if ($_smarty_tpl->tpl_vars['entry']->value->postdate) {?>
	<div class="NewsSummaryPostdate">
		<?php echo smarty_modifier_cms_date_format($_smarty_tpl->tpl_vars['entry']->value->postdate);?>

	</div>
<?php }?>

<div class="NewsSummaryLink">
<a href="<?php echo $_smarty_tpl->tpl_vars['entry']->value->moreurl;?>
" title="<?php echo smarty_modifier_cms_escape($_smarty_tpl->tpl_vars['entry']->value->title,'htmlall');?>
"><?php echo smarty_modifier_cms_escape($_smarty_tpl->tpl_vars['entry']->value->title);?>
</a>
</div>

<div class="NewsSummaryCategory">
	<?php echo $_smarty_tpl->tpl_vars['category_label']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['entry']->value->category;?>

</div>

<?php if ($_smarty_tpl->tpl_vars['entry']->value->author) {?>
	<div class="NewsSummaryAuthor">
		<?php echo $_smarty_tpl->tpl_vars['author_label']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['entry']->value->author;?>

	</div>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['entry']->value->summary) {?>
	<div class="NewsSummarySummary">
		<?php echo $_smarty_tpl->tpl_vars['entry']->value->summary;?>

	</div>

	<div class="NewsSummaryMorelink">
		[<?php echo $_smarty_tpl->tpl_vars['entry']->value->morelink;?>
]
	</div>

<?php } elseif ($_smarty_tpl->tpl_vars['entry']->value->content) {?>

	<div class="NewsSummaryContent">
		<?php echo $_smarty_tpl->tpl_vars['entry']->value->content;?>

	</div>
<?php }?>

<?php if (isset($_smarty_tpl->tpl_vars['entry']->value->extra)) {?>
    <div class="NewsSummaryExtra">
        <?php echo $_smarty_tpl->tpl_vars['entry']->value->extra;?>

	
    </div>
<?php }?>
<?php if (isset($_smarty_tpl->tpl_vars['entry']->value->fields)) {?>
  <?php  $_smarty_tpl->tpl_vars['field'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['field']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['entry']->value->fields; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['field']->key => $_smarty_tpl->tpl_vars['field']->value) {
$_smarty_tpl->tpl_vars['field']->_loop = true;
?>
     <div class="NewsSummaryField">
        <?php if ($_smarty_tpl->tpl_vars['field']->value->type=='file') {?>
          <?php if (isset($_smarty_tpl->tpl_vars['field']->value->value)&&$_smarty_tpl->tpl_vars['field']->value->value) {?>
            <img src="<?php echo $_smarty_tpl->tpl_vars['entry']->value->file_location;?>
/<?php echo $_smarty_tpl->tpl_vars['field']->value->value;?>
"/>
          <?php }?>
        <?php } else { ?>
          <?php echo $_smarty_tpl->tpl_vars['field']->value->name;?>
:&nbsp;<?php echo $_smarty_tpl->tpl_vars['field']->value->value;?>

        <?php }?>
     </div>
  <?php } ?>
<?php }?>

</div>
<?php } ?>
<!-- End News Display Template --><?php }} ?>
