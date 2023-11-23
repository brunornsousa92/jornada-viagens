<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do banco de dados
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do banco de dados - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'jornadaviagens' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define( 'DB_COLLATE', '' );

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         ';!6Y8%JJIE10?gUHn+Tsu0nI~L&&f*xrj%G{3d5$O3`exfSFKzqrv:mE#OJ7g:{`' );
define( 'SECURE_AUTH_KEY',  '(8qLQeX)bAVtz74suu(R6-bv1@*&T=s`0z`b3(,doL|MVI@h_ap$|r9->ca6dEa5' );
define( 'LOGGED_IN_KEY',    'r,kcS|9^E|R}6&}}h3J@gEQ_~i@-.LET7@=HY`mCGy^|9d~SI]/QGeQ]p/*?! UX' );
define( 'NONCE_KEY',        'B0$ngOHDQ!~7^jA&1P9V znJx1F5P4R_n{HbFVNfV`|QGbQ2_(eCq6Bp)gASB6rK' );
define( 'AUTH_SALT',        'Z!kfuzAU/B11exP=#f`u`e3]=OOFC1=lvHox$7&xNct*8tdW;T|8<w`0+I.C;k?G' );
define( 'SECURE_AUTH_SALT', 'R1U~6z*{E_iy24>5)!Kz-IqR#4qv5~fo9.~WjFg**zvbpac<A}W,c!eJBn!k8z<[' );
define( 'LOGGED_IN_SALT',   'r4l4_$o2*VbB8d?/t5Of,KU_R@OtFFk| d(r1Sa^JNNN( :1wmDv</[[g-V|x$ZK' );
define( 'NONCE_SALT',       'n,<+1.#16[|i/(Qe}RwZei./?fN}r0 NZ65N0>7B82LO?z1Rx4fy}Ex47l~puCoY' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'jvwp_';

/**
 * Para desenvolvedores: Modo de debug do WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Adicione valores personalizados entre esta linha até "Isto é tudo". */



/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
