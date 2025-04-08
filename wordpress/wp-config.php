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
define( 'AUTH_KEY',         'A7LDU91ZLW47Fq4PN^w |v(v{CNeq-({t:v YW>?rjzr6iEFcg4ekzyCztT>!qE#' );
define( 'SECURE_AUTH_KEY',  ':#W(Ei_?e:lFfLI#$;D@i??gNy1N(26Nj9Kl7v+ d`S2kK/q~rbAdGRi^Dp][PAa' );
define( 'LOGGED_IN_KEY',    'x]ibD-qzQ,=@{jY>MInYXQZ>63dmE`79e7OzNhE@[1a|eA5.;>hlp;InR]8@7ch<' );
define( 'NONCE_KEY',        '&U@FEv@[132Lv9*4h$9r, `?D)<*m5ieal+Cs}#L90Mf_Uf$r&oBxsBhu?MmM;eK' );
define( 'AUTH_SALT',        '?v)UQ;B(W~WrtV6rM8Goj{!y++9aaN5[x0j((+Zr!AS$C3X4^i2a6XzfKYJ1_WLm' );
define( 'SECURE_AUTH_SALT', '8xVZ7Xo%+gYY.%SdVV3@cXZ%qwp)+]>@izAS2~WD!2NOKNR{I*=^-2iO<~[}(N.V' );
define( 'LOGGED_IN_SALT',   'LxM]X-`az6{Wcua~(80M~_C76X@,T7y%l9o*-B,{dr1$V wj:;yF?7R.#e6fhBwO' );
define( 'NONCE_SALT',       'lo:f@rLPkq 4DN8Uv0(_`452~-VRB%]jhSL6fKh;~og@Rths*z*R@G/,j*2[WQW3' );

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
