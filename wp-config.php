<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'COMP5112');

/** MySQL database username */
define('DB_USER', 'comp5112');

/** MySQL database password */
define('DB_PASSWORD', 'comp5112');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         ',kKy0mwz8xW6f,v}yg7LPBfn^%q|vgE8[$~!py]I OgbDFxB7*+nOvP>qcPc*z5}');
define('SECURE_AUTH_KEY',  ',{aQ)97LG !zg974rA&.V4{i~pZS5|>mKd]71*C<edr4zBt+j)4_(ZcZp(8zOp,R');
define('LOGGED_IN_KEY',    'A]c<cT|Gt<CYhd]]yW:5vF{tnT>Gd6O}8$(p!oNYh[RIQ6 3si)|@G/e;7=lr[nG');
define('NONCE_KEY',        'e%k>2qp9xSUG+p${~tqd~LT8}*gK83m049_j65!Wc(<..x3)dxZrL~wkYzdyh:XK');
define('AUTH_SALT',        'W<X2/,3:,W|@*L#-t/E67P/Pg4.Ib&)D|2jq|;4!0v^<rfOhNOi6?>=S4[ie=Kij');
define('SECURE_AUTH_SALT', '<dFT]IMOzNj~|K0EWB!B^wMv/E~[_.$xEg++|/b%9-V.g4]xQ`zCP*b.m`?[6} )');
define('LOGGED_IN_SALT',   'wF17P:o](dwMk1KfT= A.T)1CqGtz<$~D,S--v$QFBWHIp.YH?>h7la7pt8Fz]?F');
define('NONCE_SALT',       ';!8e!%/#L0-2wetl&)FWd$XMoX!:yh>Z@8J=r/X*z-+*?<6Qaie`cFs1`dx,y+TH');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
