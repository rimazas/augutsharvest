<?php
header("Content-type: text/css");
$compiled_css_file = "style.css";
$scss_file = "main.scss";

$latest_file_mtime = 0;
$scss = glob("main_scss/*.scss");
$scss[] = $scss_file;
foreach($scss as $scss_f){
    $f_mtime = filemtime($scss_f);
    if($f_mtime > $latest_file_mtime) $latest_file_mtime = $f_mtime;
}

if(
    file_exists($compiled_css_file)
    &&
    filemtime($compiled_css_file) > $latest_file_mtime
){
    echo file_get_contents($compiled_css_file);
}else{
    require "../vendors/scssphp/scss.inc.php";
    $scss = new scssc();
    $scss->setFormatter("scss_formatter_compressed");
    $css = $scss->compile('
        @import "'.$scss_file.'";
    ');
    file_put_contents($compiled_css_file, $css);
    echo $css;
}
?>