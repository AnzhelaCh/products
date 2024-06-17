<?php
$db_config = [
  'host' => 'localhost',
  'user' => 'root',
  'password' => '',
  'db_name' => 'spefix'
];

$db_options = [
  PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
];

$dsn = "mysql:dbname={$db_config['db_name']};host={$db_config['host']};charset=utf8";

$db = new PDO($dsn, $db_config['user'], $db_config['password'], $db_options);
