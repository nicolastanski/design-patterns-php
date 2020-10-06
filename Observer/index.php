<?php

require_once('../autoloader.php');

$emailObserver = new \Observer\EmailObserver();
$controleRequisicoesCompraObserver = new \Observer\ControleRequisicoesCompraObserver();

$estoque = new \Observer\ControleEstoqueSubject();
$estoque->adicionarObserver($emailObserver);
$estoque->adicionarObserver($controleRequisicoesCompraObserver);
$estoque->removerObserver($emailObserver);

$estoque->atualizaEstoqueProduto('1234', 0);
$estoque->atualizaEstoqueProduto('5678', 5);