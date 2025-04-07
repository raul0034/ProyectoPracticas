<?php

use ColibriWP\Theme\PluginsManager;
use ColibriWP\Theme\Translations;

$silverstorm_is_builder_installed = apply_filters( 'silverstorm_page_builder/installed', false );

wp_enqueue_script( 'updates' );

function silverstorm_get_setting_link( $setting ) {
    return esc_attr( silverstorm_theme()->getCustomizer()->getSettingQuickLink( $setting ) );
}

?>

<div class="silverstorm-get-started__container silverstorm-admin-panel">
    <div class="silverstorm-get-started__section">
        <h2 class="col-title silverstorm-get-started__section-title">
            <span class="silverstorm-get-started__section-title__icon dashicons dashicons-admin-plugins"></span>
            <?php Translations::escHtmlE( 'get_started_section_1_title' ); ?>
        </h2>
        <div class="silverstorm-get-started__content">


            <?php foreach ( silverstorm_theme()->getPluginsManager()->getPluginData() as $silverstorm_recommended_plugin_slug => $silverstorm_recommended_plugin_data ): ?>
                <?php
                $silverstorm_plugin_state = silverstorm_theme()->getPluginsManager()->getPluginState( $silverstorm_recommended_plugin_slug );
                $silverstorm_notice_type  = $silverstorm_plugin_state === PluginsManager::ACTIVE_PLUGIN ? 'blue' : '';
                if ( isset( $silverstorm_recommended_plugin_data['internal'] ) && $silverstorm_recommended_plugin_data['internal'] ) {
                    continue;
                }
                ?>
                <div 
				
					class="silverstorm-notice <?php echo esc_attr( $silverstorm_notice_type ); ?> plugin-card-<?php echo $silverstorm_recommended_plugin_slug;?>">
                    <div class="silverstorm-notice__header">
                        <h3 class="silverstorm-notice__title"><?php echo esc_html( silverstorm_theme()->getPluginsManager()->getPluginData( "{$silverstorm_recommended_plugin_slug}.name" ) ); ?></h3>
                        <div class="silverstorm-notice__action">
                            <?php if ( $silverstorm_plugin_state === PluginsManager::ACTIVE_PLUGIN ): ?>
                                <p class="silverstorm-notice__action__active"><?php Translations::escHtmlE( 'plugin_installed_and_active' ); ?> </p>
                            <?php else: ?>
                                <?php if ( $silverstorm_plugin_state === PluginsManager::INSTALLED_PLUGIN ): ?>
                                    <a class="button button-large colibri-plugin activate-now" 
										data-slug="<?php echo $silverstorm_recommended_plugin_slug;?>"
                                       href="<?php echo esc_url( silverstorm_theme()->getPluginsManager()->getActivationLink( $silverstorm_recommended_plugin_slug ) ); ?>">
                                        <?php Translations::escHtmlE( 'activate' ); ?>
                                    </a>
                                <?php else: ?>
                                    <a class="button button-large colibri-plugin install-now"
									   data-slug="<?php echo $silverstorm_recommended_plugin_slug;?>"
                                       href="<?php echo esc_url( silverstorm_theme()->getPluginsManager()->getInstallLink( $silverstorm_recommended_plugin_slug ) ); ?>">
                                        <?php Translations::escHtmlE( 'install' ); ?>
                                    </a>
                                <?php endif; ?>
                            <?php endif; ?>
                        </div>
                    </div>
                    <p class="silverstorm-notice__description"><?php echo esc_html( silverstorm_theme()->getPluginsManager()->getPluginData( "{$silverstorm_recommended_plugin_slug}.description" ) ); ?></p>


                </div>
            <?php endforeach; ?>
        </div>
    </div>
    <div class="silverstorm-get-started__section">
        <h2 class="silverstorm-get-started__section-title">
            <span class="silverstorm-get-started__section-title__icon dashicons dashicons-admin-appearance"></span>
            <?php Translations::escHtmlE( 'get_started_section_2_title' ); ?>
        </h2>
        <div class="silverstorm-get-started__content">
            <div class="silverstorm-customizer-option__container">
                <div class="silverstorm-customizer-option">
                    <span class="silverstorm-customizer-option__icon dashicons dashicons-format-image"></span>
                    <a class="silverstorm-customizer-option__label"
                       target="_blank"
                       href="<?php echo esc_url( silverstorm_get_setting_link( 'logo' ) ); ?>">
                        <?php Translations::escHtmlE( 'get_started_set_logo' ); ?>
                    </a>
                </div>
                <div class="silverstorm-customizer-option">
                    <span class="silverstorm-customizer-option__icon dashicons dashicons-format-image"></span>
                    <a class="silverstorm-customizer-option__label"
                       target="_blank"
                       href="<?php echo esc_url( silverstorm_get_setting_link( 'hero_background' ) ); ?>">
                        <?php Translations::escHtmlE( 'get_started_change_hero_image' ); ?>
                    </a>
                </div>
                <div class="silverstorm-customizer-option">
                    <span class="silverstorm-customizer-option__icon dashicons dashicons-menu-alt3"></span>
                    <a class="silverstorm-customizer-option__label"
                       target="_blank"
                       href="<?php echo esc_url( silverstorm_get_setting_link( 'navigation' ) ); ?>">
                        <?php Translations::escHtmlE( 'get_started_change_customize_navigation' ); ?>
                    </a>
                </div>
                <div class="silverstorm-customizer-option">
                    <span class="silverstorm-customizer-option__icon dashicons dashicons-layout"></span>
                    <a class="silverstorm-customizer-option__label"
                       target="_blank"
                       href="<?php echo esc_url( silverstorm_get_setting_link( 'hero_layout' ) ); ?>">
                        <?php Translations::escHtmlE( 'get_started_change_customize_hero' ); ?>
                    </a>
                </div>
                <div class="silverstorm-customizer-option">
                    <span class="silverstorm-customizer-option__icon dashicons dashicons-admin-appearance"></span>
                    <a class="silverstorm-customizer-option__label"
                       target="_blank"
                       href="<?php echo esc_url( silverstorm_get_setting_link( 'footer' ) ); ?>">
                        <?php Translations::escHtmlE( 'get_started_customize_footer' ); ?>
                    </a>
                </div>
                <?php if ( $silverstorm_is_builder_installed ): ?>
                    <div class="silverstorm-customizer-option">
                        <span class="silverstorm-customizer-option__icon dashicons dashicons-art"></span>
                        <a class="silverstorm-customizer-option__label"
                           target="_blank"
                           href="<?php echo esc_url( silverstorm_get_setting_link( 'color_scheme' ) ); ?>">
                            <?php Translations::escHtmlE( 'get_started_change_color_settings' ); ?>
                        </a>
                    </div>
                    <div class="silverstorm-customizer-option">
                        <span class="silverstorm-customizer-option__icon dashicons dashicons-editor-textcolor"></span>
                        <a class="silverstorm-customizer-option__label"
                           target="_blank"
                           href="<?php echo esc_url( silverstorm_get_setting_link( 'general_typography' ) ); ?>">
                            <?php Translations::escHtmlE( 'get_started_customize_fonts' ); ?>
                        </a>
                    </div>

                <?php endif; ?>
                <div class="silverstorm-customizer-option">
                    <span class="silverstorm-customizer-option__icon dashicons dashicons-menu-alt3"></span>
                    <a class="silverstorm-customizer-option__label"
                       target="_blank"
                       href="<?php echo esc_url( silverstorm_get_setting_link( 'menu' ) ); ?>">
                        <?php Translations::escHtmlE( 'get_started_set_menu_links' ); ?>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php



wp_print_request_filesystem_credentials_modal();
wp_print_admin_notice_templates();



