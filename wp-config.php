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
define( 'DB_NAME', 'grill' );

/** MySQL database username */
define( 'DB_USER', 'grill' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Martusia2328' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'kb:5v(I@kas/a+@zkj-Z94H[e|14NODzJiEJ);6%=9RWzh6O>MA1Ki}R]r-.md|6');
define('SECURE_AUTH_KEY',  '>GAiJ LfZ9d=5|7K%f+?qd.iPYq5Cd^#TV4bwmmIfC+s+Eue]Oz-~Etu SS2+Mb2');
define('LOGGED_IN_KEY',    'nn/A~@`bfqR4*.Y@V7di6~<95v9{^rL{6ok --%O{5Qp*/4tj-{%ci6=U_S|U-7|');
define('NONCE_KEY',        'm-n+8]D[CF-=?TT-X)EOo.T7at{FzOD0kr2TbDbXne5C[CDqG9):iUkM*G+Pp^%7');
define('AUTH_SALT',        '9l9ibjGTm+}Y7/<)XtyI-55:g1VD{u{3yg3NSTE-,dY]p%I69|Oot?h%jf?Bpj<}');
define('SECURE_AUTH_SALT', '-?|OPO6l|85rO/>[KgVK)njHo-/RZ~o5+H3^uF7uP|~Bj|n(,8:#Q!Y/XFjC0.c<');
define('LOGGED_IN_SALT',   'lgsU]tLsdLZq+*C?O2k3P(Q+R:Cii}:Ou 4&-fXE`&dp,n75(-P^/1bv928Vm(%?');
define('NONCE_SALT',       'OsrFYXd+Z(i,0oD]c#8Ij(DOTX71_wM+UGn;1lM-,i3L|@2 X+JJ`Q8hU_fR|zL0');

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );