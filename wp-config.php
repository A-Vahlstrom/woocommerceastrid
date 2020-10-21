<?php
/**
 * Baskonfiguration för WordPress.
 *
 * Denna fil används av wp-config.php-genereringsskript under installationen.
 * Du behöver inte använda webbplatsens installationsrutin, utan kan kopiera
 * denna fil direkt till "wp-config.php" och fylla i alla värden.
 *
 * Denna fil innehåller följande konfigurationer:
 *
 * * Inställningar för MySQL
 * * Säkerhetsnycklar
 * * Tabellprefix för databas
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL-inställningar - MySQL-uppgifter får du från ditt webbhotell ** //
/** Namnet på databasen du vill använda för WordPress */
define( 'DB_NAME', 'astridwptest' );

/** MySQL-databasens användarnamn */
define( 'DB_USER', 'astridwp' );

/** MySQL-databasens lösenord */
define( 'DB_PASSWORD', 'Doki2565' );

/** MySQL-server */
define( 'DB_HOST', '127.0.0.1' );

/** Teckenkodning för tabellerna i databasen. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Kollationeringstyp för databasen. Ändra inte om du är osäker. */
define('DB_COLLATE', '');

/**#@+
 * Unika autentiseringsnycklar och salter.
 *
 * Ändra dessa till unika fraser!
 * Du kan generera nycklar med {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Du kan när som helst ändra dessa nycklar för att göra aktiva cookies obrukbara, vilket tvingar alla användare att logga in på nytt.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '!JornUz8sG5YD^B(M3pp/Eggn&@^c3bPVUBDbj]8?79$CQ&;)N!;--ANw~p:.B|A' );
define( 'SECURE_AUTH_KEY',  '(=oa@?rF Zya]|;v=D99)a`%]PStjEOHW0y=.1vw/88Ua]Nuf>x.B3O&cSy0$%l.' );
define( 'LOGGED_IN_KEY',    '. vF(B/YqlSUO.&%Hh&a@Lv{Nj]V;GL];%CIqc0g3}s/C0YWl3cDQR%g!rbS1ZNR' );
define( 'NONCE_KEY',        '05.>jjGU)f6V$_|ttEx>dLhz~$NP@.X6yG-Go0Au]bHPz[S!B6C_?[4P(7#K=&#%' );
define( 'AUTH_SALT',        'PttMHiN}M ;/ ,_WOQ71pHNQoOHTkI4a^L;%(VUr!K!;X`kgUrKdtF/y)<uD+`5N' );
define( 'SECURE_AUTH_SALT', '5|cYdU3C731WlURjY2`2-WNLbI=Ur~uF29HyxCA5*#n^z8lVJqakLd^!pHWnW*L!' );
define( 'LOGGED_IN_SALT',   'exMhs=dKY`|^Z}(YcwlBU*{lc{8DRib--K/>.9fu8B5uAn[(B9RS&v^A~HzGe7V+' );
define( 'NONCE_SALT',       '1 EwUU2@[[soE}_K+b9A^W+9!U]VCSQ2<Q{hOF#F{Z50ypJmb:iBR#oc&Lv=Anzd' );

/**#@-*/

/**
 * Tabellprefix för WordPress-databasen.
 *
 * Du kan ha flera installationer i samma databas om du ger varje installation ett unikt
 * prefix. Använd endast siffror, bokstäver och understreck!
 */
$table_prefix = 'wp_';

/** 
 * För utvecklare: WordPress felsökningsläge. 
 * 
 * Ändra detta till true för att aktivera meddelanden under utveckling. 
 * Det rekommenderas att man som tilläggsskapare och temaskapare använder WP_DEBUG 
 * i sin utvecklingsmiljö. 
 *
 * För information om andra konstanter som kan användas för felsökning, 
 * se dokumentationen. 
 * 
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */ 
define('WP_DEBUG', false);

/* Det var allt, sluta redigera här och börja publicera! */

/** Absolut sökväg till WordPress-katalogen. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Anger WordPress-värden och inkluderade filer. */
require_once(ABSPATH . 'wp-settings.php');