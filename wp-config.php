<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'dbhello' );

/** Database username */
define( 'DB_USER', '@nuru' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '&,zSwx)A4[C])t*>[L)&IMSC?s@xu_-:|F7R34I>N3WEs!Rg$ 7}9=&fMzqbW2!!' );
define( 'SECURE_AUTH_KEY',  '05jN3~|Ke1`R><1U0`pXF+^^8}dV/8K-4Z7e[@HDO]6_kZ1gt{*4+KGRdjzBe/Nm' );
define( 'LOGGED_IN_KEY',    '29@*ii;LdqYMT.kiVM1m>RaU4E0inpsNCRL.RTU4Wz6eh7#99(x[wTxZ^+Ad@r)R' );
define( 'NONCE_KEY',        'l6CK//nsy{*+Ab#R*2:+]*fy.{6|MYAjo~I!/o=%FAbf8d*|5r9tn;l!4|5Qt`kp' );
define( 'AUTH_SALT',        '^_n3&6rdo3p=Tw~m!1Ib`;D[U#<:!? yW0i)5Z6nsf43it@ek9yg1<P*i&#(quXw' );
define( 'SECURE_AUTH_SALT', 'B`G=dB@_i^K,{k^$eqQJ<X ?a{+Kh%6sp}+J!2#6eW`nBf0ehR%w-AmcOIbP_430' );
define( 'LOGGED_IN_SALT',   '*O:v>V+=bNL6a``K<k G.ad_46c{$.OMaT>HpbKW7t`mo~rtVTb-+N#RfM+;vCw,' );
define( 'NONCE_SALT',       'f3^n]z4/^4;|b7(IbxWjX /%v,6%>p^46+$D{mU*=ka&j/l22P99fNFXIsNI{>5~' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_helllo';

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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
