<?php

Redux::setSection(

    'teacrate_theme_options', // This is your opt_name,

    array( // This is your arguments array
        'id'    => 'home_page_settings',
        // Unique identifier for your panel. Must be set and must not contain spaces or special characters
        'title' => 'Home Page Settings',
        'icon'  => 'el el-home',
        // http://elusiveicons.com/icons/
        //'subsection' => true, // Enable this as subsection of a previous section
        'subsection' => false, // Enable this as subsection of a previous section



        'fields' => array(
					
            array(
                'id'       => 'revslider_shortcode',
                'type'     => 'text',
                'title'    => __('Home page slider shortcode', 'teacrate_theme_options'),
                'subtitle' => __('This is the homepage main slider shortcode', 'teacrate_theme_options'),
                'desc'     => __('Plese enter the shortcode', 'teacrate_theme_options')
            ),			
			
        )
    )
);

/* **************** Inner Page Links ******************* */

Redux::setSection(

    'teacrate_theme_options', // This is your opt_name,

    array( // This is your arguments array
        'id'    => 'home_page_pages_section',
        // Unique identifier for your panel. Must be set and must not contain spaces or special characters

        'title' => 'Inner Page Links',
        'icon'  => 'el el-cog',

        // http://elusiveicons.com/icons/

        'subsection' => true, // Enable this as subsection of a previous section

        'fields' => array(
            array(
                'id'          => 'home_page_page_links',
                'type'        => 'slides',
                'title'       => __('Inner Pages', 'teacrate_theme_options'),
                'subtitle'    => __('4 slides required', 'teacrate_theme_options'),
                //'desc'        => __('This field will store all slides values into a multidimensional array to use into a foreach loop.', 'redux-framework-demo'),
                'placeholder' => array(
                    'title'           => __('This is a title', 'teacrate_theme_options'),
                    'description'     => __('Description Here', 'teacrate_theme_options'),
                    'url'             => __('Page Link', 'teacrate_theme_options'),
                ),
            ),
        )
    )
);


/* **************** Home page why us section ******************* */

Redux::setSection(

    'teacrate_theme_options', // This is your opt_name,

    array( // This is your arguments array
        'id'    => 'home_page_whyus_section',
        // Unique identifier for your panel. Must be set and must not contain spaces or special characters

        'title' => 'why us section',
        'icon'  => 'el el-cog',

        // http://elusiveicons.com/icons/

        'subsection' => true, // Enable this as subsection of a previous section

        'fields' => array(
            array(
                'id'          => 'home_page_whyus_content',
                'type'        => 'slides',
                'title'       => __('why us title and description', 'teacrate_theme_options'),
                'subtitle'    => __('add up to 5 fields', 'teacrate_theme_options'),
                //'desc'        => __('This field will store all slides values into a multidimensional array to use into a foreach loop.', 'redux-framework-demo'),
                'placeholder' => array(
                    'title'           => __('This is a title', 'teacrate_theme_options'),
                    'description'     => __('Description Here', 'teacrate_theme_options'),
                    'url'             => __('Page Link', 'teacrate_theme_options'),
                ),
            ),
        )
    )
);


/* **************** Home page ACCREDITATIONS section ******************* */

Redux::setSection(

    'teacrate_theme_options', // This is your opt_name,

    array( // This is your arguments array
        'id'    => 'home_page_accreditations_section',
        // Unique identifier for your panel. Must be set and must not contain spaces or special characters

        'title' => 'accreditations section',
        'icon'  => 'el el-cog',

        // http://elusiveicons.com/icons/

        'subsection' => true, // Enable this as subsection of a previous section

        'fields' => array(
            array(
                'id'          => 'home_page_accreditations_logos',
                'type'        => 'slides',
                'title'       => __('accreditations logos', 'teacrate_theme_options'),
                'subtitle'    => __('add fields', 'teacrate_theme_options'),
                //'desc'        => __('This field will store all slides values into a multidimensional array to use into a foreach loop.', 'redux-framework-demo'),
                'placeholder' => array(
                    'title'           => __('This is a title', 'teacrate_theme_options'),
                    'description'     => __('Description Here', 'teacrate_theme_options'),
                    'url'             => __('Page Link', 'teacrate_theme_options'),
                ),
            ),
        )
    )
);