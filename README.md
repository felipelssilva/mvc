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
class ExampleController extends MainController
{
	/* Here comes our actions */
}
```


Just creating our class will not make the application work, we have to have at least one action (method):

```php
<?php
class ExampleController extends MainController
{
	/* URL: dominio.com/example/ */
	public function index() {

		/* Load the model */
		$modelo = $this->load_model('Example/Example-Model');

		/* Load the view */
		require_once ABSPATH . 'App/Views/Example/Example-View.php';
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
class ExampleModel extends MainModel
{
/**
* Constructor for this class
*
* Configures the DB, controller, parameters and user data.
*
* @since 0.1
* @access public
* @param object $db Object of our PDO connection
* @param object $controller Controller Object
*/
public function __construct( $db = false, $controller = null ) {
	/* Configure the DB (PDO) */
	$this->db = $db;

	/* Set the controller */
	$this->controller = $controller;

	/* Configure the parameters */
	$this->parametros = $this->controller->parametros;

	/* Configures user data */
	$this->userdata = $this->controller->userdata;

	echo 'Model load... <br>';
}

/* Create your own methods from now on */
}
```

## Creating a View

Now that we have a controller and a model, we need a view to display the data.

The views are in the "App/Views" folder. Usually separated into their own folders.

```php
<?php
echo '<h2>Model data.</h2>';
echo '<pre>';
print_r( $modelo );
echo '</pre>';
?>

<h2>Ready</h2>

<p>Include your site or data in this view...</p>
```


> ### Restricting direct access to files
> It is important that you keep in mind that more knowledgeable users about PHP and HTML can understand how the system works and try to execute files directly. To restrict direct access to any content in your MVC system, add the following line in the header of your code:
>
> Restrict direct access to files
> ```php <?php if ( ! defined('ABSPATH')) exit; ?> ```



