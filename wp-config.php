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
define('DB_NAME', 'gruev');

/** MySQL database username */
define('DB_USER', 'gruev');

/** MySQL database password */
define('DB_PASSWORD', 'TRJCFSVNs5PqCCvz');

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
define('AUTH_KEY',         '~*-TO+fL4.1sNc[}91m^d gAa_#V(bcD67f)%L|>XF;yC*:AuS1zDv%Hmpb&uw=!');
define('SECURE_AUTH_KEY',  '3j|Cf;jBK5%4:!=!fm#Q x0p-X4DnDdRz!9g7[H6auwI6MrwD]5f?n<|vz0Zrmg%');
define('LOGGED_IN_KEY',    '&OdU}8d)uQ+inr9N1dAH}x{j|4s*h0vP%(dCGCL*4o}[1P*z:A-n]Wo`P(wI979G');
define('NONCE_KEY',        'p W[op6lQUftCp(L6EkQ!_6RT3I8^t 6)WY6e(>zmqb%#D!OYX|NqIw;Q{`oJ+%#');
define('AUTH_SALT',        '5)(cnvhw|(K0)fH*^qY^{9:^JpSbn_-}=r<11p4v.e]!qUIJoo !%bHMD_S`g}9-');
define('SECURE_AUTH_SALT', '5xU*FY~gWdr@1aw:-@6S?cU)Kq9nJPz31!3nW(C@81@&K#A&jEG[`g9-|#0<[by;');
define('LOGGED_IN_SALT',   'l|Wf&DT~Ly2*=+&L93HO%snzBXAoeG&d(~vpp([n01K=]BQwfwmBcwf4$[5Du?`^');
define('NONCE_SALT',       'dVqWqyJ?vaZ7;,pO=3U&pn}XD SV}M.,0fZrk2k5`BC@^SYtL*%&s_~+L9>}n/_1');

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
