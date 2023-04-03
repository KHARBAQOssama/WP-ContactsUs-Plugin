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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'plugin' );

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
define( 'AUTH_KEY',         'WTT6!j[TrjQi4, ?Cg/.WAbEXRI&-|lT^kW)AH;lL-c-+E5W.)7tY{rVt h<gs]X' );
define( 'SECURE_AUTH_KEY',  '=T&5+uh2skp~c]l(quy6+Q}!$1qHpyVeOkS{Saj}%:Uc#0VVYg7gI|d0D>K22]~*' );
define( 'LOGGED_IN_KEY',    'b535a!}tQAC>S(k:9P@5~]DA EX4FoW~G]wWhITG6dT8ERH~Z5||=vaYD_{Qa5Cm' );
define( 'NONCE_KEY',        'Ncl.3IsTz_z0l(!BgSu!QkxwT9Bay&in/8%$RiC4h7U>1ZNsH<8irp~Gjeq=6+$,' );
define( 'AUTH_SALT',        '=aja8^^HB^Kw_}sV~b|bu>b:HlwpY8v8f>cLeA{Gal`{$>JWR];`QxyOFlr$+5&a' );
define( 'SECURE_AUTH_SALT', '2Swm!(9$nQ-P%A{1UAq2Cxv^LeS$SP#ihpm21Eii;Se>?)u*#UOTT:q}A;%|*$:N' );
define( 'LOGGED_IN_SALT',   '< Z0u/TIM|0l6r<^D;Y&CwlRtHf?+zIP[GX7*%xXC>%q}j6*cE?+v|[J<A#H!iKb' );
define( 'NONCE_SALT',       'N[3Z]E.a!#FPg5B(gUz<)*no ;{{bn6i[`M+f=D@B[S**BI)tLxK;93oSST9f}bo' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
