<?php

function get_head(){
    get_template_part("header");
}
function get_nav(){
    get_template_part("navbar");
}
function get_footer(){
    get_template_part("footer");
}
function get_content(){
    get_template_part("content");
}
function get_home(){
    get_template_part("home");
}

function get_template_part($filename){

    $file_path = DEMO_DIR.DIRECTORY_SEPARATOR.$filename.".php";

    if(!is_file($file_path)) {
        $file_path = DEMO_DIR.DIRECTORY_SEPARATOR."template".DIRECTORY_SEPARATOR.$filename.".php";
    }

    if(!is_file($file_path)) {
        $file_path = DEMO_DIR.DIRECTORY_SEPARATOR."template".DIRECTORY_SEPARATOR."content-nofound.php";
    }
    include_once $file_path;
}