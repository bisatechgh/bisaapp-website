<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', "i7489916_wp9" );

/** Database username */
define( 'DB_USER', "i7489916_wp9" );

/** Database password */
define( 'DB_PASSWORD', "U.9fYkdMkrDnzljAi9Q58" );

/** Database hostname */
define( 'DB_HOST', "localhost" );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'latin1' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'dSW47PRTVlb08PdhDJTrPnVkLJedphEwXaHjGE2vXERTeIdWSWmZLXCihbLoBUMT');
define('SECURE_AUTH_KEY',  'rFENyox3Zh2FyBmZeEOVTBfoEJ2mx0Rz3ZpzzZ1l9kkj1zByUHbtfwvnfDbtGioo');
define('LOGGED_IN_KEY',    'KoWYZNTauC75jDgRV3Oy9I8d8mduJGdRUNRe03mpvzel0n1iAZFO3EonZBXKroeE');
define('NONCE_KEY',        'vu5SGNKvU6aSf6tnev4ALZtNIJJdIZY3FreeAGxjg5aqCrSZ4GVBf3XZcohhNeym');
define('AUTH_SALT',        'JiDW856DgvQUc7QE0w0RSKE75DNEVYivmMWXVuFxR6sJ3dQC6plZbTuGHzEDy9HT');
define('SECURE_AUTH_SALT', 'uHVrsVIwPaqCs1RMBibTKrS6WoAyPrS7xdwbRpC6PyrNkfjLX9DoVct1P0TdkUNO');
define('LOGGED_IN_SALT',   'YiLB5m8aaF3AjpYA7uQa9RpY8fKJ8MWJlHID08bQ7H3x4wQLhbXzj4DdW8aHqzRJ');
define('NONCE_SALT',       '5GcBcbPbsKGq8BiAbLm3hblVqtKiLgIGC7z5tfupdES7qFblnI35eCfwtW5a3qq8');

/**
 * Other customizations.
 */
define( 'WP_TEMP_DIR', '/home/dre3ey2vp967/public_html/bisaapp.com/wp-content/uploads' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'logj_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname(__FILE__) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
