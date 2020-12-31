<?php

$db = new PDO('mysql:host=chalets-mariadb:3306;dbname=chalets;charset=utf8', 'root',  'root');

$sql = file_get_contents(__DIR__ . "/system/database/dump.sql");
$db->exec($sql);

echo "OK ! \n";