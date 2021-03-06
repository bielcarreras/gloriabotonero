<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

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
define('DB_NAME', 'wp_556a418e7a3bd89d');

/** MySQL database username */
define('DB_USER', 'wp-556a418e7a3bd');

/** MySQL database password */
define('DB_PASSWORD', 'GXiidC30');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

define( 'WP_MEMORY_LIMIT', '512M' );
define( 'WP_MAX_MEMORY_LIMIT', '512M' );
/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */

define('AUTH_KEY',		'Vv@vka2klJRQPLnl$76Fgtb#r3tVQLZ2jRQ(Lc8#(u3^HlOJm9V6Zjxb2Y1dH^PZ');
define('SECURE_AUTH_KEY',	'O^*3W#s%k5BOePbMLhLLQ&Ke4YE@(T5vmEHL#@37D&XftybF@N0dL8SSjcKeZUoa');
define('LOGGED_IN_KEY',		'rXlME#7%V3@LLJpVobK0ROUBxUrd5#YkOQ8yg3AeR*#oilvcUzotDFq47#@pGLpX');
define('NONCE_KEY',		'1YGNam03CfT@&e91g9&Nn$XGvSHa4GPm!dmqUO5J&CsNQdYcheHu$RIO7MKJGvDK');
define('AUTH_SALT',		'a09M95d#hJXSKWnWnVpeId!dzEPhLE(fk6yZA%6ywHkK$W(pHe7jRaj53t#NwqcH');
define('SECURE_AUTH_SALT',	'a^9ymESVG3d4LJ6(Z5#Q7L8VArW^C2OSpEDeAWS7&$9ZeYW@#X7BAy#Cb4MnMKRW');
define('LOGGED_IN_SALT',	'C^xFchhakNvrXRda4#wR&rBFLCWF@EahMUQFBomJ8OIHhRM2AVXWUWuZ@Nl(akdN');
define('NONCE_SALT',		'AhP8*IzjpMIQPZNto^e7KyonXA5gmStgaBFEzrRL(l4u4^B^N4mGpcQBtCArP3*i');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

define('WPLANG', 'es_ES');

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
