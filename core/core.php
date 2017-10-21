<?php
// el nucleo de la aplicación

#constante Conexon

define('DB_HOST','localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'proyecto01');

define('HTML_DIR','html/');
define('APP_TITTLE','Mi aplicación');
define('APP_COPY','Derechos de Autor &copy ' . date('Y', time()) . ' Sistems.');
define('APP_URL', 'http://localhost/proyecto01/');

require('vendor/autoload.php');
require ('core/models/class.conexion.php');
require ('core/bin/functions/Encrypt.php');
?>

