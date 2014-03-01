<?php
# phpinfo();
var_dump( extension_loaded('pdo_mysql') ); 
var_dump( PDO::getAvailableDrivers());

var_dump(new PDO(
    'sqlite:/home/mdupont/experiments/newspaper/app/webroot/newspaper.sqlite',
    null,
    null, 
    array(
        PDO::ATTR_PERSISTENT => false,
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    )));



