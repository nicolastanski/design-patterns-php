<?php

require_once('../autoloader.php');

$compradores = [
    'João',
    'Maria',
    'José'
];

$livroPhp = new \Prototype\LivroPhpPrototype();
$livroPhp->setTitulo('Padrões de Projeto em PHP 7.2');

$livros = [];

foreach ($compradores as $nomeComprador) {
    $livroComprador = clone $livroPhp;
    $livroComprador->setNomeTitular($nomeComprador);

    $livros[] = $livroComprador;
}

print_r($livros);