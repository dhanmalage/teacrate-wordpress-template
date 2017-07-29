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
    )
);


/* **************** Home Slider Section ******************* */

Redux::setSection(

    'teacrate_theme_options', // This is your opt_name,

    array( // This is your arguments array

        'id'    => 'home_page_slider_section',

        // Unique identifier for your panel. Must be set and must not contain spaces or special characters

        'title' => 'Slider Section',

        'icon'  => 'el el-cog',

        // http://elusiveicons.com/icons/

        'subsection' => true, // Enable this as subsection of a previous section

        'fields' => array(
		
			/* ********** Slider background image ********** */
			array(
                'id' => 'home-slider-bg-section-start',
                'type' => 'section',
                'title' => __('Home Slider Background', 'teacrate_theme_options'),
                'subtitle' => __('This is slider background image banner.', 'teacrate_theme_options'),
                'indent' => true
            ),
			
			array(
                'id'       => 'home_slider_background_img',
                'type'     => 'media',
                'url'      => true,
                'title'    => __('Background Image', 'teacrate_theme_options'),
                'desc'     => __('upload your background image,', 'teacrate_theme_options'),
                'subtitle' => __('This image using for main background on slider section.', 'teacrate_theme_options')
            ),
			
			array(
                'id'     => 'home-slider-bg-section-end',
                'type'   => 'section',
                'indent' => false,
            ),
            
            /* ********* Slide 1 start ********* */
            array(
                'id' => 'home-slide1-section-start',
                'type' => 'section',
                'title' => __('Home Slide 1', 'teacrate_theme_options'),
                'subtitle' => __('This is slide 1 on banner.', 'teacrate_theme_options'),
                'indent' => true
            ),

            array(
                'id'       => 'home_slide1_tab',
                'type'     => 'text',
                'title'    => __('Tab Text for slide 1', 'teacrate_theme_options')
            ),
            
            array(
                'id'       => 'home_slide1_title1',
                'type'     => 'text',
                'title'    => __('Main Title Line 1', 'teacrate_theme_options')
            ),
            array(
                'id'       => 'home_slide1_title2',
                'type'     => 'text',
                'title'    => __('Main Title Line 2', 'teacrate_theme_options')
            ),
            array(
                'id'       => 'home_slide1_title3',
                'type'     => 'text',
                'title'    => __('Main Title Line 3', 'teacrate_theme_options')
            ),
			
			array(
                'id'       => 'home_slide1_title_small',
                'type'     => 'text',
                'title'    => __('Small Title for slide 1', 'teacrate_theme_options')
            ),
			
            array(
                'id'       => 'home_slide1_button_link',
                'type'     => 'text',
                'title'    => __('Find Out Button Link Slide 1', 'teacrate_theme_options'),
                'validate' => 'url',
                'msg'      => 'Please enter a valid url'
            ),
						
            array(
                'id'     => 'home-slide1-section-end',
                'type'   => 'section',
                'indent' => false,
            ),
            /* ********* Slide 1 end ********* */

            /* ********* Slide 2 start ********* */
            array(
                'id' => 'home-slide2-section-start',
                'type' => 'section',
                'title' => __('Home Slide 2', 'teacrate_theme_options'),
                'subtitle' => __('This is slide 2 on banner.', 'teacrate_theme_options'),
                'indent' => true
            ),

            array(
                'id'       => 'home_slide2_tab',
                'type'     => 'text',
                'title'    => __('Tab Text for slide 2', 'teacrate_theme_options')
            ),
            
            array(
                'id'       => 'home_slide2_title1',
                'type'     => 'text',
                'title'    => __('Main Title Line 1', 'teacrate_theme_options')
            ),
            array(
                'id'       => 'home_slide2_title2',
                'type'     => 'text',
                'title'    => __('Main Title Line 2', 'teacrate_theme_options')
            ),
            array(
                'id'       => 'home_slide2_title3',
                'type'     => 'text',
                'title'    => __('Main Title Line 3', 'teacrate_theme_options')
            ),

			array(
                'id'       => 'home_slide2_title_small',
                'type'     => 'text',
                'title'    => __('Small Title for slide 2', 'teacrate_theme_options')
            ),
			
            array(
                'id'       => 'home_slide2_button_link',
                'type'     => 'text',
                'title'    => __('Find Out Button Link Slide 2', 'teacrate_theme_options'),
                'validate' => 'url',
                'msg'      => 'Please enter a valid url'
            ),

            array(
                'id'     => 'home-slide1-section-end',
                'type'   => 'section',
                'indent' => false,
            ),
            /* ********* Slide 2 end ********* */

            /* ********* Slide 3 start ********* */
            array(
                'id' => 'home-slide3-section-start',
                'type' => 'section',
                'title' => __('Home Slide 3', 'teacrate_theme_options'),
                'subtitle' => __('This is slide 3 on banner.', 'teacrate_theme_options'),
                'indent' => true
            ),

            array(
                'id'       => 'home_slide3_tab',
                'type'     => 'text',
                'title'    => __('Tab Text for slide 3', 'teacrate_theme_options')
            ),
            
            array(
                'id'       => 'home_slide3_title1',
                'type'     => 'text',
                'title'    => __('Main Title Line 1', 'teacrate_theme_options')
            ),
            array(
                'id'       => 'home_slide3_title2',
                'type'     => 'text',
                'title'    => __('Main Title Line 2', 'teacrate_theme_options')
            ),
            array(
                'id'       => 'home_slide3_title3',
                'type'     => 'text',
                'title'    => __('Main Title Line 3', 'teacrate_theme_options')
            ),
			
			array(
                'id'       => 'home_slide3_title_small',
                'type'     => 'text',
                'title'    => __('Small Title for slide 3', 'teacrate_theme_options')
            ),

            array(
                'id'       => 'home_slide3_button_link',
                'type'     => 'text',
                'title'    => __('Find Out Button Link Slide 3', 'teacrate_theme_options'),
                'validate' => 'url',
                'msg'      => 'Please enter a valid url'
            ),

            array(
                'id'     => 'home-slide1-section-end',
                'type'   => 'section',
                'indent' => false,
            ),
            /* ********* Slide 3 end ********* */

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
