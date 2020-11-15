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

define( 'DB_NAME', "wp_cricket" );


/** MySQL database username */

define( 'DB_USER', "root" );


/** MySQL database password */

define( 'DB_PASSWORD', "" );


/** MySQL hostname */

define( 'DB_HOST', "localhost" );


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

define( 'AUTH_KEY',         'MU^G^Xnv TN=M2hPSg22oS4Y/]0N!zlOrVx3w8>F#.p,pDw3`{;HZtS~~p%MrA:K' );

define( 'SECURE_AUTH_KEY',  'VsY=-pR[P2J7}kYOiJr_sAsz%)4wJ)2BnK-HO,Bs-u3XyLXT;SnEL1vMTo%VT601' );

define( 'LOGGED_IN_KEY',    'ed.!c0#[tcqE:i4hM/viWKN{:tL&63B~H0qTa=*.QNSmlW&t|pM8Q&Z[2X.Gm7<]' );

define( 'NONCE_KEY',        'vKZi#H2[c8FUdNnTI2-Zcv{;Y=F;Mg#O7-%rsp:;,o~iG0qIhO]-dP);N[(euHJr' );

define( 'AUTH_SALT',        '0q/)zvH4 i4Z$^.?mM-@nxOmG|ZZ]C`rQQ3vAfWK @TC(G,}2Wm/~5iUaqD^Y=9H' );

define( 'SECURE_AUTH_SALT', 'z60-I]:Y(p:tpgBI- }HMLK|Nw-w>}=5//5?]ipkULQ_LCm?#yiQ= 345)y8cO88' );

define( 'LOGGED_IN_SALT',   ']K!-!zU4j)<82X6*pQnBa 3RW7KDG{$PNrb3.5?A`w3^DztRx^H^(lhm->!i,Ql/' );

define( 'NONCE_SALT',       ';&mW=|kCfxIN)zU?2?jJx]2@>Uy~:;rfCzhz#k<mG:t1*dd=+$rH>BKA*}FbcbxW' );


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

