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
// Objeto
$modelo->db = new TutsupDB();
 
// Insere
$modelo->db->insert(
 'tabela', 
 
 // Insere uma linha
 array('campo_tabela' => 'valor', 'outro_campo'  => 'outro_valor'),
 
 // Insere outra linha
 array('campo_tabela' => 'valor', 'outro_campo'  => 'outro_valor'),
 
 // Insere outra linha
 array('campo_tabela' => 'valor', 'outro_campo'  => 'outro_valor')
);
 
// Atualiza
$modelo->db->update(
 'tabela', 'campo_where', 'valor_where',
 
 // Atualiza a linha
 array('campo_tabela' => 'valor', 'outro_campo'  => 'outro_valor')
);
 
// Apaga
$modelo->db->delete(
 'tabela', 'campo_where', 'valor_where'
);
 
// Seleciona
$modelo->db->query(
 'SELECT * FROM tabela WHERE campo = ? AND outro_campo = ?',
 array( 'valor', 'valor' )
);
```