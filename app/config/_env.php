<?php 

define('BASEPATH', realpath(__DIR__.'/../../'));

require_once __DIR__.'/../../vendor/autoload.php'; #aca cargamos el programa que conseguimos con composer

$dotEnv = Dotenv\Dotenv::createMutable(BASEPATH);

$dotEnv->load();#load enviromental variables