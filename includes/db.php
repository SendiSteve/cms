<?php

$db['db_host'] = 'localhost';
$db['db_user'] = 'root';
$db['db_pass'] = '';
$db['db_name'] = 'cms';

// loop through the array db and convert it into a constant
foreach($db as $key => $value){
    define(strtoupper($key), $value);
}

// create a connection
$connection = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

if(!$connection){
    die("Connection failed!" . mysqli_error($connection));
}

?>