<?php

use ColibriWP\Theme\Core\Hooks;
use ColibriWP\Theme\Core\Utils;
use ColibriWP\Theme\Defaults;
use ColibriWP\Theme\Translations;

$silverstorm_front_page_designs = array();
$silverstorm_slug        = "colibri-wp-page-info";
$default_front_page_designs =   array(

    array(
        'name'  => __( "Modern", 'silverstorm' ),
        "index" => 3,
        "meta"  => array(
            "slug"    => "modern",
            "version" => "v2"
        )
    ),

    array(
        'name'    => __( "Modern", 'silverstorm' ),
        "index"   => 3,
        "display" => false,
        "meta"    => array(
            "slug"    => "modern",
            "version" => "v1"
        )
    ),

    array(
        'name'  => __( "Classic", 'silverstorm' ),
        "index" => 2,
        "meta"  => array(
            "slug"    => "classic",
            "version" => "v1"
        )
    ),

    array(
        'name'  => __( "Fullscreen", 'silverstorm' ),
        "index" => 1,
        "meta"  => array(
            "slug"    => "fullscreen",
            "version" => "v1"
        )
    ),
);

foreach ( $default_front_page_designs as $design ) {
    if ( Utils::pathGet( $design, 'display', true ) ) {
        if ( Utils::pathGet( $design, 'meta.slug' ) === 'modern' ) {
            $silverstorm_front_page_design = $design;
            break;
        }

    }
}

$colibri_get_started = array(
    'plugin_installed_and_active' => Translations::escHtml( 'plugin_installed_and_active' ),
    'activate'                    => Translations::escHtml( 'activate' ),
    'activating'                  => __( 'Activating', 'silverstorm' ),
    'install_recommended'         => isset( $_GET['install_recommended'] ) ? $_GET['install_recommended'] : ''
);

wp_localize_script( $silverstorm_slug, 'colibri_get_started', $colibri_get_started );

?>
<style>
    .silverstorm-admin-big-notice--container .action-buttons,
    .silverstorm-admin-big-notice--container .content-holder {
        display: flex;
        align-items: center;
    }


    .silverstorm-admin-big-notice--container .front-page-preview {
        max-width: 362px;
        margin-right: 40px;
    }

    .silverstorm-admin-big-notice--container .front-page-preview img {
        max-width: 100%;
        border: 1px solid #ccd0d4;
    }

</style>
<div class="silverstorm-admin-big-notice--container">
    <div class="content-holder">

        <div class="front-page-preview">
            <?php $silverstorm_front_page_design_image = get_stylesheet_directory_uri() . "/screenshot.jpg"; ?>
            <img class="selected"
                 data-index="<?php echo esc_attr( $silverstorm_front_page_design['index'] ); ?>"
                 src="<?php echo esc_url( $silverstorm_front_page_design_image ); ?>"/>
        </div>
        <div class="messages-area">
            <div class="title-holder">
                <h1><?php esc_html_e( 'Would you like to install the pre-designed Silverstorm homepage?',
                        'silverstorm' ) ?></h1>
            </div>
            <div class="action-buttons">
                <button class="button button-primary button-hero start-with-predefined-design-button">
                    <?php esc_html_e( 'Install the Silverstorm homepage', 'silverstorm' ); ?>
                </button>
                <span class="or-separator">&ensp;<?php \ColibriWP\Theme\Translations::escHtmlE( 'or' ); ?>&ensp;</span>
                <button class="button-link silverstorm-maybe-later dismiss">
                    <?php esc_html_e( 'Maybe Later', 'silverstorm' ); ?>
                </button>
            </div>
            <div class="content-footer ">
                <div>
                    <div class="plugin-notice">
                        <span class="spinner"></span>
                        <span class="message"></span>
                    </div>
                </div>
                <div>
                    <p class="description large-text">
                        <?php esc_html_e( 'This action will also install the Colibri Page Builder plugin.',
                            'silverstorm' ); ?>
                    </p>
                </div>
            </div>
        </div>

    </div>
    <?php
    $silverstorm_builder_slug = Hooks::prefixed_apply_filters( 'plugin_slug', 'colibri-page-builder' );

    wp_localize_script( $silverstorm_slug , 'silverstorm_builder_status', array(
        "status"         => silverstorm_theme()->getPluginsManager()->getPluginState( $silverstorm_builder_slug ),
        "install_url"    => silverstorm_theme()->getPluginsManager()->getInstallLink( $silverstorm_builder_slug ),
        "activate_url"   => silverstorm_theme()->getPluginsManager()->getActivationLink( $silverstorm_builder_slug ),
        "slug"           => $silverstorm_builder_slug,
        "view_demos_url" => add_query_arg(
            array(
                    'page'        => 'silverstorm-page-info',
                'current_tab' => 'demo-import'
            ),
            admin_url( 'themes.php' )
        ),
        'silverstorm_front_set_predesign_nonce' =>  wp_create_nonce( 'silverstorm_front_set_predesign_nonce' ),
        'silverstorm_disable_big_notice_nonce' => wp_create_nonce( 'silverstorm_disable_big_notice_nonce' ),
        'colibri_plugin_install_activate_nonce' => wp_create_nonce( 'colibri_plugin_install_activate_nonce' ),
        "messages"       => array(
            "installing" => \ColibriWP\Theme\Translations::get( 'installing',
                'Colibri Page Builder' ),
            "activating" => \ColibriWP\Theme\Translations::get( 'activating',
                'Colibri Page Builder' )
        ),
    ) );
    ?>
</div>



