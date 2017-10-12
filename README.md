# mvc
test project, creating my own MVC

## This is a examples for querys

```php
<?php
/* Objeto */
$db = new TutsupDB();

/* Insere */
$db->insert(
	'tabela', 

	/* Insere uma linha */
	array('campo_tabela' => 'valor', 'outro_campo'  => 'outro_valor'),

	/* Insere outra linha */
	array('campo_tabela' => 'valor', 'outro_campo'  => 'outro_valor'),

	/* Insere outra linha */
	array('campo_tabela' => 'valor', 'outro_campo'  => 'outro_valor')
);

/* Atualiza */
$db->update(
	'tabela', 'campo_where', 'valor_where',

	/* Atualiza a linha */
	array('campo_tabela' => 'valor', 'outro_campo'  => 'outro_valor')
);

/* Apaga */
$db->delete(
	'tabela', 'campo_where', 'valor_where'
);

/* Seleciona */
$db->query(
	'SELECT * FROM tabela WHERE campo = ? AND outro_campo = ?',
	array( 'valor', 'valor' )
);
```

## This is a examples for querys inside the models

```php
<?php
/* Objeto */
$modelo->db = new TutsupDB();

/* Insere */
$modelo->db->insert(
	'tabela', 

	/* Insere uma linha */
	array('campo_tabela' => 'valor', 'outro_campo'  => 'outro_valor'),

	/* Insere outra linha */
	array('campo_tabela' => 'valor', 'outro_campo'  => 'outro_valor'),

	/* Insere outra linha */
	array('campo_tabela' => 'valor', 'outro_campo'  => 'outro_valor')
);

/* Atualiza */
$modelo->db->update(
	'tabela', 'campo_where', 'valor_where',

	/* Atualiza a linha */
	array('campo_tabela' => 'valor', 'outro_campo'  => 'outro_valor')
);

/* Apaga */
$modelo->db->delete(
	'tabela', 'campo_where', 'valor_where'
);

/* Seleciona */
$modelo->db->query(
	'SELECT * FROM tabela WHERE campo = ? AND outro_campo = ?',
	array( 'valor', 'valor' )
);
```

## Criando um Controller

Os controllers devem ser inseridos na pasta “App/Controllers” com o seguinte formato de nome:

* Exemplo-Controller.php

Mantendo sempre a primeira letra de cada palavra em maiúsculo!


```php
<?php
class ExemploController extends MainController
{
	/* Aqui vem nossas ações */
}
```


Apenas criando a nossa classe não fará a aplicação funcionar, temos que ter pelo menos uma ação (método):

```php
<?php
class ExemploController extends MainController
{
	/* URL: dominio.com/exemplo/ */
	public function index() {

		/* Carrega o modelo */
		$modelo = $this->load_model('Exemplo/Exemplo-Model');

		/* Carrega o view */
		require_once ABSPATH . 'App/Views/Exemplo/Exemplo-View.php';
	}
}
```

## Criando um Model

Os modelos ficam dentro da pasta “App/Models”.

Apenas por convenção de nomes, criaremos meus modelos com o seguinte formato:

* Modelo-Model.php

Sempre com o mesmo nome do seu controller.

E Mantendo a primeira letra de cada palavra em maiúsculo!

Para nosso exemplo, meu modelo ficou com o seguinte note:

* Exemplo-Model.php

```php
<?php
class ExemploModel extends MainModel
{
/**
* Construtor para essa classe
*
* Configura o DB, o controlador, os parâmetros e dados do usuário.
*
* @since 0.1
* @access public
* @param object $db Objeto da nossa conexão PDO
* @param object $controller Objeto do controlador
*/
public function __construct( $db = false, $controller = null ) {
	/* Configura o DB (PDO) */
	$this->db = $db;

	/* Configura o controlador */
	$this->controller = $controller;

	/* Configura os parâmetros */
	$this->parametros = $this->controller->parametros;

	/* Configura os dados do usuário */
	$this->userdata = $this->controller->userdata;

	echo 'Modelo carregado... <br>';
}

/* Crie seus próprios métodos daqui em diante */
}
```

## Criando um View

Agora que já temos um controlador e um modelo, precisamos de um view para exibir os dados.

Os views ficam na pasta “App/Views. Normalmente separados em suas próprias pastas.

```php
<?php
echo '<h2>Dados do modelo.</h2>';
echo '<pre>';
print_r( $modelo );
echo '</pre>';
?>

<h2>Pronto</h2>

<p>Inclua seu site ou dados neste view...</p>
```