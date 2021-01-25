<?php

	class Livro{
		public function cadastrar_livro($titulo,$autor,$genero,$preco,$resenha){
			$pdo = new PDO('mysql:host=localhost;dbname=livraria','root','');
			$sql = $pdo->prepare("INSERT INTO `livro` VALUES(NULL,?,?,?,?,?)");
			$sql->execute(array($titulo,$autor,$genero,$preco,$resenha));
		}
	}
?>