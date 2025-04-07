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
define( 'DB_NAME', 'webcurso' );

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
define( 'AUTH_KEY',         'pvRZKGBO2@A>.Iv=CT^$st:qIM/6M`91cXHN8Ues6trQ0:j!EXGIPG!nHH9OzJ6a' );
define( 'SECURE_AUTH_KEY',  '40-!i)4Jmk.exkgaaJh?(qwJy>*x[ZJs%-P4+qvY%/ %cr=mEyUVIYUsm-8I  .6' );
define( 'LOGGED_IN_KEY',    '2y~LHV8#atv ZgWXA$XSCvx@;2?xlA{_HlRPZ$!;1+VJs4AN# 5I|NF6`l)*-bND' );
define( 'NONCE_KEY',        '[~v.6q#gZE%x=AMlS}f`n)n77G);0wdZ5gpkGJBM$x*=#<v2sh0@]4xSGx<m!w5X' );
define( 'AUTH_SALT',        '<&)3-TH+wn,~<8xn)=Up-r]<Dc0ZWliV&&nc`Gxh9nz%i]C_j4z+(J@E*}pNcilp' );
define( 'SECURE_AUTH_SALT', 'Z.n]rMl?Z/i_BP_&9&~koTS[5hxn+m;-r$TH[NFo``c7WteKAN4lA<RBQ9^9yvo.' );
define( 'LOGGED_IN_SALT',   'PFhFJU`]o)snGkkk/IF3#K)]avIJDIu3:Y/`aeZUF3WAb{GeBt{U M#eE&&o|,-a' );
define( 'NONCE_SALT',       'g^6]pWmB#~KKp]w!91^cs!!5o=rFjPh VPT{l5(7*?9f<J|9sV1fl`YEgH&|#j0S' );

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
