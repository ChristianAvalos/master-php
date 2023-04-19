<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('WP_CACHE', true);
define( 'WPCACHEHOME', 'C:\xampp\htdocs\master-php2\master-php\wordpress\wp-content\plugins\wp-super-cache/' );
define( 'DB_NAME', 'aprendiendo-wp' );

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
define( 'AUTH_KEY',         'VINPZ_Y%7 }=QbMRUDV-h-.R<U+$5uUqUh-^P/NFKn/&)FnjbA[4%Kp>O[N&9wIy' );
define( 'SECURE_AUTH_KEY',  'b(6?Q<niiN2QrlnEk)%DgN]HWtqUW0>>jWGp+*}=#!fH>Yc-<1`.H%7Vyj8/r.]o' );
define( 'LOGGED_IN_KEY',    'j6{O~MlTJ h}j,_B43Zz8~iwO`w}F_fCuqb-@)M1fwm2IUDb#afJ$]FNWdb+jo$*' );
define( 'NONCE_KEY',        'NuLiz10KY/WStzcUi@AvO=Tv]6-yi@y NO}`gF:BgItC,OnVp:Wj6aOTm%BtR:Rv' );
define( 'AUTH_SALT',        'S97o&2d+!H<71z70/> w>4niBMXNNM3.]I5R<jGQR,=PxS/N>.QG`YE]`W`^J+(5' );
define( 'SECURE_AUTH_SALT', '=Y{ZOY`[Rd6@E9Ix))a}DZ4S~.U|+0)1Q2C/GzPf7(A0^M`4Y..)WAfE/q_YC3oS' );
define( 'LOGGED_IN_SALT',   '^3yfm_2-l?BgoNX4$?q<vhkjl+Us3MqdsI,Xp~`-9M-UCw8+hdP%KoCD}?[0CJn9' );
define( 'NONCE_SALT',       'So@e >r dLD]x;y47Wl#9*`:;DBaHt>(!oKd_ZVq~SC~u!L=$.fx9(jK/m)7}* W' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
