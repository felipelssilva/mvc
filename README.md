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

## Criando um controller

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
 $modelo = $this->load_model('exemplo/exemplo-model');
 
 /* Carrega o view */
 require_once ABSPATH . '/views/exemplo/exemplo-view.php';
 }
}
```