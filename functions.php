<?php
function loadPage($logicpage,$page){
    include DOCROOT."/logicpages/".$logicpage.".php";
    $func = $page."Page";
    $func($page);
}

function getData($dataFile){
    ob_start();
    include DOCROOT."/data/".$dataFile."_data.php";
    return $data;
}

function renderTemplate($template,$content,$data){
    ob_start();
    extract($data);
    include DOCROOT."/templates/".$template.".php";
    return ob_get_clean();
}

function renderView($data=[],$pagefile){
    ob_start();
    extract($data);
    include DOCROOT."/views/".$pagefile.".php";
    return ob_get_clean();
}

function renderTemplateWithView($data,$template,$pagefile){
    $content = renderView($data,$pagefile);
    return renderTemplate($template,$content,$data);
}