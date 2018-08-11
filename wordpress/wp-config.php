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
define('DB_NAME', 'Puerto Natura');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         '3deJI3Bq12<Z~JNscItc%/,FP^v.AfE!:T[v6!bik2 nnrA9NZ[}J^DyB6n8J^+5');
define('SECURE_AUTH_KEY',  'L@UA(I=KE |O;<,N:_c+^0(rVyP<=[Q75hAI69I]yPpP!YE4b!Gl$<$I]%!H+]&[');
define('LOGGED_IN_KEY',    'X@Sj2@92*iRh[j$W1eC?=9XFH*n&oo47pC*}1@@ehgWRz:ipH=rsF[U;j1;{T=@j');
define('NONCE_KEY',        ',FnIQc@7a@Y@Q)7B v6:/,<{Ih;c,*;-dVA8DP.?OUqM9jhI]T5IiCTLSt`@ER[U');
define('AUTH_SALT',        ';L!L_h.Q$UL2]9SCPE@*4^fwaXns(gxhtN.pJ&cbgv]@fLoe[7SZb@JD9Mh.ik)S');
define('SECURE_AUTH_SALT', ':+KAg&r`s_KehCJ:+oru4-v2=CnHJfFiG)jXPaErp)R}q$Ab/6bFWB^9}l/90uPK');
define('LOGGED_IN_SALT',   'IH-)?H$H7`0 ]juHbdJ_;Q5?j-Z^*8fiVZk9+VI-5o/c?MWF&or58BhvhmBOJO5n');
define('NONCE_SALT',       '7U}deI#(AZijmROVpoKa`7](5oZ =wB@_]*3+!?Eg$k|^(OVm&c%1qs:71@pI#o*');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'dl_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
