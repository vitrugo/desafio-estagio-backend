<?php

	$url = 'http://localhost/desafio-estagio-backend/api';

	$classe = 'Correio';
	$metodo = 'mostrar';

	$montar = $url.'/'.$classe.'/'.$metodo;

	$retorno = file_get_contents($montar);

	var_dump(json_decode($retorno, 1));
	?>