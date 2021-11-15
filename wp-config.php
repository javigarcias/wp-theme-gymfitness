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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
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
define('AUTH_KEY',         'pvHQYvCOCnrpszXBIzJs1GAFK5m4OwU/6vE0VvN9zMrikTh7qYggoqGrQywXoZilrr/R229hx+5Cc3kpd6ZUeQ==');
define('SECURE_AUTH_KEY',  'ShdwvgIGy29QoZ9mAaWK7SmMJFVoqv7KHN+fD5es/cyiOdZfI0YCoNuHneBOsusN77S7ZYNYzxf/f+fWZ2wArg==');
define('LOGGED_IN_KEY',    'AafrLY8EsHJb8ya5PyMnecaZjj3lLsja8mChYc8HS36lGWvxfOZ0YHyX8LD2jLciD6PtHrOPDtibRzu5RF8nkA==');
define('NONCE_KEY',        'xPuYsNBMK2qJ2OUP3c42y7cgarOlWoppAV6uvFNoN9wJk99KTEbcF2hJeSnhFwyA76HzdRfepD78yaoZxUIy1g==');
define('AUTH_SALT',        'EcqmwjjMfB3w30KDo368C7Eh7m7DLQLd2wzrGIULBCxexzRCAHEC/8z7A/WePQWHT7JA26RVE5PCACq1TS3e9Q==');
define('SECURE_AUTH_SALT', 'qjZGGl+0xARWEqHyiLITceiGEsMCCOH9qjbbjkCowi54cvoJHOPxf1EcgI4x0ZEQ9T85yodC0MLomfH9p7L/EQ==');
define('LOGGED_IN_SALT',   'q4EcQo9jtaJRDqfGk++qRetE0ZgLywShyNSy+nypJ+PDsuqYHthHj90jzsAbZSTWVYZLM/uFWPROrzDC+ZIxZw==');
define('NONCE_SALT',       '0ZXrW7Bp5C+IdHpldbodakf1A2+LvL0wJ9fR4HCQrGze4KEaDiWq9JaTrGTNEJueOy56Jt2PYkgwZpfuonZvOw==');

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
