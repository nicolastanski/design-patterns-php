<?php

require_once('../autoloader.php');

use Singleton\LogsSingleton;

$instancia = LogsSingleton::obterInstancia();

$novaInstancia = LogsSingleton::obterInstancia();

if ($instancia === $novaInstancia) {
    echo 'As instâncias são exatamente as mesmas!';
}

// Fatal Error - Call private constructor
//$instanciaLogs = new LogsSingleton();