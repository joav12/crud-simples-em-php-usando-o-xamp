<?php

$servername = 'localhost';
$database = 'dbclients';
$username = 'root';
$password = '';

$conexao = mysqli_connect( $servername, $username, $password, $database );

if ($conexao -> connect_errno || mysqli_connect_errno()) {
	echo "Failed to connect to MySQL: " . $conexao -> connect_error;
	exit();
  }
  else{
	$sql = 'SELECT * from cliente';

	$dados = $conexao -> query($sql);
  }