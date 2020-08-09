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
define( 'DB_NAME', 'wp_sma_muhammadiyah' );

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
define( 'AUTH_KEY',         '[y=O3E5`qkn*: 8:t[ZQW{~/w`vWsX7mr$E>A4=iBCN;99@Vbe6Mk!Vxi{Bm90@:' );
define( 'SECURE_AUTH_KEY',  'cma^Y/cf^$VOL8SAX,yD;VqFqHHF+tQT=8T7p1_h=;D lbQnqS,Rzy%nywREwo-_' );
define( 'LOGGED_IN_KEY',    ');}#(rtui9e<n+>h,?wN_QZdR|eiU4%!&8?-+w*c(Wi:t!KFrGSV}YUTCL~xyDdc' );
define( 'NONCE_KEY',        'ASMGwgE;TV}@ScT{miC$]sQa0iEg)X(R:aWU[2`K=WMFX!8#}sI(E2{yX;jj&U:c' );
define( 'AUTH_SALT',        '_;`{j2P&a1U?!a^{0d5:v9)9h@GaeXR;Xrg^L~8szZn}J)bO[VU+jb<&29aK#X`:' );
define( 'SECURE_AUTH_SALT', '22))VYSskL-Vw^sfxa68,J09MS4s]c)eoY_mO|#L&,0vnBj)SEgrYq0Dpk<cfpPM' );
define( 'LOGGED_IN_SALT',   'avR@$v-Z;U$Y ]LH=CW*Y!|+|X,%Q9Jx&LW=HfJpE^?rE]jEq{>oVN?|^awSFu$M' );
define( 'NONCE_SALT',       'WJ;_MB:alI+z`pWASuE.rM8ymH@,Mo>)A3%+Pm*_Y)`VX@=B@|au>wm1WjWfI]er' );

define('WP_SITEURL', 'http://' . $_SERVER['HTTP_HOST']);
define('WP_HOME', 'http://' . $_SERVER['HTTP_HOST']);

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
