<?php

Redux::setSection(

    'teacrate_theme_options', // This is your opt_name,

    array( // This is your arguments array
        'id'    => 'global_settings',
        // Unique identifier for your panel. Must be set and must not contain spaces or special characters
        'title' => 'General Settings',
        'icon'  => 'el el-cog',
        // http://elusiveicons.com/icons/
        //'subsection' => true, // Enable this as subsection of a previous section
        'subsection' => false, // Enable this as subsection of a previous section



        'fields' => array(
		
			array(
                'id'       => 'logo_header',
                'type'     => 'media',
                'url'      => true,
                'title'    => __('Logo Image', 'teacrate_theme_options'),
                'desc'     => __('upload your logo image,', 'teacrate_theme_options'),
                'subtitle' => __('This image using for main Logo on header menu section.', 'teacrate_theme_options')
            ),

            array(
                'id'       => 'contact_banner_text',
                'type'     => 'text',
                'title'    => __('Main Contact Banner Text', 'teacrate_theme_options'),
                'subtitle' => __('This is the contact banner text', 'teacrate_theme_options'),
                'desc'     => __('Plese enter the text to display in banner', 'teacrate_theme_options'),
                'default'  => 'CALL US FOR A FREE QUOTE OR CONTACT US'
            ),			
			
			array(
                'id'       => 'contact_number',
                'type'     => 'text',
                'title'    => __('Main Contact Number', 'teacrate_theme_options'),
                'subtitle' => __('This is the contact number', 'teacrate_theme_options'),
                'desc'     => __('Plese enter the text to display', 'teacrate_theme_options')
            ),
			
			array(
                'id'=>'enquire_now',
                'type' => 'text',
                'title' => __('Enquire Now form shortcode', 'teacrate_theme_options'),
                'subtitle' => __('Enter the shortcode for Enquire Now', 'teacrate_theme_options')
            ),
			
			array(
                'id' => 'cookies-section-start',
                'type' => 'section',
                'title' => __('Cookies consent section', 'teacrate_theme_options'),
                'subtitle' => __('Cookies consent title and text.', 'teacrate_theme_options'),
                'indent' => true
            ),
			
			array(
                'id'=>'cookies_title',
                'type' => 'text',
                'title' => __('Cookies consent title', 'teacrate_theme_options'),
                'subtitle' => __('Enter cookies consent title', 'teacrate_theme_options')
            ),
			
			array(
                'id'=>'cookies_text',
                'type' => 'textarea',
                'title' => __('Cookies consent text', 'teacrate_theme_options'),
                'subtitle' => __('Enter cookies consent text', 'teacrate_theme_options')
            ),
			
			array(
                'id'     => 'cookies-section-end',
                'type'   => 'section',
                'indent' => false,
            ),
			array(
                'id' => 'analytics-section-start',
                'type' => 'section',
                'title' => __('Google analytics section', 'teacrate_theme_options'),
                'subtitle' => __('Google analytics codes.', 'teacrate_theme_options'),
                'indent' => true
            ),
			array(
                'id'=>'google_analytics_code',
                'type' => 'textarea',
                'title' => __('Google analytics code', 'teacrate_theme_options'),
                'subtitle' => __('Enter google analytics here', 'teacrate_theme_options')
            ),
			array(
                'id'=>'google_tag_manager',
                'type' => 'textarea',
                'title' => __('Google Tag Manager Install Code', 'greenleaf_theme_options'),
                'subtitle' => __('Google Tag Manager Install Code', 'greenleaf_theme_options')
            ),
			array(
                'id'     => 'analytics-section-end',
                'type'   => 'section',
                'indent' => false,
            )
        )
    )
);



