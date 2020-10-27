<?php 
declare(strict_types = 1);
if(!isset($_GET['example']) || empty($_GET['example'])) die('Passar o exemplo');

$root = dirname(__DIR__);
require_once($root . '/vendor/autoload.php');

define('__DEBUG', (isset($_GET['debug']) && $_GET['debug'] == 1));
function Debug($variavel)
	{
		echo "<pre>";
		print_r($variavel);
		echo "</pre>";
	}

if($_GET['example'] === strtolower('dip')) echo App\DIP\Program::Main();
if($_GET['example'] === strtolower('lsp')) echo App\LSP\Program::Main();