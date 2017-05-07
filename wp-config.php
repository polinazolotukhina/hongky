<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */
// ** MySQL settings - You can get this info from your web host ** //
if ( file_exists( dirname( __FILE__ ) . '/wp-config-local.php' ) ) {
    include dirname( __FILE__ ) . '/wp-config-local.php';
} else {
    define('DB_NAME', 'hongky');
    define('DB_USER', 'root');
    define('DB_PASSWORD', 'iwoorkmysql');
    define('DB_HOST', '127.0.0.1');
    define('DB_HOST_SLAVE','127.0.0.1'); //WPE
    define('DB_CHARSET', 'utf8'); //WPE
    define('DB_COLLATE', ''); //WPE
    define('WP_HOME',    'http://hongky.ru/' );
    define('WP_SITEURL', 'http://hongky.ru/' );
    $table_prefix  = 'wp_';
    
}

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '+#;p3WcdSQF0ZZxr4J4FFca90lt~<[d{4Dgc02RBUYR6S<MD.R%DJQ+#W{j<l-^S');
define('SECURE_AUTH_KEY',  'Iq _Kx97Yb0Z9G7dr14(|gTFRtOfknqfXj<1o<DWpEH1fRqUA}]-T[V W-Zan3,(');
define('LOGGED_IN_KEY',    'k2kY02SZ^LMPD+Z=Rjh@vnz#@+BFJD1!1|=)/sdo%I657`_8rS:OQT|{]ZPH[J~H');
define('NONCE_KEY',        ')w<6_-D- kx^5gu;bXL-[_hBQzxG|/,`y g |L|u+1m5R-zHl0nw1OBXV+,n5,Ih');
define('AUTH_SALT',        'icZ/s}vG{/wPwi=y083!/V.q%-( e`W1*E7jk,NwfM:zswX9e@?X{~fK%[I:(4T7');
define('SECURE_AUTH_SALT', '<v#BkAB:6H$;Yc*AC<Hlk6__f:_Y4=+5VR_z9bLDJ ei_C[14!y|9!S+!n5T},|v');
define('LOGGED_IN_SALT',   '9];:,K5T`A!-_L$/-Z9ez:[ATO|reD>80mi9/cQ;LX)#|d#|1qd3UVs-1.|w+#A ');
define('NONCE_SALT',       'MCckkI`#[%sw$,m2TXD9g5||o/{+~8m]k*$A;wXL[0_#-|-E:ZIY1J y2BwWO:|8');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
