<?php /* Smarty version Smarty-3.1-DEV, created on 2016-04-02 11:17:12
         compiled from "cms_stylesheet:Navigation FatFootMenu" */ ?>
<?php /*%%SmartyHeaderCode:768356ffaa388c1279-06472409%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e7d794e0661fda537b3e87004ed45c37e0db7a7e' => 
    array (
      0 => 'cms_stylesheet:Navigation FatFootMenu',
      1 => '1459595211',
      2 => 'cms_stylesheet',
    ),
  ),
  'nocache_hash' => '768356ffaa388c1279-06472409',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_56ffaa388c6ae2_73129734',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56ffaa388c6ae2_73129734')) {function content_56ffaa388c6ae2_73129734($_smarty_tpl) {?><?php if (!is_callable('smarty_function_root_url')) include 'C:\\www\\augustharvest\\share\\plugins\\function.root_url.php';
?>/* cmsms stylesheet: Navigation FatFootMenu modified: 04/02/16 11:06:51 */
#footer ul {
/* some margin is set in the footer padding */
   margin: 0px;
/* calling a specific side, left in this case */
   margin-left: 5px;
   padding: 0px;
/* remove any default bullets, image used in li call */
   list-style: none;
}
#footer ul li {
/* remove any default bullets, image used for consistency */
   list-style: none;
/* float left to set first level li items across the top */
   float:left;
/* a little margin at top */
   margin: 5px 0px 0px;
/* padding all the way around */
   padding: 5px;
/* you can set your own image here, used for consistency */
   background: url(<?php echo smarty_function_root_url(array(),$_smarty_tpl);?>
/uploads/ngrey/dot.gif) no-repeat left 10px;
}
#footer ul li a {
/* this will make the "a" link a solid shape */
   display:block;
   margin: 2px 0px 4px;
   padding: 0px 5px 5px 5px;
}
/* set h3 to look like "a" */
#footer li h3 {
   font-weight:normal;
   font-size:100%;
   margin: 2px 0px 2px 0px;
   padding: 0px 5px 5px 5px;
}
/* set h3 to look like "a", less margin at this level */
#footer li li h3 {
   font-weight:normal;
   font-size:100%;
   margin: 0px;
   padding: 0px 5px 5px 5px;
}
#footer ul li li {
/* remove any default bullets, image used for consistency */
   list-style: none;
/* remove float so they line up under top li */
   float:none;
/* less margin/padding */
   margin: 0px;
   padding: 0px 0px 0px 5px;
/* you can set your own image here, used for consistency */
   background: url(<?php echo smarty_function_root_url(array(),$_smarty_tpl);?>
/uploads/ngrey/dot.gif) no-repeat left 3px;
}
/* fix for IE6 */
* html #footer ul li a {
   margin: 2px 0px 0px;
   padding: 0px 5px 5px 5px;
}
* html #footer ul li li a {
   margin: 0px 0px 0px;
   padding: 0px 5px 0px 5px;
}
/* End fix for IE6 */
#footer ul ul {
/* remove float so they line up under top li */
   float:none;
/* a little margin to offset it */
   margin: 0px 0px 0px 8px;
   padding: 0;
}
#footer ul ul ul {
/* remove float so they line up under li above it */
   float:none;
/* a little margin to offset it */
   margin: 0px 0px 0px 8px;
   padding: 0;
}
<?php }} ?>
