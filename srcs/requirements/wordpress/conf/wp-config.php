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
define( 'DB_NAME', 'DATABASE_NAME' );

/** MySQL database username */
define( 'DB_USER', 'DATABASE_USER' );

/** MySQL database password */
define( 'DB_PASSWORD', 'DATABASE_PASS' );

/** MySQL hostname */
define( 'DB_HOST', 'DATABASE_HOST' );

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
define('AUTH_KEY',         'Jc`#-6HG>of@^R+=`=pOU4&koC_+]zeo?wzM.jd1FZ!u;:J^qD|#fb_>/>uZfTZ=');
define('SECURE_AUTH_KEY',  ',[IK?PK8F+7MzF =%&;o4Iid+`I`oPQYfpf:kpxUVkt276Fuc+>GGfj+^qY9N-6J');
define('LOGGED_IN_KEY',    'Re,9Ci*FyI@YA2/!^PM%}im= ]1La#^?Ci+pIwVdAsPr#dfv(4+?B1<4)Ckh0(bQ');
define('NONCE_KEY',        ']G*<8&|r}=Bb$x6@^At]&A?}aD>zAv%>5#*BS`4wkbJS**}t@%YKtpHB3<Cun@b1');
define('AUTH_SALT',        'E(g8/cx!RCWCA`2{9!w&sa|cezfl;0.VQZnC^}R!!n]@$%R,Z;:Xvzgt (Ir#}mz');
define('SECURE_AUTH_SALT', '(+Uaqg|,u&b-,jMs,ptx-nax:-t;$L?38mB~~oLJy0q`TAB-t3jZ-8[`st%p6d+,');
define('LOGGED_IN_SALT',   '[6]AuGX6,!=DIxuVO+i1K>=>WuB~ZS&S6MVP!FaGmot-1|1Hu%RV*sJ&ZwBPlrp&');
define('NONCE_SALT',       '0_/9&+qSJeSWiUEZooxkEElGh1R7M!ZA#44?;x[<+aLo,U08uG+^#Z[nJ(>vGBF4');

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