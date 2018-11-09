<?php
define("DOCROOT",$_SERVER["DOCUMENT_ROOT"]);
include "functions.php";
$page = @$_GET['page'];

$_ROUTES = [
    "" => "main_logic.main",
    "main" => "main_logic.main",
    "news" => "main_logic.news",
    "gallery" => "main_logic.gallery",
    "404"=>"main_logic.error"
];

!isset($_ROUTES[$page])?$page="404":$page;
list($logicpage,$pagefile)=explode(".",$_ROUTES[$page]);
loadPage($logicpage,$pagefile);