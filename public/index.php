<?php
use Carbon\Carbon;

require __DIR__ . '/../vendor/autoload.php';

//$dotenv = Dotenv\Dotenv::create(__DIR__ . '/../');
//$dotenv->load();


//$db = getenv('DB');
//$host = getenv('DB_HOST');
//$username = getenv('DB_USER');
//$pass = getenv('DB_PASSWORD');

$db =  'test';
$host = 'localhost';
$username = 'root';
$pass = 'root';

$db = new PDO("mysql:host={$host};dbname={$db}", $username, $pass);

require __DIR__. '/../App/routes.php';

//die(getenv('DB_HOST'));
