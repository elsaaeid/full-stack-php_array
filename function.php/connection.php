<?php
$dsn = "mysql:host=localhost;dbname:itnex";
$username = 'root';
$password = '';
$option = array(

    'MYSQL:ATTR_INT_COMMAND' => 'SET NAMES utf8';
);

try{
    $coon = new PDO($dsn,$username,$password,$option);
    $coon->setAttribute(PDO::ERRMODE_EXCEPTION,EXCEPTION_MODE);
}

catch(setAttribute $e){

    echo 'Faild Connection';
}
?>