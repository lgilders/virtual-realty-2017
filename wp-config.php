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
define('DB_NAME', 'virtual_realty');

/** MySQL database username */
define('DB_USER', 'jjavier');

/** MySQL database password */
define('DB_PASSWORD', 'JJLJ&SGLG');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'mk#2CH-M4*dqVJkC;O|}Ea2,bs5WxEvu<g&[de[).[L_RV]701#zCq7AnBvr}J2 ');
define('SECURE_AUTH_KEY',  '9@ i5W8(c%$Odx|_,tZ[_.hiTIXnSNEvt-{,Jt+H8f5a0>>n~K_q,KGw~Yy0%4-m');
define('LOGGED_IN_KEY',    'wV@GdCQm8$5@/rv;gK|;%!}z-r}Q-B5YN$&e/x`h]iF}x3Q-KhNu$=[<#_~/HTh ');
define('NONCE_KEY',        'Lk>n{g^j@|V.nOM6y,HsQ;+7+OLI>6R|PD>|f<cTxttH~2e}25HOgvx`IIlt^J@v');
define('AUTH_SALT',        'z|q?}XC|K;HP6tT-dd$iH^~$^#;]?#~p9d!Zq7iSZ-%[7=L<V~YC}Ott[Q%xcH!K');
define('SECURE_AUTH_SALT', '|b7#sVn(NFWj&j>%~P0Mm~u@D3Fn0G!h%Gy+ 1+beJ1DK$X8&C^>4=hz}gYh&^pC');
define('LOGGED_IN_SALT',   '+g*:5I)@CrVK3Y]}``SOU},y>Ag%hE.`3*S=lNNnRl*+0T!)z~:{_L+1!_>bi:Sr');
define('NONCE_SALT',       'g|Gb!]C,d&&o|m-i9*-BWWDZ)1|Y6y]Y.0B0EibyU,y9UzMn.r4zw9_/@Ve3{8sM');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'vr_';

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
