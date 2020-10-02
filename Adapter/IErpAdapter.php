<?php

namespace Adapter;

interface IErpAdapter
{
    public function gerarToken(string $apiKey, string $usuario): string;

    public function enviarPedido(Pedido $Pedido, string $token): bool;
}