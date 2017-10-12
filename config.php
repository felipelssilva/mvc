<?php

/**
 * Configuração geral
 */

/* Caminho para a raiz */
define( 'ABSPATH', dirname( __FILE__ ) );

/* Caminho para a pasta de uploads */
define( 'UP_ABSPATH', ABSPATH . '/Includes/_uploads' );

/* URL da home */
define( 'HOME_URI', 'http://localhost/projeto/mvc' );

/* Nome do host da base de dados */
define( 'HOSTNAME', 'localhost' );

/* Nome do DB */
define( 'DB_NAME', 'dbname' );

/* Usuário do DB */
define( 'DB_USER', 'dbuser' );

/* Senha do DB */
define( 'DB_PASSWORD', 'dbpasswd' );

/* Charset da conexão PDO */
define( 'DB_CHARSET', 'utf8' );

/* Se você estiver desenvolvendo, modifique o valor para true */
define( 'DEBUG', true );

/**
 * Não edite daqui em diante
 */

/* Carrega o loader, que vai carregar a aplicação inteira */
require_once ABSPATH . '/loader.php';