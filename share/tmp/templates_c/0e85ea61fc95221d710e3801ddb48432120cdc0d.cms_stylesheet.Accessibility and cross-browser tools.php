<?php /* Smarty version Smarty-3.1-DEV, created on 2016-04-02 11:17:12
         compiled from "cms_stylesheet:Accessibility and cross-browser tools" */ ?>
<?php /*%%SmartyHeaderCode:1605056ffaa388ad2e0-88341939%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0e85ea61fc95221d710e3801ddb48432120cdc0d' => 
    array (
      0 => 'cms_stylesheet:Accessibility and cross-browser tools',
      1 => '1459595211',
      2 => 'cms_stylesheet',
    ),
  ),
  'nocache_hash' => '1605056ffaa388ad2e0-88341939',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_56ffaa388b4019_67326294',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56ffaa388b4019_67326294')) {function content_56ffaa388b4019_67326294($_smarty_tpl) {?><?php if (!is_callable('smarty_function_root_url')) include 'C:\\www\\augustharvest\\share\\plugins\\function.root_url.php';
?>/* cmsms stylesheet: Accessibility and cross-browser tools modified: 04/02/16 11:06:51 */
/* accessibility */
/* menu links accesskeys */
span.accesskey {
	text-decoration: none;
}
/* accessibility divs are hidden by default, text, screenreaders and such will show these */
.accessibility, hr {
/* position set so the rest can be set out side of visual browser viewport */
	position: absolute;
/* takes it out top side */
	top: -999em;
/* takes it out left side */
	left: -999em;
}
/* definition tags are also hidden, these are also used for accessibility menu links */
dfn {
	position: absolute;
	left: -1000px;
	top: -1000px;
	width: 0;
	height: 0;
	overflow: hidden;
	display: inline;
}
/* end accessibility */
/* wiki style external links */
/* external links will have "(external link)" text added, lets hide it */
a.external span {
	position: absolute;
	left: -5000px;
	width: 4000px;
}
a.external {
/* make some room for the image, css shorthand rules, read: first top padding 0 then right padding 12px then bottom then right */
	padding: 0 12px 0 0;
}
/* colors for external links */
a.external:link {
	color: #18507C;
/* background image for the link to show wiki style arrow */
	background: url(<?php echo smarty_function_root_url(array(),$_smarty_tpl);?>
/uploads/NCleanBlue/external.gif) no-repeat 100% -100px;
}
a.external:visited {
	color: #18507C;
/* a different color can be used for visited external links */
/* Set the last 0 to -100px to use that part of the external.gif image for different color for active links external.gif is actually 300px tall, we can use different positions of the image to simulate rollover image changes.*/
	background: url(<?php echo smarty_function_root_url(array(),$_smarty_tpl);?>
/uploads/NCleanBlue/external.gif) no-repeat 100% -100px;
}
a.external:hover {
	color: #18507C;
/* Set the last 0 to -200px to use that part of the external.gif image for different color on hover */
	background: url(<?php echo smarty_function_root_url(array(),$_smarty_tpl);?>
/uploads/NCleanBlue/external.gif) no-repeat 100% 0;
	background-color: inherit;
}
/* end wiki style external links */
/* clearing */
/* clearfix is a hack for divs that hold floated elements. it will force the holding div to span all the way down to last floated item. We strongly recommend against using this as it is a hack and might not render correctly but it is included here for convenience. Do not edit if you dont know what you are doing*/
.clearfix:after {
	content: ".";
	display: block;
	height: 0;
	clear: both;
	visibility: hidden;
}
.clear {
	height: 0;
	clear: both;
	width: 90%;
	visibility: hidden;
}
#main .clear {
	height: 0;
	clear: right;
	width: 90%;
	visibility: hidden;
}
* html>body .clearfix {
	display: inline-block;
	width: 100%;
}
* html .clear {
/* Hides from IE-mac \*/
	height: 1%;
	clear: right;
	width: 90%;
/* End hide from IE-mac */
}
/* end clearing */
<?php }} ?>
