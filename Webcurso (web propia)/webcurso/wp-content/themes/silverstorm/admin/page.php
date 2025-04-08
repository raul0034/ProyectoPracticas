<?php


use ColibriWP\Theme\Core\Hooks;
use ColibriWP\Theme\Translations;
use ColibriWP\Theme\View;

$silverstorm_tabs            = View::getData( 'tabs', array() );
$silverstorm_current_tab     = View::getData( 'current_tab', null );
$silverstorm_url             = View::getData( 'page_url', null );
$silverstorm_welcome_message = View::getData( 'welcome_message', null );
$silverstorm_tab_partial     = View::getData( "tabs.{$silverstorm_current_tab}.tab_partial", null );
Hooks::prefixed_do_action( "before_info_page_tab_{$silverstorm_current_tab}" );
$silverstorm_slug        = "colibri-wp-page-info";
$colibri_get_started = array(
    'plugin_installed_and_active' => Translations::escHtml( 'plugin_installed_and_active' ),
    'activate'                    => Translations::escHtml( 'activate' ),
    'activating'                  => __( 'Activating', 'silverstorm' ),
    'install_recommended'         => isset( $_GET['install_recommended'] ) ? $_GET['install_recommended'] : ''
);

wp_localize_script( $silverstorm_slug, 'colibri_get_started', $colibri_get_started );
?>
<div class="silverstorm-admin-page wrap about-wrap full-width-layout mesmerize-page">

    <div class="silverstorm-admin-page--hero">
        <div class="silverstorm-admin-page--hero-intro silverstorm-admin-page-spacing ">
            <div class="silverstorm-admin-page--hero-logo">
                <img src="<?php echo esc_url( silverstorm_theme()->getAssetsManager()->getBaseURL() . "/images/colibriwp-logo.png" ) ?>"
                     alt="logo"/>
            </div>
            <div class="silverstorm-admin-page--hero-text ">
                <?php if ( $silverstorm_welcome_message ): ?>
                    <h1><?php echo esc_html( $silverstorm_welcome_message ); ?></h1>
                <?php endif; ?>
            </div>
        </div>
        <?php if ( count( $silverstorm_tabs ) ): ?>
            <nav class="nav-tab-wrapper wp-clearfix">
                <?php foreach ( $silverstorm_tabs as $silverstorm_tab_id => $silverstorm_tab ) : ?>
                    <a class="nav-tab <?php echo ( $silverstorm_current_tab === $silverstorm_tab_id ) ? 'nav-tab-active' : '' ?>"
                       href="<?php echo esc_url( add_query_arg( array( 'current_tab' => $silverstorm_tab_id ),
                           $silverstorm_url ) ); ?>">
                        <?php echo esc_html( $silverstorm_tab['title'] ); ?>
                    </a>
                <?php endforeach; ?>
            </nav>
        <?php endif; ?>
    </div>
    <?php if ( $silverstorm_tab_partial ): ?>
        <div class="silverstorm-admin-page--body silverstorm-admin-page-spacing">
            <div class="silverstorm-admin-page--content">
                <div class="silverstorm-admin-page--tab">
                    <div class="silverstorm-admin-page--tab-<?php echo esc_attr( $silverstorm_current_tab ); ?>">
                        <?php View::make( $silverstorm_tab_partial,
                            Hooks::prefixed_apply_filters( "info_page_data_tab_{$silverstorm_current_tab}",
                                array() ) ); ?>
                    </div>
                </div>

            </div>
            <div class="silverstorm-admin-page--sidebar">
                <?php View::make( 'admin/sidebar' ) ?>
            </div>
        </div>
    <?php endif; ?>
</div>





