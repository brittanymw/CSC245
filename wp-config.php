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
define('DB_PASSWORD', 'mysql');

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
define('AUTH_KEY',         '=>Zl4tz*KF)a0drB8pQV/v7*GZSJrz7a9F>@. k.#viX]%oY)X2t~ji-c,/M7msp');
define('SECURE_AUTH_KEY',  '@~8YQJnd|<^/Y*I=GUBI}. ]|7%rj+-S7Pg[(L~!0=?Hgd&f?Ul5n.trUzPk[a[=');
define('LOGGED_IN_KEY',    '(:za5 VaoO&~:D.Gbq)2OIfJtj!_%t+Rdowqb3:EJZ*jegx5ALpdW>hkCr.fH*o0');
define('NONCE_KEY',        ']y5U55ou(~,Hd-^R3tKn<s*eJ@_L }N48qP94#>=hKL$#Y*CT[EDn;m@.3[t7r+z');
define('AUTH_SALT',        'gjV/[U,d~--.<A(d^K*G}S44coO?O_;U$6KN#QxXQ1Vq7&a<B~xL[gkw78z6vO{/');
define('SECURE_AUTH_SALT', '_S6D[gWEu_kpa$!tSim]Z)*5!/ToZa61~UzI_3wf3]^d13EXS=J*eEqbYOX)t8c*');
define('LOGGED_IN_SALT',   'hK|mABKX*XW{rl!Mh`}&a`)gWN(T,Do*fhedvQBPyn`LZ7@]_`d`<kh$%h>%PmQ+');
define('NONCE_SALT',       'h(jT[QUCt-M[9 f0?JT1gzsAH!9>0}v(&s.:z`iqV}w1Fb -eQay/qH?MM$+[L}_');

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
