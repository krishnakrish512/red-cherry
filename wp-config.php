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
define( 'DB_NAME', 'red-cherry' );

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
define( 'AUTH_KEY',         '+Lcm _j;P__J,|BIJ?bG.}!2]KMa:kn^[dmGSYIrxPevzTj.Hm=(M)]AP`bdbiOM' );
define( 'SECURE_AUTH_KEY',  'kJ7Blz(daYKW^*l.C)b $(D96_6ai;c^X{L/2~Q6C%[_yhs+GqbQ<+qWeMI~Xu$H' );
define( 'LOGGED_IN_KEY',    '_a2&f{EW$V,X]fdB [y2S_19sCe]2J,t8ZHZ90;s=BRM:{%L?JAaS>dVP{C(x MU' );
define( 'NONCE_KEY',        'sj08xr[?+iA+v^u]2xPQ*EdAXD4odML5Rn4^$cK 4Ra^NGiqoY}m;<V6|K`{oq&i' );
define( 'AUTH_SALT',        'K@EGFw-kJJ@eTIw[.#kWVYTBb!7X;H46tyru/h~dDAjG-?S[9h .7:1d;pzqHlJ4' );
define( 'SECURE_AUTH_SALT', 'Bqkg@syE(XeXH}C1hNHM^8#9^|`?Cu4+??=@jnFrI0>PF/WA/*[$a3WoNmC=CWAD' );
define( 'LOGGED_IN_SALT',   'q[]|jE4*S:_B*UN2%OUjU!$Q2ZZfsK.o$lO,Xad1JqkRG%3Wm>o@}a}/A8bcB((q' );
define( 'NONCE_SALT',       'j;xzVt)8fJQrfSQ!a0}e,2EC*7I/&I>NfLl2eJ[C-)&%>kEM)S~Xkr%[9^Io!FX_' );

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
