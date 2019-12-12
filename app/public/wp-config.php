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
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '218gu6IsOQxA+wu/lg/hW14abPMEvYXQm7RSwTunaMF/4P/DW9pi78siU0rSgBHWMImF/kuYlJRoMBxL0ZzM1A==');
define('SECURE_AUTH_KEY',  'Uwh+3ciI4CVsXop5+Skxk+mREfXyc3RMI0tlhXGFcSRckeduU+XS56xVwy1SZljUDlCw3cwH6FZD1jtcr8uJHA==');
define('LOGGED_IN_KEY',    'uWUdZc/F33QRvNKHnvnqyGkpPQFZY21vLQOWU9clr3K2VuyiyON+T4pXn0t5pWShMHecTROnatV1gnhQmcBagw==');
define('NONCE_KEY',        'BAlvI7wPa+ekWkQuwwSUrpj7ALC43kiWNzZcSJ0xfVsPMsg5P+64FbQjjM5muDIC8/QxQlK0hhAQIHPiWKGL8Q==');
define('AUTH_SALT',        'pKAccZV5LyhIIFarTGmyFZyCJevyFht25oaYwzAxe5dnCgILoqYHSHUqPyadsxeKN/I9ZmXmwMYcu+FRm+iO1w==');
define('SECURE_AUTH_SALT', '8MqV3SfNL8dZmZes62i2VGwfw/+bLpgysFpWBeVZ1q9brl7xc54RGqUQWHYWvZV4bcgEVZMLw07LgdihFTLG5Q==');
define('LOGGED_IN_SALT',   'iSbfOBDVJvo2L0hhEP8a3i+Fvk4ccoOsB2dLwon3wqlMm8yV4Ucwk+HO1YLE7H5F9rpHY+tNcXP2SIJulUGNnA==');
define('NONCE_SALT',       'lEo3qQZ50dqXoTuEnmbGy6ATZ/D+lr4ka6/U1pYWUUZwwoEIvmXrtKM/qP/Ab8psi7rH1MkDgd7oDidUFUlf1A==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
