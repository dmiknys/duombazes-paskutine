<?php
require_once "vendor/autoload.php";

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

$isDevMode = true;
$config = Setup::createAnnotationMetadataConfiguration(array(__DIR__."/src"), $isDevMode);

// the connection configuration
$dbParams = array(
    'driver'   => 'pdo_mysql',
    'user'     => 'root',
    'password' => '',
    'dbname'   => 'studijos'
);


$em = EntityManager::create($dbParams, $config);

$loader = new Twig_Loader_Filesystem(__DIR__.'/templates/');   //Čia PATH nurodo absoliutų kelią iki šablonų
$twig = new Twig_Environment($loader, array(
    'cache' => __DIR__.'/cache',
    'debug' => true
));
