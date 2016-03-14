<?php

$mysql_db = array(
	'host' => 'mysql',
	'username' => 'dal_test_user',
	'password' => 'not_very_secure',
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
