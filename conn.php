<?php
/*
 * 数据库连接
 * */
include_once 'lib/ez_sql_2.10/shared/ez_sql_core.php';
include_once 'lib/ez_sql_2.10/mysql/ez_sql_mysql.php';

$db = new ezSQL_mysql('root','hudongsoft','fuwu800','localhost');

?>