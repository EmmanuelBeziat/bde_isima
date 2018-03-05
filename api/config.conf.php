<?php
$bdd = yaml_parse_file('./api/config.bdd.yaml');

define('DB_NAME', isset($bdd['db_name']) ? $bdd['db_name'] : 'isima_bde');
define('DB_USER', isset($bdd['db_user']) ? $bdd['db_user'] : 'root');
define('DB_PASS', isset($bdd['db_pass']) ? $bdd['db_pass'] : 'root');
define('DB_HOST', isset($bdd['db_host']) ? $bdd['db_host'] : 'localhost');
define('DB_TYPE', isset($bdd['db_type']) ? $bdd['db_type'] : 'mysql');
