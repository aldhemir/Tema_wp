<?php
final class skt_filmmaker_Example_1_Customize {

	public static function skt_filmmaker_get_instance() {

		static $instance = null;

		if ( is_null( $instance ) ) {
			$instance = new self;
			$instance->skt_filmmaker_setup_actions();
		}

		return $instance;
	}

	private function __construct() {}

	private function skt_filmmaker_setup_actions() {

		// Register panels, sections, settings, controls, and partials.
		add_action( 'customize_register', array( $this, 'skt_filmmaker_sections' ) );

		// Register scripts and styles for the controls.
		add_action( 'customize_controls_enqueue_scripts', array( $this, 'skt_filmmaker_enqueue_control_scripts' ), 0 );
	}

	public function skt_filmmaker_sections( $manager ) {

		// Load custom sections.
		get_template_part( 'customize-pro/example-1/section', 'pro' );

		// Register custom section types.
		$manager->register_section_type( 'skt_filmmaker_Example_1_Customize_Section_Pro' );

		// Register sections.
		$manager->add_section(
			new skt_filmmaker_Example_1_Customize_Section_Pro(
				$manager,
				'example_1',
				array(
					'title'    => esc_html__( 'Upgrade to Pro', 'skt-filmmaker' ),
					'pro_text' => esc_html__( 'Upgrade Now', 'skt-filmmaker' ),
					'pro_url'  => SKT_FILMMAKER_SKTTHEMES_PRO_THEME_URL,
					'priority'   => 1,
				)
			)
		);
	}

	public function skt_filmmaker_enqueue_control_scripts() {

		wp_enqueue_script( 'example-1-customize-controls', trailingslashit( get_template_directory_uri() ) . 'customize-pro/example-1/customize-controls.js', array( 'customize-controls' ) );

		wp_enqueue_style( 'example-1-customize-controls', trailingslashit( get_template_directory_uri() ) . 'customize-pro/example-1/customize-controls.css' );
	}
}

skt_filmmaker_Example_1_Customize::skt_filmmaker_get_instance();