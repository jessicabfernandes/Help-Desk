<?php

	session_start();

	//remover indices do array de sessão um a um
	//unset()


	//destruir variavel de sessão
	//session_destroy()

	session_destroy();
	header('Location: index.php');

?>