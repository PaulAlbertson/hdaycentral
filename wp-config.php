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
define('WP_CACHE', true); //Added by WP-Cache Manager
define( 'WPCACHEHOME', '/HAL/Innocean/2013/Hyundai_Central/site/wp-content/plugins/wp-super-cache/' ); //Added by WP-Cache Manager
define('DB_NAME', 'hyundaicentral');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'g_aO%Yo=ZIV#I@ }?ZJ#EfkMb2mlKW;t})&^-p1YL<;x U_-+&|TjO2+v[V2GWC4');
define('SECURE_AUTH_KEY',  '!>HGR;sVEgEv0eOH(rV`vf`FNbyNd&tVf,Kfls9=-`W(rq@uz5hl4OYsGV%v<.Jf');
define('LOGGED_IN_KEY',    'zLx*P^&`>IUYj|52z?;(_tPP`#Nnd7x&doV:fzu}m.k!r|+9QmLCo[y0nzvj8[Rm');
define('NONCE_KEY',        ':h!u+ZlddwQqv2bqTDH#)E3$vj6G6@#UuoR9nzN->Ao8y#eoJh.Y)/Ci`.BlG:+p');
define('AUTH_SALT',        'HEC:fQKscfDn^z}];5_Al!3lB0YsOSuES%ov-[4_s/mgqfBRQEzxS~t5QhI`>P:l');
define('SECURE_AUTH_SALT', 'Kd&cFtn-7CRLt2NZ}I`C:?Y.k+-*>5|hFkP+p<OeZYI8C)m$C2fv|KAwWTJ>D(Zi');
define('LOGGED_IN_SALT',   'VK8BB-b V,9+RRrFQmTS$p{+^0:Vf=q/<q2^K;v?,[qp(2/CUvOGMJY<ByZc>L?Z');
define('NONCE_SALT',       'I;]mblSN!SP2fWGAFP<k.*AiKPAFPW`mheA*ZrNyrI}(vZO|O%DKySBPp/$8]#W#');

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
