<?php

    /**
     * For full documentation, please visit: http://docs.reduxframework.com/
     * For a more extensive sample-config file, you may look at:
     * https://github.com/reduxframework/redux-framework/blob/master/sample/sample-config.php
     */

    if ( ! class_exists( 'Redux' ) ) {
        return;
    }

    // This is your option name where all the Redux data is stored.
    $opt_name = "fdata";

    /**
     * ---> SET ARGUMENTS
     * All the possible arguments for Redux.
     * For full documentation on arguments, please refer to: https://github.com/ReduxFramework/ReduxFramework/wiki/Arguments
     * */

    $theme = wp_get_theme(); // For use with some settings. Not necessary.

    $args = array(
		'dev_mode'             => false,
        // Show the time the page took to load, etc
        'opt_name' => 'fdata',
		'display_name'         => $theme->get( 'Name' ),
        // Name that appears at the top of your panel
        'display_version'      => $theme->get( 'Version' ),
        // Version that appears at the top of your panel
        'page_slug' => 'theme_options',
        'page_title' => 'Theme Options',
        'update_notice' => TRUE,
        'intro_text' => '<p>Welcome to theme options panel. Here you can customize your theme settings and other options.</p>’',
        'admin_bar' => TRUE,
        'menu_type' => 'menu',
        'menu_title' => 'Theme Options',
        'allow_sub_menu' => TRUE,
        'page_parent_post_type' => 'your_post_type',
        'customizer' => TRUE,
        'default_mark' => '*',
        'google_api_key' => '', //'AIzaSyBL-bbPaDMKFz1wvSY4BFReNYDH_5xoZzI',
        'class' => 'redux_cont',
        'hints' => array(
            'icon' => 'el el-question-sign',
            'icon_position' => 'right',
            'icon_size' => 'normal',
            'tip_style' => array(
                'color' => 'light',
                'shadow' => '1',
                'style' => 'youtube',
            ),
            'tip_position' => array(
                'my' => 'top left',
                'at' => 'bottom right',
            ),
            'tip_effect' => array(
                'show' => array(
                    'duration' => '500',
                    'event' => 'mouseover',
                ),
                'hide' => array(
                    'duration' => '500',
                    'event' => 'mouseleave unfocus',
                ),
            ),
        ),
        'output' => TRUE,
        'output_tag' => TRUE,
        'settings_api' => TRUE,
        'cdn_check_time' => '1440',
        'compiler' => TRUE,
        'page_permissions' => 'manage_options',
        'save_defaults' => TRUE,
        'show_import_export' => TRUE,
        'transient_time' => '3600',
        'network_sites' => TRUE,
        'hide_reset' => TRUE,
    );

    $args['share_icons'][] = array(
        'url'   => 'https://www.facebook.com/InfloWay',
        'title' => 'Like us on Facebook',
        'icon'  => 'el el-facebook'
    );
    $args['share_icons'][] = array(
        'url'   => 'https://twitter.com/InfloWay',
        'title' => 'Follow us on Twitter',
        'icon'  => 'el el-twitter'
    );

    Redux::setArgs( $opt_name, $args );

    /*
     * ---> END ARGUMENTS
     */

    /*
     * ---> START HELP TABS
     */

    $tabs = array(
        array(
            'id'      => 'redux-help-tab-1',
            'title'   => __( 'Theme Information 1', 'admin_folder' ),
            'content' => __( '<p>This is the tab content, HTML is allowed.</p>', 'admin_folder' )
        ),
        array(
            'id'      => 'redux-help-tab-2',
            'title'   => __( 'Theme Information 2', 'admin_folder' ),
            'content' => __( '<p>This is the tab content, HTML is allowed.</p>', 'admin_folder' )
        )
    );
    Redux::setHelpTab( $opt_name, $tabs );

    // Set the help sidebar
    $content = __( '<p>This is the sidebar content, HTML is allowed.</p>', 'admin_folder' );
    Redux::setHelpSidebar( $opt_name, $content );


    /*
     * <--- END HELP TABS
     */


    