<?php

require_once('../autoloader.php');

$integracaoLegado = new \Adapter\IntegracaoErp();

$integracaoErpAdapter = new \Adapter\IntegracaoErpAdapter($integracaoLegado);

$token = $integracaoErpAdapter->gerarToken('123456', 'JOAO_SILVA');

$pedidoTeste = new \Adapter\Pedido();
$pedidoTeste->setValorTotal(3509.50)
    ->setNumeroPedido(123456)
    ->addProduto('IPhone X')
    ->addProduto('Carregador Sem Fio - IPhone X');

$pedidoEnviadoComSucesso = $integracaoErpAdapter->enviarPedido($pedidoTeste, $token);

if ($pedidoEnviadoComSucesso) {
    echo 'Pedido enviado com sucesso!';
}
