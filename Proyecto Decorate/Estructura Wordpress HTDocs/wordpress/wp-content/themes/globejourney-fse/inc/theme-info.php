<?php
/**
 * Add Theme info Page
 */

function globejourney_fse_menu() {
	add_theme_page( esc_html__( 'GlobeJourney FSE', 'globejourney-fse' ), esc_html__( 'About GlobeJourney FSE', 'globejourney-fse' ), 'edit_theme_options', 'about-globejourney-fse', 'globejourney_fse_theme_page_display' );
}
add_action( 'admin_menu', 'globejourney_fse_menu' );

function globejourney_fse_admin_theme_style() {
	wp_enqueue_style('globejourney-fse-custom-admin-style', esc_url(get_template_directory_uri()) . '/assets/css/admin-styles.css');
}
add_action('admin_enqueue_scripts', 'globejourney_fse_admin_theme_style');

/**
 * Display About page
 */
function globejourney_fse_theme_page_display() {
	$theme = wp_get_theme();

	if ( is_child_theme() ) {
		$theme = wp_get_theme()->parent();
	} ?>

		<div class="Grace-wrapper">
			<div class="Grcae-info-holder">
				<div class="Grcae-info-holder-content">
					<div class="Grace-Welcome">
						<h1 class="welcomeTitle"><?php esc_html_e( 'About Theme Info', 'globejourney-fse' ); ?></h1>                        
						<div class="featureDesc">
							<?php echo esc_html__( 'The GlobeJourney FSE is free travel booking WordPress theme for tour agency, tour guide, tour operator, tourism, tours, travel, travel agency, travel and tourism website, travel booking.', 'globejourney-fse' ); ?>
						</div>
						
                        <h1 class="welcomeTitle"><?php esc_html_e( 'Theme Features', 'globejourney-fse' ); ?></h1>

                        <h2><?php esc_html_e( 'Block Compatibale', 'globejourney-fse' ); ?></h2>
                        <div class="featureDesc">
                            <?php echo esc_html__( 'The built-in customizer panel quickly change aspects of the design and display changes live before saving them.', 'globejourney-fse' ); ?>
                        </div>
                        
                        <h2><?php esc_html_e( 'Responsive Ready', 'globejourney-fse' ); ?></h2>
                        <div class="featureDesc">
                            <?php echo esc_html__( 'The themes layout will automatically adjust and fit on any screen resolution and looks great on any device. Fully optimized for iPhone and iPad.', 'globejourney-fse' ); ?>
                        </div>
                        
                        <h2><?php esc_html_e( 'Cross Browser Compatible', 'globejourney-fse' ); ?></h2>
                        <div class="featureDesc">
                            <?php echo esc_html__( 'Our themes are tested in all mordern web browsers and compatible with the latest version including Chrome,Firefox, Safari, Opera, IE11 and above.', 'globejourney-fse' ); ?>
                        </div>
                        
                        <h2><?php esc_html_e( 'E-commerce', 'globejourney-fse' ); ?></h2>
                        <div class="featureDesc">
                            <?php echo esc_html__( 'Fully compatible with WooCommerce plugin. Just install the plugin and turn your site into a full featured online shop and start selling products.', 'globejourney-fse' ); ?>
                        </div>

					</div> <!-- .Grace-Welcome -->
				</div> <!-- .Grcae-info-holder-content -->
				
				
				<div class="Grcae-info-holder-sidebar">
                        <div class="sidebarBX">
                            <h2 class="sidebarBX-title"><?php echo esc_html__( 'Get GlobeJourney PRO', 'globejourney-fse' ); ?></h2>
                            <p><?php echo esc_html__( 'More features availbale on Premium version', 'globejourney-fse' ); ?></p>
                            <a href="<?php echo esc_url( 'https://gracethemes.com/themes/travel-journey-wordpress-theme/' ); ?>" target="_blank" class="button"><?php esc_html_e( 'Get the PRO Version &rarr;', 'globejourney-fse' ); ?></a>
                        </div>


						<div class="sidebarBX">
							<h2 class="sidebarBX-title"><?php echo esc_html__( 'Important Links', 'globejourney-fse' ); ?></h2>

							<ul class="themeinfo-links">
                                <li>
									<a href="<?php echo esc_url( 'https://gracethemesdemo.com/globejourney/' ); ?>" target="_blank"><?php echo esc_html__( 'Demo Preview', 'globejourney-fse' ); ?></a>
								</li>                               
								<li>
									<a href="<?php echo esc_url( 'https://gracethemesdemo.com/documentation/globejourney/#homepage-lite' ); ?>" target="_blank"><?php echo esc_html__( 'Documentation', 'globejourney-fse' ); ?></a>
								</li>
								
								<li>
									<a href="<?php echo esc_url( 'https://gracethemes.com/wordpress-themes/' ); ?>" target="_blank"><?php echo esc_html__( 'View Our Premium Themes', 'globejourney-fse' ); ?></a>
								</li>
							</ul>
						</div>

						<div class="sidebarBX">
							<h2 class="sidebarBX-title"><?php echo esc_html__( 'Leave us a review', 'globejourney-fse' ); ?></h2>
							<p><?php echo esc_html__( 'If you are satisfied with GlobeJourney FSE, please give your feedback.', 'globejourney-fse' ); ?></p>
							<a href="https://wordpress.org/support/theme/globejourney-fse/reviews/" class="button" target="_blank"><?php esc_html_e( 'Submit a review', 'globejourney-fse' ); ?></a>
						</div>

				</div><!-- .Grcae-info-holder-sidebar -->	

			</div> <!-- .Grcae-info-holder -->
		</div><!-- .Grace-wrapper -->
<?php } ?>