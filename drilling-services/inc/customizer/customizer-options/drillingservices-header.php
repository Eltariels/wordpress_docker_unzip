<?php
function drillingservices_header_settings( $wp_customize ) {
$selective_refresh = isset( $wp_customize->selective_refresh ) ? 'postMessage' : 'refresh';
	/*=========================================
	Header Settings Panel
	=========================================*/
	$wp_customize->add_panel( 
		'header_section', 
		array(
			'priority'      => 2,
			'capability'    => 'edit_theme_options',
			'title'			=> __('Header', 'drilling-services'),
		) 
	);

	
	/*=========================================
	Drilling Services Site Identity
	=========================================*/
	$wp_customize->add_section(
        'title_tagline',
        array(
        	'priority'      => 1,
            'title' 		=> __('Site Identity','drilling-services'),
			'panel'  		=> 'header_section',
		)
    );





    // top header Site Title Color
	$topheadersitetitlecol = esc_html__('#fff', 'drilling-services' );
	$wp_customize->add_setting(
    	'topheader_sitetitlecol',
    	array(
			'default' => $topheadersitetitlecol,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'topheader_sitetitlecol',
		array(
		    'label'   		=> __('Site Title Color','drilling-services'),
		    'section'		=> 'title_tagline',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);


	// top header Tagline Color
	$topheadertaglinecol = esc_html__('#fff', 'drilling-services' );
	$wp_customize->add_setting(
    	'topheader_taglinecol',
    	array(
			'default' => $topheadertaglinecol,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 4,
		)
	);	

	$wp_customize->add_control( 
		'topheader_taglinecol',
		array(
		    'label'   		=> __('Tagline Color','drilling-services'),
		    'section'		=> 'title_tagline',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);
	
 
	/*=========================================
	Drilling Services header
	=========================================*/
	$wp_customize->add_section(
        'top_header',
        array(
        	'priority'      => 5,
            'title' 		=> __('Header','drilling-services'),
			'panel'  		=> 'header_section',
		)
    );	


    $wp_customize->add_setting('drillingservices_reset_header_settings',array(
	  'sanitize_callback'   => 'sanitize_text_field'
	));
	$wp_customize->add_control(new drillingservices_Reset_Custom_Control($wp_customize, 'drilling_services_reset_header_settings',array(
	  'type' => 'reset_control',
	   'priority' => 1,
	  'label' => __('Reset Header Settings', 'drilling-services'),
	  'description' => 'drilling_services_header_reset_settings',
	  'section' => 'top_header'
	)));



    $wp_customize->add_setting('drillingservices_top_header_tabs', array(
	   'sanitize_callback' => 'wp_kses_post',
	));

	$wp_customize->add_control(new drillingservices_Tab_Control($wp_customize, 'drillingservices_top_header_tabs', array(
	   'section' => 'top_header',
	   'priority' => 1,
	   'buttons' => array(
	      array(
     		'name' => esc_html__('General', 'drilling-services'),
 			'icon' => 'dashicons dashicons-welcome-write-blog',
            'fields' => array(
            	'hide_show_sticky',
				'topheader_emailtext',
				'topheader_phonetext',
				'topheader_fblink',
				'topheader_instagramlink',
				'topheader_twitterlink',
				'topheader_linkedinlink',
            	'topheader_btntext',
            	'topheader_btnlink'
            ),
            'active' => true,
         ),
	      array(
            'name' => esc_html__('Style', 'drilling-services'),
            'icon' => 'dashicons dashicons-art',
            'fields' => array(
				'header_logobgcolor',
				'header_topheadbgcolor',
				'header_bottomheadcolor',
				'header_mailphniconcolor',
				'header_mailphniconbgcolor',
				'header_mailphntxtcolor',
				'header_mailphntxthrvcolor',
				'header_socialiconcolor',
				'header_socialiconhrvcolor',
            	'header_menuscolor',
            	'header_menuiconcolor',
            	'header_submenusbgcolor',
            	'header_submenutextcolor',
            	'header_submenustxthovercolor',
            	'header_btntextcolor',
            	'header_btnbgcolor1',
            	'header_btntxthovercolor',
				'header_btnbghovercolor'
            ),
         )
	    
    	),
	)));


	// general setting

	// sticky header
	$wp_customize->add_setting( 'hide_show_sticky',array(
        'default' => false,
        'sanitize_callback' => 'drillingservices_switch_sanitization'
   	) );
   	$wp_customize->add_control( new drillingservices_Toggle_Switch_Custom_Control( $wp_customize, 'hide_show_sticky',array(
        'label' => __( 'Show Sticky Header','drilling-services' ),
        'section' => 'top_header'
   	)));

	// topheader email no.
	$topheaderemailtext = esc_html__('info@yourmail.com', 'drilling-services' );
	$wp_customize->add_setting(
    	'topheader_emailtext',
    	array(
			'default' => $topheaderemailtext,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 6,
		)
	);	

	$wp_customize->add_control( 
		'topheader_emailtext',
		array(
		    'label'   		=> __('Email Number','drilling-services'),
		    'section'		=> 'top_header',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);


	// topheader phone no.
	$topheaderphonetext = esc_html__('1-222-2333-33', 'drilling-services' );
	$wp_customize->add_setting(
    	'topheader_phonetext',
    	array(
			'default' => $topheaderphonetext,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 6,
		)
	);	

	$wp_customize->add_control( 
		'topheader_phonetext',
		array(
		    'label'   		=> __('Phone Number','drilling-services'),
		    'section'		=> 'top_header',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);


	// topheader fb link
	$topheaderfblink = esc_html__('', 'drilling-services' );
	$wp_customize->add_setting(
    	'topheader_fblink',
    	array(
			'default' => $topheaderfblink,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 7,
		)
	);	

	$wp_customize->add_control( 
		'topheader_fblink',
		array(
		    'label'   		=> __('Facebook Link','drilling-services'),
		    'section'		=> 'top_header',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);

	// topheader instagram link
	$topheaderinstagramlink = esc_html__('', 'drilling-services' );
	$wp_customize->add_setting(
    	'topheader_instagramlink',
    	array(
			'default' => $topheaderinstagramlink,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 7,
		)
	);	

	$wp_customize->add_control( 
		'topheader_instagramlink',
		array(
		    'label'   		=> __('Instagram Link','drilling-services'),
		    'section'		=> 'top_header',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);

	// topheader twitter link
	$topheadertwitterlink = esc_html__('', 'drilling-services' );
	$wp_customize->add_setting(
    	'topheader_twitterlink',
    	array(
			'default' => $topheadertwitterlink,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 7,
		)
	);	

	$wp_customize->add_control( 
		'topheader_twitterlink',
		array(
		    'label'   		=> __('Twitter Link','drilling-services'),
		    'section'		=> 'top_header',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);

	// topheader linkedin link
	$topheaderlinkedinlink = esc_html__('', 'drilling-services' );
	$wp_customize->add_setting(
    	'topheader_linkedinlink',
    	array(
			'default' => $topheaderlinkedinlink,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 7,
		)
	);	

	$wp_customize->add_control( 
		'topheader_linkedinlink',
		array(
		    'label'   		=> __('Linkedin Link','drilling-services'),
		    'section'		=> 'top_header',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);


	// topheader text 1
	$topheaderbtntext = esc_html__('', 'drilling-services' );
	$wp_customize->add_setting(
    	'topheader_btntext',
    	array(
			'default' => $topheaderbtntext,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 6,
		)
	);	

	$wp_customize->add_control( 
		'topheader_btntext',
		array(
		    'label'   		=> __('Button Text','drilling-services'),
		    'section'		=> 'top_header',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);


	// topheader btn link
	$topheaderbtnlink = esc_html__('#', 'drilling-services' );
	$wp_customize->add_setting(
    	'topheader_btnlink',
    	array(
			'default' => $topheaderbtnlink,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 7,
		)
	);	

	$wp_customize->add_control( 
		'topheader_btnlink',
		array(
		    'label'   		=> __('Button Link','drilling-services'),
		    'section'		=> 'top_header',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);


	


	// Style setting

	// header logobg Color
	$headerlogobgcolor = esc_html__('#000', 'drilling-services' );
	$wp_customize->add_setting(
    	'header_logobgcolor',
    	array(
			'default' => $headerlogobgcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'header_logobgcolor',
		array(
		    'label'   		=> __('Logo BG Color','drilling-services'),
		    'section'		=> 'top_header',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// header topheadbg Color
	$headertopheadbgcolor = esc_html__('#393838', 'drilling-services' );
	$wp_customize->add_setting(
    	'header_topheadbgcolor',
    	array(
			'default' => $headertopheadbgcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'header_topheadbgcolor',
		array(
		    'label'   		=> __('Top Head BG Color','drilling-services'),
		    'section'		=> 'top_header',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// header bottomhead Color
	$headerbottomheadcolor = esc_html__('#fff', 'drilling-services' );
	$wp_customize->add_setting(
    	'header_bottomheadcolor',
    	array(
			'default' => $headerbottomheadcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'header_bottomheadcolor',
		array(
		    'label'   		=> __('Bottom Head BG Color','drilling-services'),
		    'section'		=> 'top_header',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// header mailphnicon Color
	$headermailphniconcolor = esc_html__('#FFC000', 'drilling-services' );
	$wp_customize->add_setting(
    	'header_mailphniconcolor',
    	array(
			'default' => $headermailphniconcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'header_mailphniconcolor',
		array(
		    'label'   		=> __('Email & Phone Icon Color','drilling-services'),
		    'section'		=> 'top_header',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// header mailphniconbg Color
	$headermailphniconbgcolor = esc_html__('#686767', 'drilling-services' );
	$wp_customize->add_setting(
    	'header_mailphniconbgcolor',
    	array(
			'default' => $headermailphniconbgcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'header_mailphniconbgcolor',
		array(
		    'label'   		=> __('Email & Phone Icon BG Color','drilling-services'),
		    'section'		=> 'top_header',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// header mailphntxt Color
	$headermailphntxtcolor = esc_html__('#fff', 'drilling-services' );
	$wp_customize->add_setting(
    	'header_mailphntxtcolor',
    	array(
			'default' => $headermailphntxtcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'header_mailphntxtcolor',
		array(
		    'label'   		=> __('Email & Phone Text Color','drilling-services'),
		    'section'		=> 'top_header',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// header mailphntxthrv Color
	$headermailphntxthrvcolor = esc_html__('#FFC000', 'drilling-services' );
	$wp_customize->add_setting(
    	'header_mailphntxthrvcolor',
    	array(
			'default' => $headermailphntxthrvcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'header_mailphntxthrvcolor',
		array(
		    'label'   		=> __('Email & Phone Text Hover Color','drilling-services'),
		    'section'		=> 'top_header',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);
	

	// header socialicon Color
	$headersocialiconcolor = esc_html__('#fff', 'drilling-services' );
	$wp_customize->add_setting(
    	'header_socialiconcolor',
    	array(
			'default' => $headersocialiconcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'header_socialiconcolor',
		array(
		    'label'   		=> __('Social Icon Color','drilling-services'),
		    'section'		=> 'top_header',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// header socialiconhrv Color
	$headersocialiconhrvcolor = esc_html__('#FFC000', 'drilling-services' );
	$wp_customize->add_setting(
    	'header_socialiconhrvcolor',
    	array(
			'default' => $headersocialiconhrvcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'header_socialiconhrvcolor',
		array(
		    'label'   		=> __('Social Icon Hover Color','drilling-services'),
		    'section'		=> 'top_header',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);


	// header menus Color
	$headermenuscolor = esc_html__('#000', 'drilling-services' );
	$wp_customize->add_setting(
    	'header_menuscolor',
    	array(
			'default' => $headermenuscolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'header_menuscolor',
		array(
		    'label'   		=> __('Menus Color','drilling-services'),
		    'section'		=> 'top_header',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// header menuicon Color
	$headermenuiconcolor = esc_html__('#FFC000', 'drilling-services' );
	$wp_customize->add_setting(
    	'header_menuiconcolor',
    	array(
			'default' => $headermenuiconcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'header_menuiconcolor',
		array(
		    'label'   		=> __('Icon Color','drilling-services'),
		    'section'		=> 'top_header',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	$headersubmenusbgcolor = esc_html__('#000', 'drilling-services' );
	$wp_customize->add_setting(
    	'header_submenusbgcolor',
    	array(
			'default' => $headersubmenusbgcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'header_submenusbgcolor',
		array(
		    'label'   		=> __('SubMenus BG Color','drilling-services'),
		    'section'		=> 'top_header',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	

	// header submenutext Color
	$headersubmenutextcolor = esc_html__('#fff', 'drilling-services' );
	$wp_customize->add_setting(
    	'header_submenutextcolor',
    	array(
			'default' => $headersubmenutextcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'header_submenutextcolor',
		array(
		    'label'   		=> __('SubMenus Text Color','drilling-services'),
		    'section'		=> 'top_header',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);


	// header submenustxthover Color
	$headersubmenustxthovercolor = esc_html__('#FFC000', 'drilling-services' );
	$wp_customize->add_setting(
    	'header_submenustxthovercolor',
    	array(
			'default' => $headersubmenustxthovercolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'header_submenustxthovercolor',
		array(
		    'label'   		=> __('Menu Hover Color','drilling-services'),
		    'section'		=> 'top_header',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);


	// header btntext Color
	$headerbtntextcolor = esc_html__('#fff', 'drilling-services' );
	$wp_customize->add_setting(
    	'header_btntextcolor',
    	array(
			'default' => $headerbtntextcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'header_btntextcolor',
		array(
		    'label'   		=> __('Button Text Color','drilling-services'),
		    'section'		=> 'top_header',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// header btnbg Color 1
	$headerbtnbgcolor1 = esc_html__('#FFC000', 'drilling-services' );
	$wp_customize->add_setting(
    	'header_btnbgcolor1',
    	array(
			'default' => $headerbtnbgcolor1,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'header_btnbgcolor1',
		array(
		    'label'   		=> __('Button BG Color','drilling-services'),
		    'section'		=> 'top_header',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	

	// header btntxthover Color 
	$headerbtntxthovercolor = esc_html__('#FFC000', 'drilling-services' );
	$wp_customize->add_setting(
    	'header_btntxthovercolor',
    	array(
			'default' => $headerbtntxthovercolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'header_btntxthovercolor',
		array(
		    'label'   		=> __('Button Text Hover Color','drilling-services'),
		    'section'		=> 'top_header',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// header btnbghover Color 
	$headerbtnbghovercolor = esc_html__('#393838', 'drilling-services' );
	$wp_customize->add_setting(
    	'header_btnbghovercolor',
    	array(
			'default' => $headerbtnbghovercolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'header_btnbghovercolor',
		array(
		    'label'   		=> __('Button BG Hover Color','drilling-services'),
		    'section'		=> 'top_header',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);


	$wp_customize->register_control_type('drillingservices_Tab_Control');
	$wp_customize->register_panel_type( 'drillingservices_WP_Customize_Panel' );
	$wp_customize->register_section_type( 'drillingservices_WP_Customize_Section' );

}
add_action( 'customize_register', 'drillingservices_header_settings' );



if ( class_exists( 'WP_Customize_Panel' ) ) {
  	class drillingservices_WP_Customize_Panel extends WP_Customize_Panel {
	   public $panel;
	   public $type = 'drillingservices_panel';
	   public function json() {

	      $array = wp_array_slice_assoc( (array) $this, array( 'id', 'description', 'priority', 'type', 'panel', ) );
	      $array['title'] = html_entity_decode( $this->title, ENT_QUOTES, get_bloginfo( 'charset' ) );
	      $array['content'] = $this->get_content();
	      $array['active'] = $this->active();
	      $array['instanceNumber'] = $this->instance_number;
	      return $array;
    	}
  	}
}

if ( class_exists( 'WP_Customize_Section' ) ) {
  	class drillingservices_WP_Customize_Section extends WP_Customize_Section {
	   public $section;
	   public $type = 'drillingservices_section';
	   public function json() {

	      $array = wp_array_slice_assoc( (array) $this, array( 'id', 'description', 'priority', 'panel', 'type', 'description_hidden', 'section', ) );
	      $array['title'] = html_entity_decode( $this->title, ENT_QUOTES, get_bloginfo( 'charset' ) );
	      $array['content'] = $this->get_content();
	      $array['active'] = $this->active();
	      $array['instanceNumber'] = $this->instance_number;

	      if ( $this->panel ) {
	        $array['customizeAction'] = sprintf( 'Customizing &#9656; %s', esc_html( $this->manager->get_panel( $this->panel )->title ) );
	      } else {
	        $array['customizeAction'] = 'Customizing';
	      }
	      return $array;
    	}
  	}
}






