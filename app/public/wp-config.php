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
define('AUTH_KEY',         'zLTDhgycCKa3FKTJVbCMN/osfiQyiFwvqJ819A1C+tAiRJ/pNxC+cf3HpEZNP5LXX3tDmUbSxi73CazcxHMWaA==');
define('SECURE_AUTH_KEY',  'BpvDM8ZaBI0YXK2S0Y5hfhrGQ2rKiia9yw9/3nG28gToFqTT57TULhcIYda71cgLAoJjCxLPsHd+729KR/fkAg==');
define('LOGGED_IN_KEY',    'klKZZlaRIg8+MByLwDjMCbT9Hq5TXCBFHChWUmkww8HAP4XCHBndZmzqzW+EL6tkt6923LCzoLteoZr+0dpfGQ==');
define('NONCE_KEY',        'L8U+npJORfFZedkf3KecLnAZ0WujEEaAUz8y233CVmQTtBvOSrpsH6Lon/dI3N6o2WPbCp++pBWB8WFsNBj1vQ==');
define('AUTH_SALT',        '7/unpf/+Z6C3URwqG8mlBDS/xT2lxx192/BXmecDRpqJ5DHC/fQVBMlR4YaUXqYYSjhP7xJTzIXe68C/NSMtcA==');
define('SECURE_AUTH_SALT', 'bG338thVuhLsyGS6Oa8wA+107IjzQX5ID7FN0VNJJt44uzkRoARekUeenJSzibaCfPSxnq5CXbkRB3iKKKOyRQ==');
define('LOGGED_IN_SALT',   'TPuEjixzuwNh02vOQ52qfW0JWm1e3N6mhY6r6S92gc0Jqyb+zA4ij2XWmaoP1qDJMlgO5FyijtsVTHE100SdCA==');
define('NONCE_SALT',       'gQCB/1h4wEvASF+ZyK2B6OGHsljNVonD/MX3SpqQiN+BLwDck+iWb/1cKJ+03P/rhhReAUEQOTDDi+0hjHYpCw==');

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
