<?php

namespace Facade;

class ModuloControleClientes
{
    public function buscaClientes(string $cpfCliente): array
    {
        return [
           'nome' => 'João da Silva',
           'telefone' => '11999999999',
           'email' => 'email@emai.com'
        ];
    }
}