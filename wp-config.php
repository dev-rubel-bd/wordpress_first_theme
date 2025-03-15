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
define( 'DB_NAME', 'wordpress_first_them' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'mysql' );

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
define( 'AUTH_KEY',         'b7)DwevE%HB&1NA`{C$UMV{QM>NYxp:31j$Uh-h-x4T()[-Mxe1.l;a}zP~P@s34' );
define( 'SECURE_AUTH_KEY',  ':8wxw]#V`{k]~^eo`_5pZq*yc!dE D:>65)W8;F}&i)%9gG.H}Z8hUlGX_+0#YK5' );
define( 'LOGGED_IN_KEY',    '(*c]H>O,+]Do*zzn(eB|x>*S!0[YGE{f!Z%ZC>oc=_.}OJ5,Yxg-;nc5:30+C^,R' );
define( 'NONCE_KEY',        '.OHJK=1XL872p/cM;jjvjz2H U@};Uk<_DzVS4@:?G/WdNi)>_Im$m:Z@;U@`bgS' );
define( 'AUTH_SALT',        'B!=sH2&*p5(9t867{Ja!v77uph^l6iEt{crxIf6fDjq?gLhtR/Jd~V?Ium.EH?.t' );
define( 'SECURE_AUTH_SALT', 'PrgD+.qr{T9pFJT][{xHu#Vv!>U,oa^K3nD+%Nih3GLeC2)|^tLUHMFI=#P>UKAj' );
define( 'LOGGED_IN_SALT',   'uYv8W6N~^&)f-_e+2z@&cGk 7}Q-%T5_t -n_z0X:oV-?Lr)x~?{kb?I_-a%3jov' );
define( 'NONCE_SALT',       '$ek*)GCe(DU]/`YqlyE#up6iI6.zbG#_5`9kVm1tG]o[0p_rcV-B&)z6SyL2X_)S' );

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
$table_prefix = 'wp_first_them';

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
