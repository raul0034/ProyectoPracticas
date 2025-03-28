<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress_db' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'G~K.DK<N76Wa2*=|AzJ$.R71:ga?HMkQ%<yqy/bylSAdk%&.U0x8@TC+:&]zTW(Z' );
define( 'SECURE_AUTH_KEY',  'nKJt6-iZ=)>sIKj`KO`5y~y7^Kz^Bg8.uWinHy{ug|o7Wv:ae(>(wU7laq7:V#RE' );
define( 'LOGGED_IN_KEY',    'h@j9q/>{G|g23#3 x,0hQ6beX6=;p.lC8?zp393 u{pghU9]&, ZCA7**+5DPqhu' );
define( 'NONCE_KEY',        'Y5*8s{7I!Is!Gi_y}?8qk<6b1g:e;.4MMA}094Y.Ky=@.y+|1<stZSbQAB1zYLde' );
define( 'AUTH_SALT',        'qU-C#uAm(m_/BvN+g&0$aewWhy;O,!B!&tQc7P[zR@D$5]~.I1I^ECTmXkKk=O(L' );
define( 'SECURE_AUTH_SALT', 'qX%Ee?+#ua~NR*jkS-V pH|Eo}O>)NufqeM?()<b0nG$,s2x54ll6,x%`A{WT$X<' );
define( 'LOGGED_IN_SALT',   '=u.C*eLl&E+1iS0wxZ|FA_W*(s<QVQQ ^D`gMrm(ozYEz(<ff%{tx}Zag;CK6D,p' );
define( 'NONCE_SALT',       ',gS>chx)vnmMFvG[{Q/ZYIGFb}rZh2f%QPVGLn06eX.K((_~OmFqX$W]t3Qu[.@#' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
