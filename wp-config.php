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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'andla112');

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
define('AUTH_KEY',         ')JQlP1Ov=CCb@xMpKwrf+%^bv}!-??%xSgks4c>s{n^rq^|197%4eio, Qjz.mD<');
define('SECURE_AUTH_KEY',  '}<*u;us;5*.4P5CQOz@6~K!+UEJx/Cgv6 :%~HjDV-rHXre/~mtFQ1H4qRBTMzC^');
define('LOGGED_IN_KEY',    'D$isPU`nf}w,`{2!hp+E)vANljj$Fuz%K,fL5u|7MMY_,m3UN67wrm*/KWMZtF/+');
define('NONCE_KEY',        '+UY2>MH^}LpI%ts(76W-rATrGY:iS)h>cCDW^w+qq6K{a<8F%@ZE{I-/-n<T]?v@');
define('AUTH_SALT',        'Hv_:KpD|hJtH+GFnmaCHOy[eta*`NRwL-{wL_ nd0)2f+#&9lFTR5)7)3rgCK!V:');
define('SECURE_AUTH_SALT', '+u[l*rl2E[-g4wrKe&p%R8Yx.@lkVv5Ly=WF5V%Fuu}+_&ANb|UHm1+-%p(>i+r2');
define('LOGGED_IN_SALT',   'e_-mYSLY&b!D=[=l{ Dt@!ko6]P~ iOBs~HE.Ufr[HrLP :+_7sHKwj4<t/&P{` ');
define('NONCE_SALT',       'L9dx.J/Dq-J#fHhLjq>f$9H*7fet|AgG`0F4Hi+.j&|Uc)GwLNE9]KbEg~/O 8HI');

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
