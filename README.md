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

## Creating a Controller

The controllers must be inserted in the "App/Controllers" folder with the following name format:

* Example-Controller.php

Always keep the first letter of each word in capital letters!

```php
<?php
class ExemploController extends MainController
{
	/* Aqui vem nossas ações */
}
```


Just creating our class will not make the application work, we have to have at least one action (method):

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

## Creating a Model

The templates are inside the "App/Models" folder.

Just by name naming, I'll create my templates in the following format:

* Model-Model.php

Always with the same name as your controller.

E Keeping the first letter of each word in capital letters!

For our example, my model has the following note:

* Example-Model.php

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

## Creating a View

Now that we have a controller and a model, we need a view to display the data.

The views are in the "App/Views" folder. Usually separated into their own folders.

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