<?php

$opt_name = "teacrate_theme_options";

Redux::setArgs(
    'teacrate_theme_options',
    array(
        'display_name' => 'Teacrate Theme Options',
        'display_version' => 'version 1.1',
        'menu_title' => 'Theme Options',
        'admin_bar' => 'true',
        'page_slug' => 'teacrate_theme_options',
        'menu_type' => 'menu',
        'allow_sub_menu' => true,
    )
);



include('options/settings.php');
include('options/home.php');
include('options/footer.php');
//include('options/brochures.php');

/*
include('options/footer.php');

*/
