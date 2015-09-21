<?php
/** Enable W3 Total Cache Edge Mode */
define('W3TC_EDGE_MODE', true); // Added by W3 Total Cache

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
/** The name of the database for WordPress */
define('DB_NAME', 'wpblog');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '{~R`j1=O~EQ=XsbVZ[3+|KW}2`_ciBWNz-P4C,4Z!Ua]f:)=@8_rn2m#-dtPd+#7');
define('SECURE_AUTH_KEY',  'aaF`f;2Z,W#uhuY)?O+Q6p!PjsvmP|MbABo$tnjvTmys8-K^%3DLJ`(<00oFq=f5');
define('LOGGED_IN_KEY',    'it4<iExrhFrz0!(C=WE+l4vY(LiXt Z45h/s(|c!P^mz!Y|?,st|l}W}r6(JPua%');
define('NONCE_KEY',        'AxrRuX^(mk)2PF[Ru;[@ `2)8eJ%)GaO!?65rEgnt[;Bmu8Eb&woi:fi$pVmqZ=B');
define('AUTH_SALT',        '_m9adg &xF]Kf^f-S!U2FALtZJ?Z8Y+ Mp&`+d{rzXIb1altq^r~At,gB;Qi(D} ');
define('SECURE_AUTH_SALT', '0c7-8UwBpQ&OLc%:&}yn9&m@KG0?>u5P4d&HtvmrxHDz@%^~J=wPE~@7h<]~5|C<');
define('LOGGED_IN_SALT',   'EZLn&Fqs[~6t9z&-@I,8-Z1-D|Kt|;3z1Wmq $z}8`4aQy}<C*S[DqzdukVL-}i~');
define('NONCE_SALT',       'pVb*8qLAN1ci+IqnUU3w}@U.PqEvX|Z/_)-ieV6^ <u`4k~-GB?(kj<l0#oK7_EG');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
