<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'test' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'D?8&{_riHA+*jKXxh_cW1`6D>Y=j<>q*a?uqCYIsY1-<|k.1HvY_F;F {K<%O_+)' );
define( 'SECURE_AUTH_KEY',  '@|J^CB$4z.2Rt]IXj9W*=NjQsW$nW)S7YW>*RH!{H,}*M<jptGl_w8Sfipe7m{&&' );
define( 'LOGGED_IN_KEY',    '{0dnlyk,B*Wi!P+2+yc[lNwCic0p$R-9t3!Uq@NclK[1jUTzhsgEt6~An9-InEUP' );
define( 'NONCE_KEY',        'UN(4_s z|+ji$qJAFHZAkjxmMidVizkT4AP0FzBuKfLIk,.(h,|v2)yG mUz:Mv{' );
define( 'AUTH_SALT',        'Eg?7=Xop]lAIL(w_(V@.tQ{f5J:y|CRQVIpum-K!{?.fj#EmCPu!kn(>4Vb-5h?`' );
define( 'SECURE_AUTH_SALT', 'KS0:JGJw*KOKlj-+g/I$BiBmSp0.~mqJ427[*]egjy+3m!5~:)$x7@tT>Y%xm5pg' );
define( 'LOGGED_IN_SALT',   'epCxmu==!5jgAj&cJf@RWSd`r-SM@o9u&r4Iq^[}SqfGCC&Idh[-[62~#$!aMs^8' );
define( 'NONCE_SALT',       '$k>MN^tH*ZO.[!VB5xV_{>s6829^3 HV|D!, 9,4o}p0/&joEA9xv!ENNo`w4Gh ' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
