<?php

if ($_SERVER['SERVER_NAME'] == 'localhost') {
    define('ROOT', "http://localhost/projects/PHP-MVC/public");

    //database configuration
    define('DBNAME', 'my_db');
    define('DBHOST', 'localhost');
    define('DBUSER', 'root');
    define('DBPASS', '');
    define('DBDRIVER', '');

} else{
    define('ROOT', "https://www.yourwebsite.com");

    //site database configuration
    define('DBNAME', 'my_db');
    define('DBHOST', 'localhost');
    define('DBUSER', 'root');
    define('DBPASS', '');
    define('DBDRIVER', '');
}