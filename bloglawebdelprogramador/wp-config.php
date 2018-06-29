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
define('DB_NAME', 'lawebdel_wp884');

/** MySQL database username */
define('DB_USER', 'lawebdel_wp884');

/** MySQL database password */
define('DB_PASSWORD', ']JS]16p5X7');

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
define('AUTH_KEY',         'wexxztmv9zxsdas0jxztddc5uvql3kiwi2z84gfziohtdpv5fhiwidqqlr97ajeh');
define('SECURE_AUTH_KEY',  'rwi82vfufrm48hcfultgv29m10llvniyjooldsazttungxugucjwzaqwftcuzmr2');
define('LOGGED_IN_KEY',    'i8fqxoy96olyjqoztm4he1s3nunjrfmpbglledzwax9255x9bdyiqvv3o9hdvl9n');
define('NONCE_KEY',        'gc9t8cupgxm9fdd2n2unngc966jrdteb3di34wsthiw7kpqqbkoi9wr8dgghc6wn');
define('AUTH_SALT',        'afsqiclz8wpkm2bh7nb669nz8l7cyfdqmsegzmo4phybaiwet65hjmviogpj9m7m');
define('SECURE_AUTH_SALT', 'jeit3e8w6s3dne2j2vdfnnecb9xqmlzwmjmpu9mnik9sc6eedzje2p3pwabswmng');
define('LOGGED_IN_SALT',   'tntvwyxxfa4ui0q5wekbwrpnwlv8zpzwfpp5b96bwjryaswcl2jmjowiq5xseeiq');
define('NONCE_SALT',       'ac3dbs8yapuf7j1qvzcqbooqxlbrq1yjrqo8bvbnkntlwpzbkdrxgkx0ng7hshgm');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wpim_';

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
