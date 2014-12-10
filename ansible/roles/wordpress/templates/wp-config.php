<?php
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
/** The name of the database for WordPress */
define('DB_NAME', 'SoS_DB');

/** MySQL database username */
define('DB_USER', 'SoS_User');

/** MySQL database password */
define('DB_PASSWORD', 'SoS_Password');

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
define('AUTH_KEY',         '/*=;qh7IOCm@Q|#9Q*e[;&j]5lJC.|5EWM[,~buA2iDU*tTV:~ns|`dh<:yy|tKQ'); define('SECURE_AUTH_KEY',  '>>s:(3oRq-dA~+,z:TEWuW@i=ez|-Q*sfFR8O1EGXj|-bCQRT;4wWq#(|ottN.TP'); define('LOGGED_IN_KEY',    'v:nWme{`Ri_R%6^*=gb7f?Jni<@j= vaKmuGA8#@RlSa|-Ic`0dLde}D2dVTsj#['); define('NONCE_KEY',        '1Wa$|PL@*TX_x}W<&DyXj<mRXh9b`,@R+  d8/d9xb12m>6!o8bP5>2i@(t6da0['); define('AUTH_SALT',        '.yAt<iZ3}-g Zc>8}OgihQmNKwy,[d)?V8-(q>D:8&o4ymzrI*Eu/1|]e$k_,Pch'); define('SECURE_AUTH_SALT', '=*$?>lugn*rMhg!)rmoN^>?keSOKACG)Dth|yP#)2)Tb}-o[[7PP&[X_OyT4|-Q/'); define('LOGGED_IN_SALT',   'E%H*#1ZIul>~+.F/.R9D-&}NbQs>(:@RD+l++)Si~P@gV|3eEc+)4w$@+6xx0$k*'); define('NONCE_SALT',       '&h&eb(DA:L*,%D-8T|Y_z}aR1.=X978-0bffxo/=x;EZ[.y0;*sU?mQ,WO&MLawX');


/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * See http://make.wordpress.org/core/2013/10/25/the-definitive-guide-to-disabling-auto-updates-in-wordpress-3-7
 */

/* Disable all file change, as RPM base installation are read-only */
define('DISALLOW_FILE_MODS', true);

/* Disable automatic updater, in case you want to allow
   above FILE_MODS for plugins, themes, ... */
define('AUTOMATIC_UPDATER_DISABLED', true);

/* Core update is always disabled, WP_AUTO_UPDATE_CORE value is ignore */

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
	define('ABSPATH', '/usr/share/wordpress');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
