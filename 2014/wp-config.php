<?php
/**
 * A configuração de base do WordPress
 *
 * Este ficheiro define os seguintes parâmetros: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, e ABSPATH. Pode obter mais informação
 * visitando {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} no Codex. As definições de MySQL são-lhe fornecidas pelo seu serviço de alojamento.
 *
 * Este ficheiro é usado para criar o script  wp-config.php, durante
 * a instalação, mas não tem que usar essa funcionalidade se não quiser.
 * Salve este ficheiro como "wp-config.php" e preencha os valores.
 *
 * @package WordPress
 */

// ** Definições de MySQL - obtenha estes dados do seu serviço de alojamento** //
/** O nome da base de dados do WordPress */
define('DB_NAME', 'noop_medicina');

/** O nome do utilizador de MySQL */
define('DB_USER', 'noop_medicina');

/** A password do utilizador de MySQL  */
define('DB_PASSWORD', 'xOa8bLMU32');

/** O nome do serviddor de  MySQL  */
define('DB_HOST', 'localhost');

/** O "Database Charset" a usar na criação das tabelas. */
define('DB_CHARSET', 'utf8');

/** O "Database Collate type". Se tem dúvidas não mude. */
define('DB_COLLATE', '');

/**#@+
 * Chaves Únicas de Autenticação.
 *
 * Mude para frases únicas e diferentes!
 * Pode gerar frases automáticamente em {@link https://api.wordpress.org/secret-key/1.1/salt/ Serviço de chaves secretas de WordPress.org}
 * Pode mudar estes valores em qualquer altura para invalidar todos os cookies existentes o que terá como resultado obrigar todos os utilizadores a voltarem a fazer login
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'a-uSku%FXrw1Z>aE]Lw>Lv~QP+{hn+#H=:2s @M|@z/@= l<*}W$tj;],%M,c-*r');
define('SECURE_AUTH_KEY',  '!*d@[ ^cebl5tP2u(YqzF(2A5N`K]Jr2O[)fp`FOunV+>Dx/LI5]8<-k5)+4AFBY');
define('LOGGED_IN_KEY',    'UazCu}+q++h`A?-&<hyYT&8|y5Jqw|=2lE%AMp_]*6&6]~25HU4&-n$ f!?k]nkz');
define('NONCE_KEY',        ']W-qUsDS$5y*a-NcX:@LGw2:@W;cAR^Fpps[0IO{Wv~iX] 5;*+vmO)`CCQ^b&XT');
define('AUTH_SALT',        ':Tkb3Iygx-_ebH8Z)~u3|*tip:jmp|S.NMzJCO.a4uGqb?bl?{vJ^uD{G$+%S#<r');
define('SECURE_AUTH_SALT', '.Jlb ]IB!dFg},KuPI|2N4TUvd?u6|Mb^> (2Ba&}BTw^Q+Cem^sm)9.kPoJ<y`i');
define('LOGGED_IN_SALT',   ':Ve|A(H!NGW&8]G|*RCioP2`1/^)tuh*.>0<Rj;!I]zbqY5q>7@p7Pyl2tYCq+&5');
define('NONCE_SALT',       '1@hEl-{L!=(|r[Rcz_qRF,zRQ.2p8m5GXp[:v&E~`3m2?Kme@i`G}mb9g-IoM23s');

/**#@-*/

/**
 * Prefixo das tabelas de WordPress.
 *
 * Pode suportar múltiplas instalações numa só base de dados, ao dar a cada
 * instalação um prefixo único. Só algarismos, letras e underscores, por favor!
 */
$table_prefix  = 'wp_';

/**
 * Para developers: WordPress em modo debugging.
 *
 * Mude isto para true para mostrar avisos enquanto estiver a testar.
 * É vivamente recomendado aos autores de temas e plugins usarem WP_DEBUG
 * no seu ambiente de desenvolvimento.
 */
define('WP_DEBUG', false);

/* E é tudo. Pare de editar! */

/** Caminho absoluto para a pasta do WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Define as variáveis do WordPress e ficheiros a incluir. */
require_once(ABSPATH . 'wp-settings.php');
