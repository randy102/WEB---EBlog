<?php
$url = parse_url(getenv("CLEARDB_DATABASE_URL"));

define("DB_HOST",$url["host"]);

define("DB_USER_NAME",$url["user"]);

define("DB_PASSWORD",$url["pass"]);

define("DB_NAME",substr($url["path"], 1));
?>