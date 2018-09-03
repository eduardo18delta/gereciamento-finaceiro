<?php

require_once 'config.php';

class Conexao
{
	public static function conectarBanco()
	{
		$conexao = new PDO(DB_DRIVE . ':host='.DB_HOSTNAME.';dbname='.DB_DATABASE, DB_USERNAME, DB_PASSWORD);
		$conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		return $conexao;
	}
}