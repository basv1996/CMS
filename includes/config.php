<?php 

//This file contains configuration settings, like database settings
//For security reasons, this file should be placed in webroot

// Define project status
define('PROJECT_STATUS','development');

// Language settings (Dutch)
setlocale(LC_ALL, 'nl_NL');

// Database settings
define('DB_HOST','localhost');
define('DB_NAME','schoolcheck');
define('DB_USERNAME','root');
define('DB_PASSWORD','');

/*
//database online
define('DB_HOST','localhost');
define('DB_NAME','21248_MyBand');
define('DB_USERNAME','21248_MyBand');
define('DB_PASSWORD','gqjkdyha');
*/

define('NR_ITEMS_PER_PAGE',2)
?>
