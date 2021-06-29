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
define( 'DB_NAME', 'db_wp' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '0`|*/>w>8_KaN!Hyk::/C|TQ!T3WHMoz<m&pGG(3QfOyTMQ1*4)d]L^hS*1e?QXs' );
define( 'SECURE_AUTH_KEY',  'ShK{8X`]u6|#^iNQ5-Af(Gxfp1F@j^TEa2;v`t_|(m:=l$2%yFvB(s:T:P{@4VQ(' );
define( 'LOGGED_IN_KEY',    '4COUmvd$_ .J^`?k6@6`{sFxV(pLM!+AVvhT{9WH;>Enou7>s[7eV_|:.=74LQ_C' );
define( 'NONCE_KEY',        ' C=F2QBmNY!8KEfo4m4WC|Yk#;>LJpL}sz6V8GH[#[fdr.0aPFBqY2CtesUA~2?e' );
define( 'AUTH_SALT',        'wU`QiE_j}a(=z_lePbZBfj`sa=IQ7Uh$qpR24Q3{B<UTlCgk`HVT0$~}iiu]tNk5' );
define( 'SECURE_AUTH_SALT', '?H&7<K=)pOCJ6~f+`S&xY![!aQR*G]?dZvFrvb@n=Iza=ST^|EZ,h632 S#34CHn' );
define( 'LOGGED_IN_SALT',   'Y`qSRNKQpek=}DBv_#;n3r+G8fRWEXLgN?e|&MuZA8{ [d`76Jdva`,g1RUm&W+^' );
define( 'NONCE_SALT',       '|<pA/<H;mPqiV#+To?N4eot@((K}lOYu@KBQ-0NNL)t)my4bdOT5C $s}-Cc!YKs' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'tbl_';

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
