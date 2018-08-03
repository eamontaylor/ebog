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
define('DB_NAME', 'ebog');

/** MySQL database username */
define('DB_USER', 'eamon');

/** MySQL database password */
define('DB_PASSWORD', '3r!mUhu_1');

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
define('AUTH_KEY',         'd;*`i&l ;i5#LwFea@v=/{v9h?};+<@@{:,!a3V;b/B.E6wM.uD`dp4RT;5(9G61');
define('SECURE_AUTH_KEY',  'n=Y:#2`&[%Aw`_dDU4qG/mPmJ2mcO~Li)|}s;g:4`u>e:P+mwcunVGQ)N^vZfC1b');
define('LOGGED_IN_KEY',    'nVOaJ:qqbd3N^F5}fLeh9Sa[T$QY*:QV!d8|qAYyKJ^c|l8pe<IN| P*LRt5uXpS');
define('NONCE_KEY',        '&wz}hO#~gCEFY?g~4~N>G,{B+JF^uKoKrwyAwf.>GU@mh~,5;#&4e/30VOk$g%Ax');
define('AUTH_SALT',        'i]*_sRoTf~C]375X6$XM?Pk(a?+Ea{]@0>-M&9s 7NRh&hWW*a#V1c=#IGWZcUT%');
define('SECURE_AUTH_SALT', 'aO=[X_ww=o|4m>KXRysCOw@N@t=N7DY^==_i;Am7b<DY{N?8T+1joXHXGYD6CHUA');
define('LOGGED_IN_SALT',   'eYe:_jWuo8<@: _ Ogwj3J@5X(ekYubgF3pG1jcJ@-2>/u#O{o=ixN?[i{B$&m(P');
define('NONCE_SALT',       '}-%^-eWQwyV%<)=<vCHWy;Jx6[z^V?&t-OGa8Q^r/iea?| !V6O[F[$UUbxLn4{b');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
