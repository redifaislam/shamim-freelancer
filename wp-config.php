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
define( 'DB_NAME', 'shamim freelancer_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'wt5?hFpAOf$;}6n!L.x.U#H9,BrS8w#i8wd G5d]xENA_vz+8oJX!4;6gs~zN]zC' );
define( 'SECURE_AUTH_KEY',  'I.,_6`l$iGBFnZU|U8Cb87Y3vTI@coB05j;llr$7gJ%U)ruPQ]`ncE#C@[:hRjgS' );
define( 'LOGGED_IN_KEY',    '[X~NX$L-YO7;lR1WfZP.j) !h(Ldk=axO_J,jA8WoFC}R_V_LDi44wHO`;#>$ f)' );
define( 'NONCE_KEY',        'PvUiE*esm=Iz&>PC%R<.7KBCLX?m}dNSZCsM3,FqSJE>oQt7&R> ainJEUCm|h!)' );
define( 'AUTH_SALT',        'PY8k 3bsi:;}b|`T:}(ox^4JwntiM/<=Gfu{j&wK]]_t! raa$3)^JW&DOD(5fNu' );
define( 'SECURE_AUTH_SALT', '8r/UzNK!l9=qZx+_g&8hB;Br(*jYrZa}$?v3)2::(t_8[/?H(=D)hLQd%V9P0h6y' );
define( 'LOGGED_IN_SALT',   'sT+=L/_?[3Bw5=#I7dZ/HI/PzG:k<n#:NSbO;#Y~@)wA,r$BWCQ|EiHwiG:mu68g' );
define( 'NONCE_SALT',       'aviMetFrwK!+jLoLHd<R->@wLYEgR.^~SpoqiK%VP3ixM-#0RK]ZQ:J^k23t6iGP' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
