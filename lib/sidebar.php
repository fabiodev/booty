<?php
/**
 * Register our sidebars and widgetized areas.
 * Conforme o defenido na pagina Costumize do tema no painel de administração
 */
function arphabet_widgets_init() {

	$side = get_theme_mod( 'sidebar_setting', 'default_value' );

	if($side == 1 || $side == 3){
        register_sidebar( array(
                'name' => 'left sidebar',
                'id' => 'left_sidebar',
                'before_widget' => '<div class="well sidebar-nav">',
                'after_widget' => '</div>',
                'before_title' => '<ul class="nav nav-list"><li class="nav-header">',
                'after_title' => '</li></ul>',
        ) );
	}

	if($side == 2 || $side == 3){

	register_sidebar( array(
                'name' => 'right sidebar',
                'id' => 'right_sidebar',
                'before_widget' => '<div class="well sidebar-nav">',
                'after_widget' => '</div>',
                'before_title' => '<ul class="nav nav-list"><li class="nav-header">',
                'after_title' => '</li></ul>',
        ) );
	}


}
add_action( 'widgets_init', 'arphabet_widgets_init' );

/*Adds admin option to activate sidebars*/
add_action( 'customize_register', 'booty_customize' );

function booty_customize($wp_customize) {
	
	$wp_customize->add_section( 'booty_sidebar_settings', array(
		'title'          => 'Sidebars Scheme',
		'priority'       => 36,
	) );

	$wp_customize->add_setting( 'sidebar_setting', array(
		'default'        => '0',
		//'type'           => 'radio',
		'capability'     => 'edit_theme_options',
	) );

	$wp_customize->add_control( 'sidebar_setting', array(
		'label'      => 'Sidebar Scheme',
		'section'    => 'booty_sidebar_settings',
		'settings'   => 'sidebar_setting',
		'type'       => 'radio',
		'choices'    => array(
			'0' => 'No sidebar',
			'1' => 'Left sidebar',
			'2' => 'Right sidebar',
			'3' => 'Both sidebars',
		),
	) );

}
