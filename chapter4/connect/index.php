<?php
try
{
  $pdo = new PDO('mysql:host=localhost;dbname=ijbd', 'root', 'admin');
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $pdo->exec('SET NAMES "utf8"');
}
catch (PDOException $e)
{
  $output = 'Unable to connect to the database server.';
  include 'output.html.php';
  exit();
}

try 
	{
	$sql = 'CREATE TABLE joke(
		id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
		joketext TEXT,
		jokeаdate DATE NOT NULL
		) DEFAULT CHARACTER SET utf8 ENGINE=InnoDB';
	$pdo->exec($sql);
	}
catch (PDOException $e)
	{
		$output = 'Ощибка при создании таблицы joke: ' . $e->getMessage();
		include 'output.html.php';
		exit();
	}
	
$output = 'Database connection established.';
include 'output.html.php';
