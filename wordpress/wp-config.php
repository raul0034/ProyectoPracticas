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
define( 'AUTH_KEY',         'wyO:A}vTj(XECx2oI2*=G1qOS<5pfx|LmRZYOEjBft80{kccLkb&,tVH[sGC[-_,' );
define( 'SECURE_AUTH_KEY',  '>QVS,]f:PbuxGn2%ba7qvQe!^$4mGeM2b1|r$0|I?!@Da,,nOb~:]~>$h_N//MQ/' );
define( 'LOGGED_IN_KEY',    ':b+CoW.7^{LEGHQq,|+]3gPtFz)[l3OTtYDS1mNdMQ]?uaYGR{//oTO $LP3ClhU' );
define( 'NONCE_KEY',        ')}dTVxJ`/Y#$.R&AmCqF=D?0#wM[KvLV|}8u5Dyd^T;peZa:jLm15eWJ5oR(_(rY' );
define( 'AUTH_SALT',        '&|bB,u1[CHV>R-pmgU:IX9|Gn$_p2[AaB?uSAee8|Dg*I6Y[pe%?c^igKO/lmDw-' );
define( 'SECURE_AUTH_SALT', 'WZF?:9,}]%Z{9ZY^`*:?_J$}(d3HC+S]]E@@wkJ_8J%!ue<iH5n3<6G~g522<v8_' );
define( 'LOGGED_IN_SALT',   '^+,V^3lm+/I$90u[GP_oj3-C<e l_L<k+#L2;[G#W<Ns~3I@[JuWmPtGTD(OHFiJ' );
define( 'NONCE_SALT',       '(rhKRV+TOY1~Bcr%4aK.@J(:CJg wxr1!2S9<3sl:|x}bX7pJe`?VyR/]#@7>ym&' );

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
