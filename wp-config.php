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
define( 'DB_NAME', 'quiz' );

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
define( 'AUTH_KEY',         'UQWr>;.I K8[j)]ie9|Cu~F]|mn+-ZJHRE!R&~Wkl=E3OQ^]P4<CB6%sC1hvVL:j' );
define( 'SECURE_AUTH_KEY',  'yAyI1@+k$$(qD5o[}]R<{6|[cpT$BKItz-4w2 VE/hfoni1]O#IS-^$4q]aH+TA_' );
define( 'LOGGED_IN_KEY',    'eO_KT+#cMuZ|,LhwgMG^4ddTGu306FX*nQ:6/~c:s8NK30D-(Qv]<)EpiC39suqL' );
define( 'NONCE_KEY',        'K;[S]h),nPLIyw$M4vm+_5Us[tVk^8co!E{_~F@TZ U;PYUVG2M4o<-&;d2@07,T' );
define( 'AUTH_SALT',        'VB6SCgE4zt|y`r>RN,>roq>8_sF<PC#dh:/(B}{}Fr2 NDqJ2;N4,LD3J5/BP$J)' );
define( 'SECURE_AUTH_SALT', '0U56jZmNTc,!|~Q&~.CBM0MD0JkFOUMZ6O+;WkEK^E0:(2(ZjugDk!kuX12SuhAK' );
define( 'LOGGED_IN_SALT',   'i/QpxkCXtfe {xHAGz)f]1!iP)<C@4,]YUS2@=CUpHkQoc:E5o~Q^6=>WhF=(>t3' );
define( 'NONCE_SALT',       'Dv:uf`KjS MY?_BcLEl*`e&G4*bK1*1|<&bR@.WR<~U[K9p4yt|bCkV/g>Jt`773' );

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
