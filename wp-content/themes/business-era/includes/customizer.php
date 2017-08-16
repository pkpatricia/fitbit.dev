<?php
/**
 * Business Era Theme Customizer.
 *
 * @package Business_Era
 */

/**
 * Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function business_era_customize_register( $wp_customize ) {

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->get_setting( 'blogname' )->transport        = 'postMessage';
		$wp_customize->get_setting( 'blogdescription' )->transport = 'postMessage';

		$wp_customize->selective_refresh->add_partial( 'blogname', array(
			'selector'            => '.site-title a',
			'container_inclusive' => false,
			'render_callback'     => 'business_era_customize_partial_blogname',
		) );
		$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
			'selector'            => '.site-description',
			'container_inclusive' => false,
			'render_callback'     => 'business_era_customize_partial_blogdescription',
		) );
	}

	// Sanitization.
	require_once trailingslashit( get_template_directory() ) . '/includes/sanitize.php';

	// Active callback.
	require_once trailingslashit( get_template_directory() ) . '/includes/active.php';

	// Load options.
	require_once trailingslashit( get_template_directory() ) . '/includes/options.php';

	// Load Upgrade to Pro control.
	require_once trailingslashit( get_template_directory() ) . '/includes/upgrade-to-pro/control.php';

	// Register custom section types.
		$wp_customize->register_section_type( 'Business_Era_Customize_Section_Upsell' );

		// Register sections.
		$wp_customize->add_section(
			new Business_Era_Customize_Section_Upsell(
				$wp_customize,
				'theme_upsell',
				array(
					'title'    => esc_html__( 'Business Era Pro', 'business-era' ),
					'pro_text' => esc_html__( 'Upgrade to PRO', 'business-era' ),
					'pro_url'  => 'https://promenadethemes.com/downloads/business-era-pro',
					'priority' => 1,
				)
			)
		);

}
add_action( 'customize_register', 'business_era_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @since 1.0.0
 *
 * @return void
 */
function business_era_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @since 1.0.0
 *
 * @return void
 */
function business_era_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Customizer control scripts and styles.
 *
 * @since 1.0.4
 */
function business_era_customizer_control_scripts() {

	wp_enqueue_script( 'business-era-customize-controls', get_template_directory_uri() . '/includes/upgrade-to-pro/customize-controls.js', array( 'customize-controls' ) );

	wp_enqueue_style( 'business-era-customize-controls', get_template_directory_uri() . '/includes/upgrade-to-pro/customize-controls.css' );

}

add_action( 'customize_controls_enqueue_scripts', 'business_era_customizer_control_scripts', 0 );
