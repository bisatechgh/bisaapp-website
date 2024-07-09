<?php
// Begin AIOWPSEC Firewall
if (file_exists('/home/dre3ey2vp967/public_html/bisaapp.com/aios-bootstrap.php')) {
	include_once('/home/dre3ey2vp967/public_html/bisaapp.com/aios-bootstrap.php');
}
// End AIOWPSEC Firewall

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

 * @link https://wordpress.org/support/article/editing-wp-config-php/

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

define( 'DB_CHARSET', 'utf8' );


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

define('AUTH_KEY',         'P3klFN5ydyYJr6uUIVpXypMXzVmUtdxz7nTFR3rQ6WK9V65iAcHm6arWHebtiGz9');

define('SECURE_AUTH_KEY',  'Dgf1kveGfa7fWvZ0COSMVEV7o2f0BKhhXYIZspiFuMYKiHNWlIlhCHmRyUkrYQQF');

define('LOGGED_IN_KEY',    'L2MoTEwf37V2krVzY4ziQlq3dVsiQK3fi0Dl03g8NMnTc9pL7ZX3MEASYDPzjl62');

define('NONCE_KEY',        'nICnAeXiVsS7CP9SkfHzxGP2CYvj773nErGXaQZRoel2jhwRGvJJScd59dpN9S0Q');

define('AUTH_SALT',        'LNU2Ey5utsqf0ZflwtHfIWiuoyRtWb3FooJAmB7bpTTaGvG0ccITS9XY5AGo0m3I');

define('SECURE_AUTH_SALT', '3WS1QeHIHtm7fKeAkgCSub0um5oY4iB8rQV4UsuLSoe2PEKZEUUMz0TEpYZC3fn1');

define('LOGGED_IN_SALT',   'eDZbPRdmaWVLdvXNe0eQvr2FyREx6Ny7bVQL5hCXkDykf5E3RqwIxCVo2RVPNC2d');

define('NONCE_SALT',       '4CYIehkya8e38KljRXWoSjEMeZtTJqUepng7XAYaqR1FYmsDHWL3ARhoPG655HOm');


/**

 * Other customizations.

 */

define('FS_METHOD','direct');
define('FS_CHMOD_DIR',0755);
define('FS_CHMOD_FILE',0644);
define('WP_TEMP_DIR',dirname(__FILE__).'/wp-content/uploads');



/**#@-*/


/**

 * WordPress database table prefix.

 *

 * You can have multiple installations in one database if you give each

 * a unique prefix. Only numbers, letters, and underscores please!

 */

$table_prefix = 'wp_';


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

 * @link https://wordpress.org/support/article/debugging-in-wordpress/

 */

define( 'WP_DEBUG', false );


/* Add any custom values between this line and the "stop editing" line. */




/* That's all, stop editing! Happy publishing. */


/** Absolute path to the WordPress directory. */

if ( ! defined( 'ABSPATH' ) ) {

	define( 'ABSPATH', __DIR__ . '/' );

}


/** Sets up WordPress vars and included files. */

require_once ABSPATH . 'wp-settings.php';
//Disable File Edits
define('DISALLOW_FILE_EDIT', true);