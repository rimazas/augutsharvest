<?php /* Smarty version Smarty-3.1-DEV, created on 2016-04-02 11:16:32
         compiled from "cms_template:5" */ ?>
<?php /*%%SmartyHeaderCode:257956ffaa103c63e8-97490002%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b3176df7f77bd574207125de6078e97d77dc7455' => 
    array (
      0 => 'cms_template:5',
      1 => '1459595211',
      2 => 'cms_template',
    ),
  ),
  'nocache_hash' => '257956ffaa103c63e8-97490002',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_56ffaa1046a974_59797702',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56ffaa1046a974_59797702')) {function content_56ffaa1046a974_59797702($_smarty_tpl) {?><?php if (!is_callable('smarty_function_sitename')) include 'C:\\www\\augustharvest\\share\\plugins\\function.sitename.php';
if (!is_callable('smarty_function_title')) include 'C:\\www\\augustharvest\\share\\plugins\\function.title.php';
if (!is_callable('smarty_function_metadata')) include 'C:\\www\\augustharvest\\share\\plugins\\function.metadata.php';
if (!is_callable('smarty_function_cms_selflink')) include 'C:\\www\\augustharvest\\share\\plugins\\function.cms_selflink.php';
if (!is_callable('smarty_function_anchor')) include 'C:\\www\\augustharvest\\share\\plugins\\function.anchor.php';
if (!is_callable('smarty_function_global_content')) include 'C:\\www\\augustharvest\\share\\plugins\\function.global_content.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">




  <head>
    <title><?php echo smarty_function_sitename(array(),$_smarty_tpl);?>
 - <?php echo smarty_function_title(array(),$_smarty_tpl);?>
</title>


 <?php echo smarty_function_metadata(array(),$_smarty_tpl);?>



 


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
    


  </head>
  <body>
    <div id="pagewrapper">


      <ul class="accessibility">
        <li><?php echo smarty_function_anchor(array('anchor'=>'menu_vert','title'=>'Skip to navigation','accesskey'=>'n','text'=>'Skip to navigation'),$_smarty_tpl);?>
</li>
        <li><?php echo smarty_function_anchor(array('anchor'=>'main','title'=>'Skip to content','accesskey'=>'s','text'=>'Skip to content'),$_smarty_tpl);?>
</li>
      </ul>


      <hr class="accessibility" />



      <div id="header">


        <h2 class="headright"><?php echo smarty_function_sitename(array(),$_smarty_tpl);?>
</h2>


        <h1><?php echo smarty_function_cms_selflink(array('dir'=>"start",'text'=>((string)$_smarty_tpl->tpl_vars['sitename']->value)),$_smarty_tpl);?>
</h1> 
       
        <hr class="accessibility" />
      </div>



      <div id="search">
      
      </div>



      <div class="crbk">


        <div class="breadcrumbs">
        
          <hr class="accessibility" />
        </div>
      </div>



      <div id="content">


        <div id="sidebar">
          <div id="sidebara">


            <div id="menu_vert">
              <h2 class="accessibility">Navigation</h2>
              
            </div>



            <div id="news">
              <h2>News</h2>
              
            </div>


          </div>
        </div>




        <div class="back">        
          <div id="main">
            <h2><?php echo smarty_function_title(array(),$_smarty_tpl);?>
</h2>
            
            <br />




            <div class="right49">
              <p><?php echo smarty_function_anchor(array('anchor'=>'main','text'=>'^ Top'),$_smarty_tpl);?>
</p>
            </div>

            <div class="left49">
              <p><?php echo smarty_function_cms_selflink(array('dir'=>"previous"),$_smarty_tpl);?>



              <br />
              <?php echo smarty_function_cms_selflink(array('dir'=>"next"),$_smarty_tpl);?>

              </p>
            </div>


            <hr class="accessibility" />
          </div>
        </div>


        <div class="clear"></div>


      </div>



      <div class="footback">
        <div id="footer">

          <div id="fooleft">
          
          </div>
          <div id="footrt">
          <?php echo smarty_function_global_content(array('name'=>'footer'),$_smarty_tpl);?>

          </div>
          <div class="clear"></div>
        </div>
      </div>


    </div>

  </body>
</html><?php }} ?>
