<?php

$mysql_db = array(
	'host' => 'localhost',
	'username' => 'root',
	'password' => '',
	'db_name' => 'dal_test',
);

$mssql_db = array(
	'host' => 'localhost',
	'username' => 'sa',
	'password' => 'password',
	'db_name' => 'test',
);

return [
	'mysql' => $mysql_db,
	'mssql' => $mssql_db,
];
