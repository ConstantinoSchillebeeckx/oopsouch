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
define('DB_NAME', 'db213837_1clk_wordpress_7KHYA4LXwuxghiQH');

/** MySQL database username */
define('DB_USER', 'wordpress_JUyiG7');

/** MySQL database password */
define('DB_PASSWORD', 'mov7QXtA');

/** MySQL hostname */
define('DB_HOST', 'internal-db.s213837.gridserver.com');

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
define('AUTH_KEY',         '0qgy1Y4JyYVigPGeI1ElsxLw0jV79ACd2xyrVqM4HSHiUUoptw9Cchbt2SkpsMMY');
define('SECURE_AUTH_KEY',  'zHFkzvvLW9qltATQLytLrdsXQiZq4wxcJTTfd4WOE46QE92mdgWC6QMrscjrp9UE');
define('LOGGED_IN_KEY',    'xdJ7EbiU8YKSi2UabqSmhDs9Ns6U3crS3byBx2wXI4A8taEO0cs8lfjsx7lUJ0Ab');
define('NONCE_KEY',        '0khnwHZFvkGPqBAHKZ8k7yj2vakemWeC704r9FtmJNp8UrnSMikJ4VVkmPnL1qwq');
define('AUTH_SALT',        'zEkQixsNOdpr4j9zxJPM6uuz0VTCtWlz0Hhnya1Yd9uXPhFVscOhGuwB7eJiXyen');
define('SECURE_AUTH_SALT', 'GJPsitEmVkfXytVBIwgnxFDcjIgnfHIf1IL1mjQAR5L22gS0YoJ1BEukkMJRuC06');
define('LOGGED_IN_SALT',   'mr0hnvC4B2lAQHRTUXa6Lat2fWjoR6a5yPJLks3IuVMcJnxePOc6uzFmDTruHpTi');
define('NONCE_SALT',       '2UA4AIoOcy52exGpi1vzfgEOvoXiznAEYongJ2TYymM9mT2eMDFQfDaTz1RDuQDc');

/**
 * Other customizations.
 */
define('FS_METHOD','direct');define('FS_CHMOD_DIR',0755);define('FS_CHMOD_FILE',0644);
define('WP_TEMP_DIR',dirname(__FILE__).'/wp-content/uploads');

/**
 * Turn off automatic updates since these are managed upstream.
 */
define('AUTOMATIC_UPDATER_DISABLED', true);


/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'qwu7_';

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
