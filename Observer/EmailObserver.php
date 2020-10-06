<?php

namespace Observer;

class EmailObserver implements Observer
{
    public function atualizado(String $codigo) {
        $this->enviaEmailEstoqueZerado($codigo);
    }

    public function enviaEmailEstoqueZerado(string $codigoProduto)
    {
        echo "Email enviado para o setor de compras\n";
    }
}