<?php
/*START SECTIONS*/
	Redux::setSection( $opt_name, array(
		'title' => __('Logo/Icon/Slider', 'redux-framework-demo'),
		'fields' => array (
			array(
				'id'       => 'site-logo',
				'type'     => 'media',
				'url'      => true,
				'title'    => __( 'Header Logo', 'redux-framework-demo' ),
				'subtitle' => __('Rectangli', 'redux-framework-demo'),
			),			
			array(
				'id'       => 'login-logo',
				'type'     => 'media',
				'url'      => true,
				'title'    => __( 'Login Page Logo', 'redux-framework-demo' ),
			),
			array(
				'id'       => 'favicon-logo',
				'type'     => 'media',
				'title'    => __( 'Favicon', 'redux-framework-demo' ),
				'preview' => false,
			),				
		),
		//'icon' => 'el-icon-home',
	) );
		/*----Main Blog Header-------*/	
		/* Redux::setSection( $opt_name, array(
			'title' => __('Main Blog Page', 'redux-framework-demo'),
			'fields' => array(
				array (
					'id' => 'blog_pg_icon',
					'type'     => 'media',
					'url'      => true,
					'title' => __('Blog Page Icon In Header', 'redux-framework-demo'),
				),
				array (
					'id' => 'blog_para',
					'type' => 'editor',
					'title' => __('Blog Page Header Content', 'redux-framework-demo'),
              //  'rows'    => '7' 
				),
			),
			'icon' => 'el-icon-blogger',
		  ) );   */
		  /*----Main Blog Header---------*/
		/*-------general---------------*/
	Redux::setSection( $opt_name, array(
		'icon'      => 'el-icon-cogs',
		'title'     => __('General Settings', 'redux-framework-demo'),
		'fields'    => array(


			array(
                'id'       => 'opt-typography-body',
                'type'     => 'typography',
                'title'    => __( 'Body Font', 'redux-framework-demo' ),
                'subtitle' => __( 'Specify the body font properties.', 'redux-framework-demo' ),
                'google'   => true,
				'font-backup' => true,
				'output'      => array( 'body' ),
				'text-align' => false,
                'default'  => array(
                    'color'       => '#000000',
                    'font-size'   => '15px',
                    'font-family' => 'Roboto,Arial,Helvetica,sans-serif',
					'google'      => true,
                    'font-weight' => '400',
					'line-height' => '40',
					'font-style'  => 'normal',
                ),
            ),
			array(
                'id'       => 'opt-typography-headings',
                'type'     => 'typography',
                'title'    => __( 'Headings Font', 'redux-framework-demo' ),
                'subtitle' => __( 'Specify the heading font properties.', 'redux-framework-demo' ),
                'google'   => true,
				'font-backup' => true,
				'output'      => array( 'h1', 'h2', 'h3', 'h4', 'h5', 'h6' ),
				'text-align' => false,
				'font-size' => false,
				'font-style' => false,
				'line-height' => false,
                'default'  => array(
                    'color'       => '#ff6b56',
                    //'font-size'   => '15px',
                    'font-family' => 'Roboto,Arial,Helvetica,sans-serif',
					'google'      => true,
                    'font-weight' => '500',
					//'line-height' => '40',
					//'font-style'  => 'normal',
                ),
            ),
			array(
				'id'        => 'opt-ace-editor-css',
				'type'      => 'ace_editor',
				'title'     => __('CSS Code', 'redux-framework-demo'),
				'subtitle'  => __('Paste your custom CSS code here. Priority is header.', 'redux-framework-demo'),
				'mode'      => 'css',
				'theme'     => 'monokai',
				//'desc'      => 'Possible modes can be found at <a href="http://ace.c9.io" target="_blank">http://ace.c9.io/</a>.',
				//'default'   => "#header{\nmargin: 0 auto;\n}"
			),
			array(
				'id'        => 'opt-ace-editor-js',
				'type'      => 'ace_editor',
				'title'     => __('JS Code', 'redux-framework-demo'),
				'subtitle'  => __('Paste your custom JS code here. Priority is footer.', 'redux-framework-demo'),
				'mode'      => 'javascript',
				'theme'     => 'chrome',
				//'desc'      => 'Possible modes can be found at <a href="http://ace.c9.io" target="_blank">http://ace.c9.io/</a>.',
				//'default'   => "jQuery(document).ready(function(){\n\n});"
			),

			array(
				'id'        => 'footer-copyright',
				'type'      => 'editor',
				'title'     => __('Footer Text', 'redux-framework-demo'),
				'subtitle'  => __('You can use the following shortcodes in your footer text: [wp-url] [site-url] [theme-url] [login-url] [logout-url] [site-title] [site-tagline] [current-year]', 'redux-framework-demo'),
				'args'   => array(
					//'teeny'            => true,
					'media_buttons'    => false,
					'textarea_rows'    => 3
				),
				//'default'   => 'Powered by Redux Framework.',
			),
		)
    ) );

    /*
     * <--- END SECTIONS
     */