<?php

namespace Facade;

$moduloControleEstoque = new ModuloControleEstoque();

$codigoLivro = '123456';
$cpfCliente = '123123123123';

if (!$moduloControleEstoque->validaEstoque($codigoLivro)) {
    throw new Exception('Estoque indisponível');
}

$moduloControleEstoque->registraRetirada($codigoLivro, $cpfCliente);

$moduloSms = new ModuloApiSms();
$moduloControleClientes = new ModuloControleClientes();
$moduloEmail = new ModuloEmail();

$cliente = $moduloControleCLientes->buscaCliente($cpfCliente);

if ($moduloEmail->validaServidorDeEmail()) {
    $moduloEmail->enviaMensagem(
        'Biblioteca de Teste',
        $cliente['nome'],
        $cliente['email'],
        "Aluguel de livro de código '{$codigoLivro}' efetuado com sucesso!"
    );
}

$token = $moduloSms->geraTojenApi($apiKei, $apiPass);

$moduloSms->enviaSms(
    $token,
    'Biblioteca de Teste',
    $cliente['nome'],
    $cliente['telefone'],
    "Aluguel de livro de código '{$codigoLivro}' efetuado com sucesso!"
);