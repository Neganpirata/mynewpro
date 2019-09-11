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
define( 'DB_NAME', 'testpro_db' );

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
define( 'AUTH_KEY',         '.<q`YpJiaOm.?#;iUU1pa.N$5>i,r-uH8IH%/lN8Ve%K+%Z;6`%eWGaY0r>UA,,E' );
define( 'SECURE_AUTH_KEY',  'Q^>)D~6nn: j#)vWvqi4)Wi7.z76C<ulPe>:;FSu]0X!:Z,)(nHD$&t^y[t`a[Uq' );
define( 'LOGGED_IN_KEY',    '3OudXhXC]pbe3CPf;W$2su8vhTKo0Ib2{=< NAqYXW`QDvELDtsi >;w}f@Ui0AI' );
define( 'NONCE_KEY',        'kSR[gpaC}eT76TmtQ;FnK[Prskyrto6clP{s|N,O.AX,kzr=q&5y45&`Z;m{s: x' );
define( 'AUTH_SALT',        'E/+;S`9h}Ad3&sLNNmEc.8tQ(1f=}{Y!?i2~.Z|!^w3Ka+9x;nZhXstpI}g& qii' );
define( 'SECURE_AUTH_SALT', '1XH?xn/.L-_3[5B?XtYw$0F)TPN78FCi;GCMdvAB`?CQUWOcB:>Gqf`#an?<KgOK' );
define( 'LOGGED_IN_SALT',   ';+zeUSAvV3h6@2$i?v2IT0*7FEhbOJz5AyIZ&-)R{08zv67:ozrQWtf0 >jRX4xN' );
define( 'NONCE_SALT',       'kj`6S>c)%JZ~YyP__1S/d(D]{a3]VKV8qcQ+@Xi=LiFL`]hhP+PKdqf<po|MRn$B' );

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
