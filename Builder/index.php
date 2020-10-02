<?php

require_once('../autoloader.php');

$montadorDeFoqueteTestI = new \Builder\FabricaFoguetesDirector(new Builder\FogueteModeloIBuilder());
$montadorDeFoqueteTestII = new \Builder\FabricaFoguetesDirector(new Builder\FogueteModeloIIBuilder());

$montadorDeFoqueteTestI->construirFoguete();
echo $montadorDeFoqueteTestI->getFoguete();

$montadorDeFoqueteTestII->construirFoguete();
echo $montadorDeFoqueteTestII->getFoguete();