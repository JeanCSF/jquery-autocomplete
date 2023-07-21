<?php
define('HOST', 'localhost');
define('USER', 'root');
define('PASS', '');
define('DBNAME', 'cihesel');

$conn = new PDO("mysql:host=" . HOST . ";dbname=" . DBNAME . ";", USER, PASS);