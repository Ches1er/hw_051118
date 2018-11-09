<?php

function mainPage($pagefile){
    $data= getData($pagefile);
    echo renderTemplateWithView($data,"default",$pagefile);
}

function galleryPage($pagefile){
    $data= getData($pagefile);
    extract($data);
    echo renderTemplateWithView($data,"default",$pagefile);
}

function newsPage($pagefile){
    $data= getData($pagefile);
    extract($data);
    echo renderTemplateWithView($data,"default",$pagefile);
}

function errorPage($pagefile){
    $data= "Error! Page is not found";
    echo renderTemplateWithView($data,"default",$pagefile);
}