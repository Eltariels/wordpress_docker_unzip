<?php
function drillingservices_blog_setting( $wp_customize ) {
$selective_refresh = isset( $wp_customize->selective_refresh ) ? 'postMessage' : 'refresh';
	$wp_customize->add_panel(
		'drillingservices_frontpage_sections', array(
			'priority' => 32,
			'title' => esc_html__( 'Frontpage Sections', 'drilling-services' ),
		)
	);
	


	/*=========================================
	Slider Section
	=========================================*/
	$wp_customize->add_section(
		'slider_setting', array(
			'title' => esc_html__( 'Slider Section', 'drilling-services' ),
			'description'=> __('<a>Note :</a> Image Size Should Be 1500*800','drilling-services'),
			'priority' => 1,
			'panel' => 'drillingservices_frontpage_sections',
		)
	);



	$wp_customize->add_setting('drillingservices_slider_tabs', array(
	   'sanitize_callback' => 'wp_kses_post',
	));

	$wp_customize->add_control(new drillingservices_Tab_Control($wp_customize, 'drillingservices_slider_tabs', array(
	   'section' => 'slider_setting',
	   'priority' => 2,
	   'buttons' => array(
	      array(
         	'name' => esc_html__('General', 'drilling-services'),
            'icon' => 'dashicons dashicons-welcome-write-blog',
            'fields' => array(
            	'slider1',
            	'slider2',
            	'slider3',
            	'slider4',
            	'slider5',
            	'slider6'
            ),
            'active' => true,
         ), 
	      array(
            'name' => esc_html__('Style', 'drilling-services'),
        	'icon' => 'dashicons dashicons-art',
            'fields' => array(
                'slider_titlecolor',
                'slider_descriptioncolor',
                'slider_btntxt1color',
				'slider_btnbg1color',
				'slider_btnbg2color',
				'slider_btntxthovercolor',
				'slider_paginationcolor',
				'slider_activepaginationcolor',
				'slider_paginationborder1color',
				'slider_paginationborder2color'

            ),
     	)
	    
    	),
	))); 


	

	// General Tab

	// Slider 1
	$wp_customize->add_setting( 
    	'slider1',
    	array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'slider1',
		array(
		    'label'   		=> __('Slider 1','drilling-services'),
		    'section'		=> 'slider_setting',
			'type' 			=> 'dropdown-pages',
			'transport'         => $selective_refresh,
		)  
	);		



	// Slider 2
	$wp_customize->add_setting(
    	'slider2',
    	array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 4,
		)
	);	

	$wp_customize->add_control( 
		'slider2',
		array(
		    'label'   		=> __('Slider 2','drilling-services'),
		    'section'		=> 'slider_setting',
			'type' 			=> 'dropdown-pages',
			'transport'         => $selective_refresh,
		)  
	);	


	// Slider 3
	$wp_customize->add_setting(
    	'slider3',
    	array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 5,
		)
	);	

	$wp_customize->add_control( 
		'slider3',
		array(
		    'label'   		=> __('Slider 3','drilling-services'),
		    'section'		=> 'slider_setting',
			'type' 			=> 'dropdown-pages',
			'transport'         => $selective_refresh,
		)  
	);	


	// Slider 4
	$wp_customize->add_setting(
    	'slider4',
    	array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 6,
		)
	);	

	$wp_customize->add_control( 
		'slider4',
		array(
		    'label'   		=> __('Slider 4','drilling-services'),
		    'section'		=> 'slider_setting',
			'type' 			=> 'dropdown-pages',
			'transport'         => $selective_refresh,
		)  
	);



	// Slider 5
	$wp_customize->add_setting(
    	'slider5',
    	array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 7,
		)
	);	

	$wp_customize->add_control( 
		'slider5',
		array(
		    'label'   		=> __('Slider 5','drilling-services'),
		    'section'		=> 'slider_setting',
			'type' 			=> 'dropdown-pages',
			'transport'         => $selective_refresh,
		)  
	);

	// Slider 6
	$wp_customize->add_setting(
    	'slider6',
    	array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 7,
		)
	);	

	$wp_customize->add_control( 
		'slider6',
		array(
		    'label'   		=> __('Slider 6','drilling-services'),
		    'section'		=> 'slider_setting',
			'type' 			=> 'dropdown-pages',
			'transport'         => $selective_refresh,
		)  
	);




	// Style setting

	// slider title Color
	$slidertitlecolor = esc_html__('#fff', 'drilling-services' );
	$wp_customize->add_setting(
    	'slider_titlecolor',
    	array(
			'default' => $slidertitlecolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'slider_titlecolor',
		array(
		    'label'   		=> __('Title Color','drilling-services'),
		    'section'		=> 'slider_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);


	// slider description Color
	$sliderdescriptioncolor = esc_html__('#fff', 'drilling-services' );
	$wp_customize->add_setting(
    	'slider_descriptioncolor',
    	array(
			'default' => $sliderdescriptioncolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'slider_descriptioncolor',
		array(
		    'label'   		=> __('Description Color','drilling-services'),
		    'section'		=> 'slider_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// slider btntxt1 Color
	$sliderbtntxt1color = esc_html__('#000', 'drilling-services' );
	$wp_customize->add_setting(
    	'slider_btntxt1color',
    	array(
			'default' => $sliderbtntxt1color,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'slider_btntxt1color',
		array(
		    'label'   		=> __('Button Text Color','drilling-services'),
		    'section'		=> 'slider_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// slider btnbg1 Color
	$sliderbtnbg1color = esc_html__('#FFE18A', 'drilling-services' );
	$wp_customize->add_setting(
    	'slider_btnbg1color',
    	array(
			'default' => $sliderbtnbg1color,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'slider_btnbg1color',
		array(
		    'label'   		=> __('Button BG Color 1','drilling-services'),
		    'section'		=> 'slider_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// slider btnbg2 Color
	$sliderbtnbg2color = esc_html__('#FFC000', 'drilling-services' );
	$wp_customize->add_setting(
    	'slider_btnbg2color',
    	array(
			'default' => $sliderbtnbg2color,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'slider_btnbg2color',
		array(
		    'label'   		=> __('Button BG Color 2','drilling-services'),
		    'section'		=> 'slider_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	

	// slider btntxthover Color
	$sliderbtntxthovercolor = esc_html__('#393838', 'drilling-services' );
	$wp_customize->add_setting(
    	'slider_btntxthovercolor',
    	array(
			'default' => $sliderbtntxthovercolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'slider_btntxthovercolor',
		array(
		    'label'   		=> __('Button Text Hover Color','drilling-services'),
		    'section'		=> 'slider_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// slider pagination Color
	$sliderpaginationcolor = esc_html__('#fff', 'drilling-services' );
	$wp_customize->add_setting(
    	'slider_paginationcolor',
    	array(
			'default' => $sliderpaginationcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'slider_paginationcolor',
		array(
		    'label'   		=> __('Indicator Color','drilling-services'),
		    'section'		=> 'slider_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// slider activepagination Color
	$slideractivepaginationcolor = esc_html__('#FFC000', 'drilling-services' );
	$wp_customize->add_setting(
    	'slider_activepaginationcolor',
    	array(
			'default' => $slideractivepaginationcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'slider_activepaginationcolor',
		array(
		    'label'   		=> __('Active Indicator Color','drilling-services'),
		    'section'		=> 'slider_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);


	// slider paginationborder1 Color
	$sliderpaginationborder1color = esc_html__('#000', 'drilling-services' );
	$wp_customize->add_setting(
    	'slider_paginationborder1color',
    	array(
			'default' => $sliderpaginationborder1color,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'slider_paginationborder1color',
		array(
		    'label'   		=> __('Indicator Border Color 1','drilling-services'),
		    'section'		=> 'slider_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// slider paginationborder2 Color
	$sliderpaginationborder2color = esc_html__('#FFC000', 'drilling-services' );
	$wp_customize->add_setting(
    	'slider_paginationborder2color',
    	array(
			'default' => $sliderpaginationborder2color,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'slider_paginationborder2color',
		array(
		    'label'   		=> __('Indicator Border Color 2','drilling-services'),
		    'section'		=> 'slider_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	


	/*=========================================
	Service Section
	=========================================*/
	$wp_customize->add_section(
		'Service_setting', array(
			'title' => esc_html__( 'Service Section', 'drilling-services' ),
			'priority' => 2,
			'panel' => 'drillingservices_frontpage_sections',
		)
	);



	$wp_customize->add_setting('drillingservices_Service_tabs', array(
	   'sanitize_callback' => 'wp_kses_post',
	));

	$wp_customize->add_control(new drillingservices_Tab_Control($wp_customize, 'drillingservices_Service_tabs', array(
	   'section' => 'Service_setting',
	   'priority' => 2,
	   'buttons' => array(
	      array(
         	'name' => esc_html__('General', 'drilling-services'),
            'icon' => 'dashicons dashicons-welcome-write-blog',
            'fields' => array(
            	'service_disable_section',
            	'service_heading',
				'service_description',
            	'Service1',
				'service_icon1',
            	'Service2',
				'service_icon2',
            	'Service3',
				'service_icon3',
            	'Service4',
				'service_icon4',
            	'Service5',
				'service_icon5',
            	'Service6',
				'service_icon6'
            ),
            'active' => true,
         ),
	      array(
            'name' => esc_html__('Style', 'drilling-services'),
        	'icon' => 'dashicons dashicons-art',
            'fields' => array(
            	'service_headingcolor',
				'service_descriptioncolor',
				'service_boxiconcolor',
            	'service_boxtitlecolorcolor',
				'service_boxtitlehrvcolorcolor',
            	'service_boxdescriptioncolorcolor',
            	'service_boxbordercolor'
            ),
     	),
  		array(
	        'name' => esc_html__('Layout', 'drilling-services'),
	        'icon' => 'dashicons dashicons-layout',
	        'fields' => array(
	            'drilling_services_service_section_width',
	            'drillingservices_service_padding',
	            'drilling_services_service_top_padding',
	            'drilling_services_service_bottom_padding'
	        ),
     	)
	    
    	),
	))); 



	// General

	// hide show service section
	$wp_customize->add_setting(
        'service_disable_section',
        array(
            'sanitize_callback' => 'wp_kses_post',
        )
    ); 
    $wp_customize->add_control(
        new drillingservices_Toggle_Switch_Custom_Control(
            $wp_customize,
            'service_disable_section',
            array(
                'settings'      => 'service_disable_section',
                'section'       => 'Service_setting',
                'label'         => __( 'Disable Section', 'drilling-services' ),
                'on_off_label'  => array(
                    'on' => __( 'Yes', 'drilling-services' ),
                    'off' => __( 'No', 'drilling-services' )
                ),
            )
        )
    );


	

    // service title
	$wp_customize->add_setting(
    	'service_heading',
    	array(
			'default' => '',
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 1,
		)
	);	

	$wp_customize->add_control( 
		'service_heading',
		array(
		    'label'   		=> __('Heading','drilling-services'),
		    'section'		=> 'Service_setting',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);	

	// service sub title
	$wp_customize->add_setting(
    	'service_description',
    	array(
			'default' => '',
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 1,
		)
	);	

	$wp_customize->add_control( 
		'service_description',
		array(
		    'label'   		=> __('Description Heading','drilling-services'),
		    'section'		=> 'Service_setting',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);	



	// Service 1
	$wp_customize->add_setting( 
    	'Service1',
    	array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 1,
		)
	);	

	$wp_customize->add_control( 
		'Service1',
		array(
		    'label'   		=> __('Service 1','drilling-services'),
		    'section'		=> 'Service_setting',
			'type' 			=> 'dropdown-pages',
			'transport'         => $selective_refresh,
		)  
	);		


	// service 1 icon
	$wp_customize->add_setting(
    	'service_icon1',
    	array(
			'default' => 'fa fa-pencil',
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 1,
		)
	);	

	$wp_customize->add_control( 
		'service_icon1',
		array(
		    'label'   		=> __('Icon 1','drilling-services'),
		    'section'		=> 'Service_setting',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);	
	

	// Service 2
	$wp_customize->add_setting(
    	'Service2',
    	array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 2,
		)
	);	

	$wp_customize->add_control( 
		'Service2',
		array(
		    'label'   		=> __('Service 2','drilling-services'),
		    'section'		=> 'Service_setting',
			'type' 			=> 'dropdown-pages',
			'transport'         => $selective_refresh,
		)  
	);	

	// service 2 icon
	$wp_customize->add_setting(
    	'service_icon2',
    	array(
			'default' => 'fa fa-pencil',
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 2,
		)
	);	

	$wp_customize->add_control( 
		'service_icon2',
		array(
		    'label'   		=> __('Icon 2','drilling-services'),
		    'section'		=> 'Service_setting',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);	


	// Service 3
	$wp_customize->add_setting(
    	'Service3',
    	array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'Service3',
		array(
		    'label'   		=> __('Service 3','drilling-services'),
		    'section'		=> 'Service_setting',
			'type' 			=> 'dropdown-pages',
			'transport'         => $selective_refresh,
		)  
	);	

	// service 3 icon
	$wp_customize->add_setting(
    	'service_icon3',
    	array(
			'default' => 'fa fa-pencil',
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'service_icon3',
		array(
		    'label'   		=> __('Icon 3','drilling-services'),
		    'section'		=> 'Service_setting',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);	


	// Service 4
	$wp_customize->add_setting(
    	'Service4',
    	array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 4,
		)
	);	

	$wp_customize->add_control( 
		'Service4',
		array(
		    'label'   		=> __('Service 4','drilling-services'),
		    'section'		=> 'Service_setting',
			'type' 			=> 'dropdown-pages',
			'transport'         => $selective_refresh,
		)  
	);

	// service 4 icon
	$wp_customize->add_setting(
    	'service_icon4',
    	array(
			'default' => 'fa fa-pencil',
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 4,
		)
	);	

	$wp_customize->add_control( 
		'service_icon4',
		array(
		    'label'   		=> __('Icon 4','drilling-services'),
		    'section'		=> 'Service_setting',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);	


	// Service 5
	$wp_customize->add_setting(
    	'Service5',
    	array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 5,
		)
	);	

	$wp_customize->add_control( 
		'Service5',
		array(
		    'label'   		=> __('Service 5','drilling-services'),
		    'section'		=> 'Service_setting',
			'type' 			=> 'dropdown-pages',
			'transport'         => $selective_refresh,
		)  
	);

	// service 5 icon
	$wp_customize->add_setting(
    	'service_icon5',
    	array(
			'default' => 'fa fa-pencil',
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 5,
		)
	);	

	$wp_customize->add_control( 
		'service_icon5',
		array(
		    'label'   		=> __('Icon 5','drilling-services'),
		    'section'		=> 'Service_setting',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);	

	// Service 6
	$wp_customize->add_setting(
    	'Service6',
    	array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 5,
		)
	);	

	$wp_customize->add_control( 
		'Service6',
		array(
		    'label'   		=> __('Service 6','drilling-services'),
		    'section'		=> 'Service_setting',
			'type' 			=> 'dropdown-pages',
			'transport'         => $selective_refresh,
		)  
	);

	// service 6 icon
	$wp_customize->add_setting(
    	'service_icon6',
    	array(
			'default' => 'fa fa-pencil',
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 6,
		)
	);	

	$wp_customize->add_control( 
		'service_icon6',
		array(
		    'label'   		=> __('Icon 6','drilling-services'),
		    'section'		=> 'Service_setting',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);	


	// style

	// service headingcolor color
	$serviceheadingcolor = esc_html__('#000', 'drilling-services' );
	$wp_customize->add_setting(
    	'service_headingcolor',
    	array(
			'default' => $serviceheadingcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 4,
		)
	);	

	$wp_customize->add_control( 
		'service_headingcolor',
		array(
		    'label'   		=> __('Heading Color','drilling-services'),
		    'section'		=> 'Service_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// service descriptioncolor color
	$servicedescriptioncolor = esc_html__('#707070', 'drilling-services' );
	$wp_customize->add_setting(
    	'service_descriptioncolor',
    	array(
			'default' => $servicedescriptioncolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 4,
		)
	);	

	$wp_customize->add_control( 
		'service_descriptioncolor',
		array(
		    'label'   		=> __('Head Description Color','drilling-services'),
		    'section'		=> 'Service_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);


	// service boxicon color
	$serviceboxiconcolor = esc_html__('#FFC000', 'drilling-services' );
	$wp_customize->add_setting(
    	'service_boxiconcolor',
    	array(
			'default' => $serviceboxiconcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 4,
		)
	);	

	$wp_customize->add_control( 
		'service_boxiconcolor',
		array(
		    'label'   		=> __('Icon Color','drilling-services'),
		    'section'		=> 'Service_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// service boxtitlecolor color
	$serviceboxtitlecolorcolor = esc_html__('#000', 'drilling-services' );
	$wp_customize->add_setting(
    	'service_boxtitlecolorcolor',
    	array(
			'default' => $serviceboxtitlecolorcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 4,
		)
	);	

	$wp_customize->add_control( 
		'service_boxtitlecolorcolor',
		array(
		    'label'   		=> __('Title Color','drilling-services'),
		    'section'		=> 'Service_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// service boxtitlehrvcolor color
	$serviceboxtitlehrvcolorcolor = esc_html__('#FFC000', 'drilling-services' );
	$wp_customize->add_setting(
    	'service_boxtitlehrvcolorcolor',
    	array(
			'default' => $serviceboxtitlehrvcolorcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 4,
		)
	);	

	$wp_customize->add_control( 
		'service_boxtitlehrvcolorcolor',
		array(
		    'label'   		=> __('Title Hover Color','drilling-services'),
		    'section'		=> 'Service_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// service boxdescriptioncolor color
	$serviceboxdescriptioncolorcolor = esc_html__('#707070', 'drilling-services' );
	$wp_customize->add_setting(
    	'service_boxdescriptioncolorcolor',
    	array(
			'default' => $serviceboxdescriptioncolorcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 4,
		)
	);	

	$wp_customize->add_control( 
		'service_boxdescriptioncolorcolor',
		array(
		    'label'   		=> __('Description Color','drilling-services'),
		    'section'		=> 'Service_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);


	// service boxborder color
	$serviceboxbordercolor = esc_html__('#FFC000', 'drilling-services' );
	$wp_customize->add_setting(
    	'service_boxbordercolor',
    	array(
			'default' => $serviceboxbordercolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 4,
		)
	);	

	$wp_customize->add_control( 
		'service_boxbordercolor',
		array(
		    'label'   		=> __('Box Shadow Color','drilling-services'),
		    'section'		=> 'Service_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);



	// layout setting
	$wp_customize->add_setting('drilling_services_service_section_width',array(
        'default' => 'Box Width',
        'sanitize_callback' => 'drillingservices_sanitize_choices',
    ));
    $wp_customize->add_control('drilling_services_service_section_width',array(
        'type' => 'select',
        'label' => __('Section Width','drilling-services'),
        'choices' => array (
            'Box Width' => __('Box Width','drilling-services'),
            'Full Width' => __('Full Width','drilling-services')
        ),
        'section' => 'Service_setting',
    ));


    // service section padding 
	$wp_customize->add_setting('drillingservices_service_padding',array(
      'sanitize_callback'   => 'esc_html'
    ));
    $wp_customize->add_control('drillingservices_service_padding',array(
      'label' => __('Section Padding','drilling-services'),
      'section' => 'Service_setting'
    ));

    $wp_customize->add_setting('drilling_services_service_top_padding',array(
        'default' => '5',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('drilling_services_service_top_padding',array(
	    'type' => 'number',
	    'label' => __('Top','drilling-services'),
	    'section' => 'Service_setting',
    ));

 	$wp_customize->add_setting('drilling_services_service_bottom_padding',array(
        'default' => '2',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('drilling_services_service_bottom_padding',array(
	    'type' => 'number',
	    'label' => __('Bottom','drilling-services'),
	    'section' => 'Service_setting',
    ));



    /*=========================================
	Blog Section
	=========================================*/
	$wp_customize->add_section(
		'blog_setting', array(
			'title' => esc_html__( 'Blog Section', 'drilling-services' ),
			'priority' => 3,
			'panel' => 'drillingservices_frontpage_sections',
		)
	);



	

	$wp_customize->add_setting('drillingservices_blog_tabs', array(
	   'sanitize_callback' => 'wp_kses_post',
	));

	$wp_customize->add_control(new drillingservices_Tab_Control($wp_customize, 'drillingservices_blog_tabs', array(
	   'section' => 'blog_setting',
	   'priority' => 2,
	   'buttons' => array(
	      array(
         	'name' => esc_html__('General', 'drilling-services'),
            'icon' => 'dashicons dashicons-welcome-write-blog',
            'fields' => array(
            	'blog_heading'
            ),
            'active' => true,
         ), 
	      array(
            'name' => esc_html__('Style', 'drilling-services'),
        	'icon' => 'dashicons dashicons-art',
            'fields' => array(
                'blog_headingcolor',
				'blog_headingbrdcolor',
				'blog_boxbgcolor',
                'blog_titlecolor',
                'blog_descriptioncolor',
                'blog_btntextcolor',
				'blog_btntexthrvcolor',
				'blog_btnbg1color',
				'blog_btnbg2color',
				'blog_datetexticoncolor',
                'blog_datetextcolor',
				'blog_date1color',
				'blog_date2color',
				'blog_datebgcolor'

            ),
     	)
	    
    	),
	))); 


	// General Tab

	// blog heading Color
	$wp_customize->add_setting(
    	'blog_heading',
    	array(
			'default' => '',
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 1,
		)
	);	

	$wp_customize->add_control( 
		'blog_heading',
		array(
		    'label'   		=> __('Heading','drilling-services'),
		    'section'		=> 'blog_setting',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);	


	// Style setting

	
	// blog heading Color
	$blogheadingcolor = esc_html__('#000', 'drilling-services' );
	$wp_customize->add_setting(
    	'blog_headingcolor',
    	array(
			'default' => $blogheadingcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'blog_headingcolor',
		array(
		    'label'   		=> __('Heading Color','drilling-services'),
		    'section'		=> 'blog_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// blog headingbrd Color
	$blogheadingbrdcolor = esc_html__('#FFC000', 'drilling-services' );
	$wp_customize->add_setting(
    	'blog_headingbrdcolor',
    	array(
			'default' => $blogheadingbrdcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'blog_headingbrdcolor',
		array(
		    'label'   		=> __('Heading Border Color','drilling-services'),
		    'section'		=> 'blog_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);


	// blog boxbg Color
	$blogboxbgcolor = esc_html__('#fff', 'drilling-services' );
	$wp_customize->add_setting(
    	'blog_boxbgcolor',
    	array(
			'default' => $blogboxbgcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'blog_boxbgcolor',
		array(
		    'label'   		=> __('Box BG Color','drilling-services'),
		    'section'		=> 'blog_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// blog title Color
	$blogtitlecolor = esc_html__('#000', 'drilling-services' );
	$wp_customize->add_setting(
    	'blog_titlecolor',
    	array(
			'default' => $blogtitlecolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'blog_titlecolor',
		array(
		    'label'   		=> __('Title Color','drilling-services'),
		    'section'		=> 'blog_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// blog description Color
	$blogdescriptioncolor = esc_html__('#707070', 'drilling-services' );
	$wp_customize->add_setting(
    	'blog_descriptioncolor',
    	array(
			'default' => $blogdescriptioncolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'blog_descriptioncolor',
		array(
		    'label'   		=> __('Description Color','drilling-services'),
		    'section'		=> 'blog_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);


	// blog btntext Color
	$blogbtntextcolor = esc_html__('#000', 'drilling-services' );
	$wp_customize->add_setting(
    	'blog_btntextcolor',
    	array(
			'default' => $blogbtntextcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'blog_btntextcolor',
		array(
		    'label'   		=> __('Button Text Color','drilling-services'),
		    'section'		=> 'blog_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// blog btntexthrv Color
	$blogbtntexthrvcolor = esc_html__('#393838', 'drilling-services' );
	$wp_customize->add_setting(
    	'blog_btntexthrvcolor',
    	array(
			'default' => $blogbtntexthrvcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'blog_btntexthrvcolor',
		array(
		    'label'   		=> __('Button Text Hover Color','drilling-services'),
		    'section'		=> 'blog_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);


	// blog btnbg1 Color
	$blogbtnbg1color = esc_html__('#FFE18A', 'drilling-services' );
	$wp_customize->add_setting(
    	'blog_btnbg1color',
    	array(
			'default' => $blogbtnbg1color,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'blog_btnbg1color',
		array(
		    'label'   		=> __('Button BG Color 1','drilling-services'),
		    'section'		=> 'blog_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// blog btnbg2 Color
	$blogbtnbg2color = esc_html__('#FFC000', 'drilling-services' );
	$wp_customize->add_setting(
    	'blog_btnbg2color',
    	array(
			'default' => $blogbtnbg2color,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'blog_btnbg2color',
		array(
		    'label'   		=> __('Button BG Color 2','drilling-services'),
		    'section'		=> 'blog_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// blog datetexticon Color
	$blogdatetexticoncolor = esc_html__('#FFC000', 'drilling-services' );
	$wp_customize->add_setting(
    	'blog_datetexticoncolor',
    	array(
			'default' => $blogdatetexticoncolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'blog_datetexticoncolor',
		array(
		    'label'   		=> __('Author & Comments Icon Color','drilling-services'),
		    'section'		=> 'blog_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// blog datetext Color
	$blogdatetextcolor = esc_html__('#000', 'drilling-services' );
	$wp_customize->add_setting(
    	'blog_datetextcolor',
    	array(
			'default' => $blogdatetextcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'blog_datetextcolor',
		array(
		    'label'   		=> __('Author & Comments Color','drilling-services'),
		    'section'		=> 'blog_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// blog date1 Color
	$blogdate1color = esc_html__('#FFC000', 'drilling-services' );
	$wp_customize->add_setting(
    	'blog_date1color',
    	array(
			'default' => $blogdate1color,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'blog_date1color',
		array(
		    'label'   		=> __('Date Color 1','drilling-services'),
		    'section'		=> 'blog_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// blog date2 Color
	$blogdate2color = esc_html__('#000', 'drilling-services' );
	$wp_customize->add_setting(
    	'blog_date2color',
    	array(
			'default' => $blogdate2color,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'blog_date2color',
		array(
		    'label'   		=> __('Date Color 2','drilling-services'),
		    'section'		=> 'blog_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// blog datebg Color
	$blogdatebgcolor = esc_html__('#fff', 'drilling-services' );
	$wp_customize->add_setting(
    	'blog_datebgcolor',
    	array(
			'default' => $blogdatebgcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'blog_datebgcolor',
		array(
		    'label'   		=> __('Date BG Color','drilling-services'),
		    'section'		=> 'blog_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);




	$wp_customize->register_control_type('drillingservices_Tab_Control');

}

add_action( 'customize_register', 'drillingservices_blog_setting' );

// service selective refresh
function drillingservices_blog_section_partials( $wp_customize ){	
	// blog_title
	$wp_customize->selective_refresh->add_partial( 'blog_title', array(
		'selector'            => '.home-blog .title h6',
		'settings'            => 'blog_title',
		'render_callback'  => 'drillingservices_blog_title_render_callback',
	
	) );
	
	// blog_subtitle
	$wp_customize->selective_refresh->add_partial( 'blog_subtitle', array(
		'selector'            => '.home-blog .title h2',
		'settings'            => 'blog_subtitle',
		'render_callback'  => 'drillingservices_blog_subtitle_render_callback',
	
	) );
	
	// blog_description
	$wp_customize->selective_refresh->add_partial( 'blog_description', array(
		'selector'            => '.home-blog .title p',
		'settings'            => 'blog_description',
		'render_callback'  => 'drillingservices_blog_description_render_callback',
	
	) );	
	}

add_action( 'customize_register', 'drillingservices_blog_section_partials' );

// blog_title
function drillingservices_blog_title_render_callback() {
	return get_theme_mod( 'blog_title' );
}

// blog_subtitle
function drillingservices_blog_subtitle_render_callback() {
	return get_theme_mod( 'blog_subtitle' );
}

// service description
function drillingservices_blog_description_render_callback() {
	return get_theme_mod( 'blog_description' );
}


