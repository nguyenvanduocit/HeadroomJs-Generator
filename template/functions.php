<?php
/**
 * @project regexpBuilderJS-Example
 * @author  nguyenvanduocit
 * @date    02/18/2015
 */
require_once "template_tag.php";
require_once "inc/AppData.php";

function print_script ()
{
    $scripts = AppData::get_instance()->scripts;
    ob_start();
    foreach ( $scripts as $script ) {
        echo '<script src="'.$script.'"></script>';
    }
    ob_end_flush();
}

function print_style ()
{
    $styles = AppData::get_instance()->styles;
    ob_start();
    foreach ( $styles as $style ) {
        echo '<link href="'.$style.'" rel="stylesheet">';
    }
    ob_end_flush();
}

function senviet_demo_template ()
{
    get_head();
    get_nav();
    if ( isset( $_GET['page'] ) ) {
        get_template_part( "content-".$_GET['page'] );
    } else {
        get_template_part( "content" );
    }
    get_footer();
}