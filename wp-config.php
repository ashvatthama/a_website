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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'ashvatthDBkvsed' );

/** MySQL database username */
define( 'DB_USER', 'ashvatthDBkvsed' );

/** MySQL database password */
define( 'DB_PASSWORD', '6k6QYyKnvN' );

/** MySQL hostname */
define( 'DB_HOST', '127.0.0.1' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',         'N-~#[Zhael29;emqxL76jf{<yBBnrq7--KKKpa__LLHta<..LLtfb<.PL$FFrnn@' );
define( 'SECURE_AUTH_KEY',  'h:Csil99G6mtxLP*TXbi2>bfj7}0Fz$z@RYc1os-KNGK~:C9OW#:<Xemp9u$QTij' );
define( 'LOGGED_IN_KEY',    '$ET<,{fjnFv!>0gZc}48ohlo8C5hw~|ZOWhpD6DL*#+PTXe;,{bmyQY}bVc}47' );
define( 'NONCE_KEY',        'u*.2Ey*$<bn$v^Ucjc4BNU1ls@|dhs~[#epKHPai6u*ATYu<AJcznw>BU8Ro!]DS' );
define( 'AUTH_SALT',        'c|0ovlo8CJwt-_Wd69tx~xLPW<]<6Eu+vIUbfBrv@NQJR|}0kZdk4C1hls~W]25tx' );
define( 'SECURE_AUTH_SALT', '1SHHtpp2.PPL+xErnTT$nj}}YUBor873gR-zwC8kOKswC8#OOwws8#SOOxw9<TT' );
define( 'LOGGED_IN_SALT',   'Tquf}><QQyk}}>UQ$NJws84!OKsssC]WWW~~G2]WW~-LyuA62aIuu762bMvrr33bJ' );
define( 'NONCE_SALT',       '#GO1da#__O6iee#_O6iee<.PA6fb{c>>>QQ$kk}}YU@so0}ZVGoo11:Z#OOKts5#' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );
define('FS_METHOD', 'direct');

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
