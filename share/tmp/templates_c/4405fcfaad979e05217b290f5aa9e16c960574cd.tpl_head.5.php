<?php /* Smarty version Smarty-3.1-DEV, created on 2016-04-02 11:17:12
         compiled from "tpl_head:5" */ ?>
<?php /*%%SmartyHeaderCode:2615056ffaa388118c6-77590360%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4405fcfaad979e05217b290f5aa9e16c960574cd' => 
    array (
      0 => 'tpl_head:5',
      1 => '1459595211',
      2 => 'tpl_head',
    ),
  ),
  'nocache_hash' => '2615056ffaa388118c6-77590360',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_56ffaa3882e929_08584424',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56ffaa3882e929_08584424')) {function content_56ffaa3882e929_08584424($_smarty_tpl) {?><?php if (!is_callable('smarty_function_sitename')) include 'C:\\www\\augustharvest\\share\\plugins\\function.sitename.php';
if (!is_callable('smarty_function_title')) include 'C:\\www\\augustharvest\\share\\plugins\\function.title.php';
if (!is_callable('smarty_function_metadata')) include 'C:\\www\\augustharvest\\share\\plugins\\function.metadata.php';
if (!is_callable('smarty_cms_function_cms_stylesheet')) include 'C:\\www\\augustharvest\\share\\plugins\\function.cms_stylesheet.php';
if (!is_callable('smarty_function_cms_selflink')) include 'C:\\www\\augustharvest\\share\\plugins\\function.cms_selflink.php';
?><head>
    <title><?php echo smarty_function_sitename(array(),$_smarty_tpl);?>
 - <?php echo smarty_function_title(array(),$_smarty_tpl);?>
</title>


 <?php echo smarty_function_metadata(array(),$_smarty_tpl);?>



 <?php echo smarty_cms_function_cms_stylesheet(array(),$_smarty_tpl);?>



 <?php echo smarty_function_cms_selflink(array('dir'=>"start",'rellink'=>1),$_smarty_tpl);?>

 <?php echo smarty_function_cms_selflink(array('dir'=>"prev",'rellink'=>1),$_smarty_tpl);?>

 <?php echo smarty_function_cms_selflink(array('dir'=>"next",'rellink'=>1),$_smarty_tpl);?>




 
<script type="text/JavaScript">
<!--
//pass min and max - measured against window width
function P7_MinMaxW(a,b){
var nw="auto",w=document.documentElement.clientWidth;
if(w>=b){nw=b+"px";}if(w<=a){nw=a+"px";}return nw;
}
//-->
</script>
    <!--[if lte IE 6]>
    <style type="text/css">
    #pagewrapper {width:expression(P7_MinMaxW(720,1200));}
    #container {height: 1%;}
    </style>
    <![endif]-->
    


  </head><?php }} ?>
